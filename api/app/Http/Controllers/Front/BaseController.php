<?php
namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Auth;
use App;
use EasyWeChat\Foundation\Application;

class BaseController extends Controller
{
    //是否开启证书
	protected  $_CFG_SECURE;
	//站点名称
	protected $_CFG_SITE_NAME;
	//登录用户
	protected  $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
    	//获取session用户
    	$this->middleware(function ($request, $next){
    		$user = Auth::user();
    		view()->share('session_user', $user);
    		$this->_after($user);
    		return $next($request);
    	});
	}
	/**
	 * 回调取用户变量
	 * @param ORM $user
	 */
	private function _after($user)
	{
		$this->user = $user;
	}

    public function isWeixin(){
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false) { 
            return true; 
        } else {
            return false; 
        }
    }

     /**
     * 记录sql语句
     */
    protected  function sqlLog()
    {
        \DB::listen(function($sql){
            $bindings = $sql->bindings;
            $str = $sql->sql;
            $log = new \Monolog\Logger('sql');
            $log->pushHandler(
                new \Monolog\Handler\StreamHandler(storage_path('logs/console/sql.log'), \Monolog\Logger::INFO)
            );
            $log->addInfo($str.' param:['.implode($bindings, ',').']');
        });
    }
}
