<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Support\Facades\URL;

class TestMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // セッションが無い場合はログイン画面へ
        if (!session()->has('company_code')) {
            Auth::logout();
            return redirect()->route('login');
        }

        $companyCode = session("company_code");
        $paramId = $request->route()->parameter('company_code');

        // リクエストパラメータとセッションのパラメータ比較、違うcompany_codeを入れられた場合、弾く
        if ($paramId === $companyCode) {
            // URLのデフォルト値に会社名を付与する
            URL::defaults(['company_code' => $companyCode]);
            return $next($request);
        }

        return redirect()->route('admin', ['company_code' => $companyCode]);
    }
}
