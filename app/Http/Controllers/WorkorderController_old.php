<?php
namespace App\Http\Controllers;

use App\DataTables\WorkOrdersDataTable;

class WorkorderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {

    // $workOrders = WorkOrder::paginate(50);

    // return view('home', ['workOrders' => $workOrders]);
    //dd($workOrders);
    // }
    public function index(WorkOrdersDataTable $dataTable)
    {
        //dd($dataTable);
        return $dataTable->render('workorders.index');
        //return view('workorders.index', ['dataTable' => $dataTable]);
    }

    public function runScript()
    {
        $WshShell = new COM("WScript.Shell");
        $obj = $WshShell->Run("cscript C:/wamp/www/mep-concept/public/readwrite.vbs", 1, true);
        return redirect::to('/home');
    }

}
