<?php

namespace App\Enums\ViewPaths\Admin;

enum Employee
{
    const LIST = [
        URI => 'list',
        VIEW => 'vendor-views.employee.list'
    ];

    const ADD = [
        URI => 'add',
        VIEW => 'vendor-views.employee.add-new'
    ];

    const VIEW = [
        URI => 'view',
        VIEW => 'vendor-views.employee.view'
    ];

    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];

    const UPDATE = [
        URI => 'update',
        VIEW => 'vendor-views.employee.edit'
    ];

    const STATUS = [
        URI => 'status',
        VIEW => ''
    ];

}
