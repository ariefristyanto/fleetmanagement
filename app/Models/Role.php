<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    const ROLE_ADMIN = 1;
    const ROLE_USER = 2;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    protected $casts = [ 'id' => 'integer'];

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->BelongsToMany(Permission::class);
    }

}
