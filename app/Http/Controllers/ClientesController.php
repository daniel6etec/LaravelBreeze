<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request)
        {
            $request->validate([
                'nome' => ['required', 'string', 'max:255'],
                'endereco' => ['required', 'string', 'max:255'],
                'bairro' => ['required', 'string', 'max:255'],
                'cep' => ['required', 'integer'],
                'cidade' => ['required', 'string', 'max:255'],
                'estado' => ['required', 'string', 'max:255'],
            ]);
    
            $user = clientes::create([
                'Nome' =>$request->nome,
                'Endereco' =>$request->endereco,
                'Bairro' =>$request->bairro,
                'Cep' =>$request->cep,
                'Cidade' =>$request->cidade,
                'Estado' =>$request->estado,
            ]);

            return redirect('/registrar');
        }

    /**
     * Display the specified resource.
     */
    public function show(clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, clientes $clientes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(clientes $clientes)
    {
        //
    }
}
