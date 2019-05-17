<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ControllerProduto extends Controller
{

    public function index()
    {
        $prods = Produto::all();
        return view('produtos', compact('prods'));
    }


    public function create()
    {
        return view('novoproduto');
    }


    public function store(Request $request)
    {
        $prod = new Produto();
        $prod->sku = $request->input('skuProduto');
        $prod->nome = $request->input('nomeProduto');
        $prod->descricao = $request->input('descProduto');
        $prod->preco = $request->input('precoProduto');
        $prod->save();
        return redirect('/produtos');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            return view('editarproduto', compact('prod'));
        }
        return redirect('/produtos');
    }

    public function update(Request $request, $id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->sku = $request->input('skuProduto');
            $prod->nome = $request->input('nomeProduto');
            $prod->descricao = $request->input('descProduto');
            $prod->preco = $request->input('precoProduto');
            $prod->save();

        }
        return redirect('/produtos');
    }

    public function destroy($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            $prod->delete();
        }
        return redirect('/produtos');
    }
}
