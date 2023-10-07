<?php

namespace App\Http\Controllers;

use App\Models\LocalSport;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use \stdClass;

class LocalSportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Inertia::render('LocalSport/AddLocalSprot');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try{
            $createSport = LocalSport::create([
                'esprotes' => $request->esporte,
                'rua' => $request->rua,
                'bairro' => $request->bairro,
                'complemento' => $request->complemento,
                'descricao' => $request->descricao,
            ]);

            return Redirect::route('dashboard');
        }catch(Exception $err){
            dd('erro');
        }
       


        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LocalSport $localSport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocalSport $localSport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LocalSport $localSport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocalSport $localSport)
    {
        //
    }
}
