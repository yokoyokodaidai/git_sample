<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     * ログインの条件を追加
     */
    protected function credentials(Request $request)
    {
        $conditions = $request->only($this->username(), 'password');
        $conditions_custom = array_merge(
            $conditions,
            ['company_id' => '1']
        );
        return $conditions_custom;
    }

    public function redirectPath()
    {
        // ログイン時、セッションにcompany_codeを格納
        $Company = new Company();
        $companyId = Auth::user()->company_id;
        $companyData = $Company->where('company_id', $companyId)->first();

        session(['company_code' => $companyData["company_code"]]);

        return $companyData["company_code"] . '/admin';
        //例）return 'costs/index';
    }

    public function username()
    {
        return 'user_code';
    }
}
