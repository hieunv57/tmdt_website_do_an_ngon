<?php namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;
use Illuminate\Http\Request;

class SocialiteCotroller extends Controller {

	public function redirect()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function callback()
    {
        // when facebook call us a with token   
    }

}
