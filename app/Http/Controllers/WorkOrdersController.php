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
   

    public function runScript()
    {
        

        define("SHELL_PATH", "/xampp/htdocs/mep-concept");
        ini_set('max_execution_time', 60);

        $arrProcess = array(
            "sh",
            "./script.sh",
            "2>&1",
        );

        chdir(SHELL_PATH);
        ob_start();
        $process = shell_exec(implode(" ", $arrProcess));
        ob_end_clean();
        // $process = new Process(implode(" ", $arrProcess));

        // $process->run(function ($type, $buffer) {
        //     if (Process::ERR === $type) {
        //         return response()->json([
        //             "status" => 1,
        //             "code" => 5004,
        //             "msg" => "Error when run site",
        //         ], 500);
        //     } else {
        //         return response()->json([
        //             "status" => 0,
        //             "msg" => "Run shell successfully",
        //             "process" => $buffer,
        //         ], 401);
        //     }

        // });

       return redirect('/home');
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
