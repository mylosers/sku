<?php

namespace App\Admin\Controllers;

use App\Model\SkuModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Facades\Request;

class SkuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Model\SkuModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SkuModel);

        $grid->column('id', __('Id'));
        $grid->column('goods_id', __('Goods id'));
        $grid->column('goods_sn', __('Goods sn'));
        $grid->column('sku', __('Sku'));
        $grid->column('desc', __('Desc'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('price0', __('Price0'));
        $grid->column('price', __('Price'));
        $grid->column('store', __('Store'));
        $grid->column('is_onsale', __('Is onsale'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SkuModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('goods_id', __('Goods id'));
        $show->field('goods_sn', __('Goods sn'));
        $show->field('sku', __('Sku'));
        $show->field('desc', __('Desc'));
        $show->field('updated_at', __('Updated at'));
        $show->field('price0', __('Price0'));
        $show->field('price', __('Price'));
        $show->field('store', __('Store'));
        $show->field('is_onsale', __('Is onsale'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SkuModel);

        $form->number('goods_id', __('Goods id'));
        $form->text('goods_sn', __('Goods sn'));
        $form->text('sku', __('Sku'));
        $form->text('desc', __('Desc'));
        $form->number('price0', __('Price0'));
        $form->number('price', __('Price'));
        $form->text('store', __('Store'));
        $form->number('is_onsale', __('Is onsale'));

        return $form;
    }

    public function goods_sku(Request $request,$goods_id){
        dd($goods_id);
    }
}
