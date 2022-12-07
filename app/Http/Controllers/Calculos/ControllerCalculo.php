<?php 

namespace App\Http\Controllers\Calculos;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ControllerCalculo extends Controller{

    public function calcularMuestraDos(Request $request){

        $process = new Process(['python', '/var/www/simule/resources/python/hola_mundo.py']);
$process->run();




// executes after the command finishes
if (!$process->isSuccessful()) {
    throw new ProcessFailedException($process);
}

    echo $process->getOutput();
    }
}




