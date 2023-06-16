<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $user_name
 * @property string $user_firstname
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $fk_role_id
 * 
 * @property Role $role
 *
 * @package App\Models
 */
class User extends Model implements Authenticatable
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';

	protected $casts = [
		'email_verified_at' => 'datetime',
		'fk_role_id' => 'int'
	];

	protected $hidden = [
		'password',
		'two_factor_secret',
		'remember_token'
	];

	protected $fillable = [
		'user_name',
		'user_firstname',
		'email',
		'email_verified_at',
		'password',
		'two_factor_secret',
		'two_factor_recovery_codes',
		'remember_token',
		'fk_role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'fk_role_id');
	}

	 /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'user_id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

	public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

}