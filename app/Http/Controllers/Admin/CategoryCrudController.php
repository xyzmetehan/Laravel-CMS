<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('Kategori', 'Kategoriler');
    }

    protected function setupListOperation()
    {
        CRUD::column('name')->label('Kategori Adı');
        CRUD::column('slug')->label('SEO URL');
        CRUD::column('description')->label('Açıklama');
        CRUD::column('parent_id')->label('Üst Kategori');

    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(CategoryRequest::class);

        CRUD::field('name')->label('Kategori Adı');
        CRUD::field('slug')->label('SEO URL');
        CRUD::field('description')->label('Açıklama');
        CRUD::field('parent_id')->label('Üst Kategori');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
