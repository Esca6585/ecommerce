<?php

namespace App\Http\Controllers\AdminControllers\Table;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\DataTables\CategoryDataTable;
use App\Models\Category;
use DB;


class TableController extends Controller
{
    public function getData($lang, $modelName, $routeName)
    {
        $model = 'App\Models\\' . $modelName;

        $model = $model::query();

        return Datatables::of($model)

        ->toJson();
    }

    public function datatable(CategoryDataTable $dataTable)
    {
        return $dataTable->render('admin-panel.category.category');
    }
}
