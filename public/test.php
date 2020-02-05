<?
 // echo 'hello';
//echo shell_exec("env");
define("SHELL_PATH", "C:/xampp/htdocs/mep-concept");
        ini_set('max_execution_time', 60);

        $arrProcess = array(
              "sh",
            "script.sh",
            "2>&1",
        );

        chdir(SHELL_PATH);
       
        //$process = implode(" ", $arrProcess);
        //return $process;
        ob_start();
        exec('C:/Windows/System32/mspaint.exe');
        //$process = shell_exec(implode(" ", $arrProcess));
        ob_end_clean();
        // return response()->json([
        //     "status" => 0,
        //     "process" => $process,
        // ], 200);
