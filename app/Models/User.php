<?php namespace App\Models;

use DebugBar\DebugBar;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     * NOTE: Tenant Scope (company_id) should not be mass assignable
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'enabled', 'timezone', 'locale', 'role_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The accessor to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['full_name'];

    protected $casts = [ 'id' => 'integer', 'company_id' => 'integer', 'role_id' => 'integer' ];

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "$this->first_name $this->last_name";
    }

    /**
     * A user belongs to a role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * A user belongs to one company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Assign the given role to the user.
     *
     * @param  string $role
     * @return mixed
     */
    public function assignRoleByName($roleName)
    {
        return $this->role()->associate(Role::whereName($roleName)->firstOrFail())->save();
    }

    /**
     * Determine if the user has the given role.
     *
     * @param  mixed $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return !! $this->role->name === $role;
        }
        return !! $this->role->id === $role->id;
    }

    /**
     * A user may have many permissions (via the role).
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function permissions()
    {
        return $this->role->permissions();
    }

    /**
     * Determine if the user may perform the given permission.
     *
     * @param  Permission $permission
     * @return boolean
     */
    public function hasPermission($permissionName)
    {
        return $this->role->permissions->contains('name', $permissionName);
    }

    public function scopeTenant($query, $user)
    {
        return $query->where('company_id', $user->company_id);
    }

    public function isAdmin()
    {
        return $this->role_id === Role::ROLE_ADMIN;
    }

    public function isUser()
    {
        return $this->role_id === Role::ROLE_USER;
    }

    public function owns($resource)
    {
        return $this->company_id === $resource->company_id;
    }
}
