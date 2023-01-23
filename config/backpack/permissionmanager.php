<?php

return [


    'models' => [
        'user'       => config('backpack.base.user_model_fqn', \App\Models\User::class),
        'permission' => Backpack\PermissionManager\app\Models\Permission::class,
        'role'       => Backpack\PermissionManager\app\Models\Role::class,
    ],

    'allow_permission_create' => true,
    'allow_permission_update' => true,
    'allow_permission_delete' => true,
    'allow_role_create'       => true,
    'allow_role_update'       => true,
    'allow_role_delete'       => true,

    'multiple_guards' => false,

];
