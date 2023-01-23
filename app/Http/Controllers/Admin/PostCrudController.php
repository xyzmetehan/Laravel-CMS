<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class PostCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Post::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/post');
        CRUD::setEntityNameStrings('İçerik', 'İçerikler');
    }

    protected function setupListOperation()
    {
        CRUD::column('title')->label('Başlık');
        CRUD::column('slug')->label('SEO URL');
        CRUD::column('content')->label('İçerik');
        CRUD::column('user_id')->label('Yazar');
        CRUD::column('category_id')->label('Kategori');
        CRUD::column('status')->label('Durum');
        CRUD::column('featured_image')->label('Resim');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(PostRequest::class);

        CRUD::field('title')->label('Başlık');
        CRUD::field('slug')->label('SEO URL');
        CRUD::field('content')->label('İçerik');
        CRUD::field('user_id')->label('Yazar');
        CRUD::field('category_id')->label('Kategori');
        CRUD::field('status')->label('Durum');
        CRUD::field('featured_image')->label('Resim')
            ->type('upload')->disk('uploads')->tab('Resim Yönetimi');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
