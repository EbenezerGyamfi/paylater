<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Property;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PropertyController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Property';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Property());
        $grid->column('category_id');
        $grid->column('pictures')->image();
        $grid->column('title');
        $grid->column('price');
        $grid->column('amenities');
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
        $show = new Show(Property::findOrFail($id));
        $show->select('category_id')->options((new Category())::selectOptions());
        $show->text('pictures', 'pictures');
        $show->text('title','title');
        $show->number('price', 'price');
        $show->text('description', 'description');
        $show->text('url', 'url');

        return $show;
    }

    /**
     * Make a form builder.
     *p
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Property());
        // $form->multipleImage('pictures');
        $form->select('Select Category')->options((new Category())::selectOptions());
        $form->text('title', 'title');
        $form->textarea('description','description');
        $form->number('price', 'price');
        $form->text('url', 'url');
        $form->text('location');
        $form->text('area');
        $form->number('bed');
        $form->number('bath');
        $form->number('kitchen');
        $form->multipleImage('pictures')->sortable();
      $form->multipleSelect('amenities')->options(['Air_condition' =>  'Air_condition','water' =>  'Free Water', 'Tiled' => 'Tiled', 'Kitchen' => 'Kitchen',  'Tv' => 'Tv','Internet' => 'Internet','Security_service' => "Security_service",'Water_reservoir' => "Water_reservoir",'Parking' => "Parking","fenced" => 'fenced','Concrete_Flooring' => 'Concrete_Flooring']);
        return $form;
    }
}
