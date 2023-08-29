<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CentroCusto,Lancamento,User};

class CentroCustoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centroCustos = CentroCusto::orderBy('centro_custo')
        ->paginate(10);
        return view('centro.index')
            ->with(compact('centroCustos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centro = null;
        return view('centro.form')
            ->with(compact('centro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         CentroCusto::crete($request->all());
         return redirect()
             ->route('centro.index')
            ->with('novo','Centro de Custo cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $centro = CentorCusto::with([
            'lancamentos',
            'lancamentos.tipo',
            'lancamentos.usuario',
        ])
             ->find($id)
            ->paginate(10);

            return view('centro.show')
            ->wite(compact('centro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $centro = CentroCusto::find($id);
        return view('centro.form')
            ->with(compact('centro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $centro = CentroCusto::find($id);
        $centro->update($request->all());
        return redirect()
            ->route('centro.index')
            ->with('atualizar','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        CentroCusto::find($id)->delete();
        return redirect()
            ->back()
            ->with('excluido','Excluido com sucesso!');
    }
}
