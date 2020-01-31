<?php

namespace App\Http\Controllers;

use App\DataTables\TestDataTable;

class HomeController extends Controller
{
    public function index(TestDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }
}
