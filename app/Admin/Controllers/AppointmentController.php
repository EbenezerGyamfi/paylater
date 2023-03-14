<?php

namespace App\Admin\Controllers;

use App\Models\Appointment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AppointmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Appointment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Appointment());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('email', __('Email'));
        $grid->column('phone', __('Phone'));
        $grid->column('date', __('Date'));
        $grid->column('time', __('Time'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('propertyname', __('Propertyname'));

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
        $show = new Show(Appointment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('email', __('Email'));
        $show->field('phone', __('Phone'));
        $show->field('date', __('Date'));
        $show->field('time', __('Time'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('propertyname', __('Propertyname'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Appointment());

        $form->text('name', __('Name'));
        $form->email('email', __('Email'));
        $form->mobile('phone', __('Phone'));
        $form->date('date', __('Date'))->default(date('Y-m-d'));
        $form->time('time', __('Time'))->default(date('H:i:s'));
        $form->text('propertyname', __('Propertyname'));

        return $form;
    }
}
