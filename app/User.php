<?php namespace App;
use Auth;
use DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'phone', 'quantity_posted_place', 'address', 'gender', 'facebook', 'status', 'role_id','avatar'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	public function findString($string){
        $users=User::where('email','like','%'.$string.'%')->orWhere('name','like','%'.$string.'%')->orWhere('id','like','%'.$string.'%')->orWhere('facebook','like','%'.$string.'%')->orWhere('phone','like','%'.$string.'%')
        ->orWhere('address','like','%'.$string.'%')->orWhere('status','like','%'.$string.'%')->orWhere('gender','like','%'.$string.'%');
        return $users;
    }

    public function findUser($id)
    {
    	$user=DB::table('users')->select('users.*')
           ->where('users.id','=', $id)->get();
        return $user;
    }
	protected $hidden = ['password', 'remember_token'];

	
}
