<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Team;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class TeamController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Team(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('logo');
            $grid->column('province');
            $grid->column('city');
            $grid->column('district');
            $grid->column('address');
            $grid->column('contact_name');
            $grid->column('contact_phone');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Team(), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('logo');
            $show->field('province');
            $show->field('city');
            $show->field('district');
            $show->field('address');
            $show->field('contact_name');
            $show->field('contact_phone');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Team(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('logo');
            $form->text('province');
            $form->text('city');
            $form->text('district');
            $form->text('address');
            $form->text('contact_name');
            $form->text('contact_phone');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
