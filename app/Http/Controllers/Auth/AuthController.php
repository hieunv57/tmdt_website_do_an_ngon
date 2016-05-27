<?php namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Session;
use App\User;
use App\Products;
use Socialite;
use Auth;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getRegister()
	{
		if (Session('doi-mat-khau')){
            Session::forget('doi-mat-khau');
        }
		return view('fontend.pages.dang-ky');
	}

	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin()
	{
		return view('fontend.pages.dang-nhap');
	}
	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->auth->login($this->registrar->create($request->all()));
		Session::put('doi-mat-khau','Đổi mật khẩu thành công');
		return redirect($this->redirectPath());
	}
	/**
	 * Get the failed login message.
	 *
	 * @return string
	 */
	protected function getFailedLoginMessage()
	{
		return 'Địa chỉ email hoặc mật khẩu không đúng';
	}
	
	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}
	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function loginPath()
	{
		return property_exists($this, 'loginPath') ? $this->loginPath : '/dang-nhap';
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}


	public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }
 
    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }
        $authUser = $this->findOrCreateUser($user);
 
        Auth::login($authUser, true);
 
        return redirect('/');
    }
 
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $facebookUser
     * @return User
     */
     private function findOrCreateUser($facebookUser)
    {
        $authUser = User::where('facebook', $facebookUser->id)->first();
 		
        if ($authUser){
            return $authUser;
        }
 
        return User::create([
            'name' => $facebookUser->name,
            'email' => $facebookUser->email,
            'facebook' => $facebookUser->id,
            'avatar' => $facebookUser->avatar
        ]);
    }

    public function google()
    {
       return Socialite::with('google')->redirect();
    }   

    public function callbackgoogle()
    {
        $user = Socialite::with('google')->user();

        dd($user);
    }
     public function facebook()
    {
       return Socialite::with('facebook')->redirect();
    }   

    public function callbackfacebook()
    {
        $user = Socialite::with('facebook')->user();

        dd($user);
    }
}
