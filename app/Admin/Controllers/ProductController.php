<?php

namespace App\Admin\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->disableExport();

        $grid->column('id', __('Id'));
        $grid->column('brand.name');
//        $grid->column('brand_id', __('Brand id'));
        $grid->column('name', __('Name'));
        $grid->column('price', __('Price'))->display(function ($price) {
            return $price . ' руб.';
        });
        $grid->column('description', __('Description'));
        $grid->column('in_stock', __('In stock'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('brand_id', __('Brand id'));
        $show->field('name', __('Name'));
        $show->field('price', __('Price'));
        $show->field('description', __('Description'));
        $show->field('in_stock', __('In stock'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

//        $form->number('brand_id', __('Brand id'));
        $form->select('brand_id')->options(function ($id) {
            $brand = Brand::find($id);
//            if ($brand) {
//                return [$brand->id => $brand->name];
//            }
            $all = Brand::where('id', '<>', $brand->id)->get();
            return array_merge([$brand->id => $brand->name], $all->pluck('name', 'id')->all());

        });
        $form->text('name', __('Name'));
        $form->decimal('price', __('Price'));
        $form->textarea('description', __('Description'));
        $form->switch('in_stock', __('In stock'))->default(1);

        $form->image('pic', 'Picture')->thumbnail('small', $width = 100, $height = 100);

        return $form;
    }
}
