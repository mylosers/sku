<?php

namespace App\Admin\Actions\Goods;

use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;

class Sku extends RowAction
{
    public $name = 'sku操作';

    public function href()
    {
        //echo $id;
        //echo $this->getKey();die;
        $key = $this->getKey();
        return '/admin/sku_info/'.$key;
    }

}