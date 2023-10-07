<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\LocalSport;


class DasboardController extends Controller
{
    public function index(Request $request){

        return Inertia::render('Dashboard', [
            'esportes' => LocalSport::latest()->take(10)->get()->map(function ($esportes) {
                return [
                    'local' => $esportes->esportes,
                    'rua' => $esportes->rua,
                    'bairro' => $esportes->bairro,
                    'complemento' => $esportes->complemento,
                    'descricao' => $esportes->descricao,
                ];
            }),
            'imagemEsportes' => asset('images/esportes.png'),
            'status' => session('status'),
        ]);

    }

    
}
