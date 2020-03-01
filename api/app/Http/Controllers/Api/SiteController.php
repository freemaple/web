<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController
{

    /**
     * 用户列表
     *
     * @return void
    */
    public function index(Request $request)
    {
    	$data = json_decode($request->data, true);
        return response()->json([
        	'data' => [
        		'count' => 33,
        		'user_name' => $data['user_name'],
        		'employees' => [
        			['name' => '1'],
        			['name' => '2'],
        			['name' => '3']
        		]
        	]
        ]);
    }

    /**
     * 用户列表
     *
     * @return void
    */
    public function getList(Request $request)
    {
        return response()->json([
            'data' => [
                'list' => [
                    [
                        'name' => '儿童电动摩托车三轮车大号警车1',
                        'image' => '/images/img2.jpeg',
                        'ship' => '退货包运费',
                        'price' => '￥144.33',
                        'pin' => '567'
                    ],
                     [
                        'name' => '儿童电动摩托车三轮车大号警车2',
                        'image' => '/images/img2.jpeg',
                        'ship' => '退货包运费',
                        'price' => '￥132.33',
                        'pin' => '133',
                    ],
                     [
                        'name' => '儿童电动摩托车三轮车大号警车3',
                        'image' => '/images/img2.jpeg',
                        'ship' => '退货包运费',
                        'price' => '￥16.33',
                        'pin' => '193'
                    ], [
                        'name' => '儿童电动摩托车三轮车大号警车4',
                        'image' => '/images/img2.jpeg',
                        'ship' => '退货包运费',
                        'price' => '￥14.33',
                        'pin' => '113'
                    ],
                ]
            ]
        ]);
    }
}