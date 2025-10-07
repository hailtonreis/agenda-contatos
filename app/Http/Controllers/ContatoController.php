<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = Contato::all();
        return view('contatos.index', compact('contatos'));

    }

    public function create()
    {
        return view('contatos.create');
    }

    public function store(Request $request)
    {
        Contato::create($request->all());
        return redirect()->route('contatos.index')
                        ->with('success', 'Contato criado com sucesso!');
    }

    public function destroy($id)
    {
        $contato =  Contato::findOrFail($id);
        $contato->delete();

        return redirect()->route('contatos.index')
                                ->with('success', 'Contato excluído com sucesso!');
    }

          
    public function show($id)
    {
        $contatos = Contato::findOrFail($id);
        return view('contatos.show', compact('contatos'));
    }

   
    public function edit($id)
    {
         $contato = Contato::findOrFail($id);
        return view('contatos.edit', compact('contato'));
    }

 
    public function update(Request $request, $id)
    {
       

    $contato = Contato::findOrFail($id);

    $contato->update($request->all());

    return redirect()->route('contatos.index')
                     ->with('success', 'Contato atualizado com sucesso!');
}


}

