<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'phone', 'fax', 'theme'];

    protected $casts = [ 'id' => 'integer'];

    /**
     * A company may have many users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
