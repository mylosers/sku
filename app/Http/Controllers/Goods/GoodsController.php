<?php

namespace App\Http\Controllers\Goods;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Model\GoodsModel;
use App\Model\CartModel;

class GoodsController extends Controller
{
    public function goods(){
        $data=GoodsModel::get()->toArray();
        return view('goods.goodslist',['data'=>$data]);
    }

    public function goodsList($goods_id){
        $data=GoodsModel::where(['goods_id'=>$goods_id])->first()->toArray();
        return view('goods.goodsdesc',['data'=>$data]);
    }

    public function cart($goods_id){
        $data=[
            'goods_id'=>$goods_id,
            'uid'=>111,
            'goods_num'=>1
        ];

        $info=CartModel::insertGetId($data);
        if($info){
            header("Location:/cartlist");
        }
    }

    public function cartlist(){
        $data=CartModel::get()->toArray();
        return view('goods.cartlist',['data'=>$data]);
    }
}