<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Cache\Banner as BannerCache;

use App\Libs\Service\ProductDispalyService;
use App\Cache\ProductCategory as ProductCategoryCache;
use App\Cache\Home as HomeCache;

class SiteController extends BaseController
{

    /**
     * 用户列表
     *
     * @return void
    */
    public function index(Request $request)
    {
        return 1;
    }
}