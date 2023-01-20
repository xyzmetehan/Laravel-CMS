<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\User::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/user');
        CRUD::setEntityNameStrings('Kullanıcı', 'Kullanıcılar');
    }

    protected function setupListOperation()
    {
        CRUD::column('name')->label('Ad/Soyad');
        CRUD::column('email')->label('Email Adresi');
        CRUD::column('password')->label('Şifre');

    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(UserRequest::class);

        CRUD::field('name')->label('Ad/Soyad');
        CRUD::field('email')->label('Email Adresi');
        CRUD::field('password')->label('Şifre');

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
