<?php
namespace App\Http\Controllers;

use Datatables;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class WorkOrdersController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($dataTable);
        return view('workorders.index');
        //return view('workorders.index', ['dataTable' => $dataTable]);
    }
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = WorkOrder::latest()->get();
    //         //dd($data);
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('action', function ($row) {

    //                 $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

    //                 return $btn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    //     return view('workorders.index');
    // }

    public function runScript()
    {
        // $out = shell_exec("php test.php 2> output");
        // print $out ? $out : join("", file("output"));
        // die();

        define("SHELL_PATH", "/wamp/www/mep-concept");
        ini_set('max_execution_time', 60);

        $arrProcess = array(
            "sh",
            "./script.sh",
            "2>&1",
        );

        chdir(SHELL_PATH);
        $process = new Process(implode(" ", $arrProcess));
        $process->run(function ($type, $buffer) {
            if (Process::ERR === $type) {
                return response()->json([
                    "status" => 1,
                    "code" => 5004,
                    "msg" => "Error when run site",
                ], 500);
            } else {
                return response()->json([
                    "status" => 0,
                    "msg" => "Run shell successfully",
                    "process" => $buffer,
                ], 200);
            }

        });
    }

    public function workorderData()
    {
        $workorders = DB::table('work_orders')->select('*');
        //dd($workorders);
        return datatables()->of($workorders)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
