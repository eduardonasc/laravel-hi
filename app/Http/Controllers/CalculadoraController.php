<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $resultado = 0;
        if ($request->operador == '+') {
            $resultado = $request->num1 + $request->num2;
        }

        if ($request->operador == '-') {
            $resultado = $request->num1 - $request->num2;
        }

        if ($request->operador == '/') {
            $resultado = $request->num1 / $request->num2;
        }

        if ($request->operador == '*') {
            $resultado = $request->num1 * $request->num2;
        }

        return view('resultado', compact('resultado'));
    }
}
