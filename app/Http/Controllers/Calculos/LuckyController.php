<?php
namespace App\Http\Controllers\Calculos;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    public function number()
    {
        $max = 100;

        $number = random_int(0, $max);

        return $number;
    }
}