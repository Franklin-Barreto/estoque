<?php
namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Http\Models\Produto;
use estoque\Http\Requests\ProdutosRequest;
use estoque\Http\Models\Categoria;

class ProdutoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', [
            'only' => [
                'adiciona',
                'remove'
            ]
        ]);
    }

    public function lista()
    {
        return view('produto.listagem')->with('produtos', Produto::all());
    }

    public function listajson()
    {
        return response()->json(Produto::all());
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return 'Esse produto não existe';
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function edita($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return 'Esse produto não existe';
        }
        return view('produto.edita')->with('p', $produto)->with('categorias',Categoria::all());
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        if (empty($produto)) {
            return 'Esse produto não existe';
        }
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function novo()
    {
        return view('produto.novo')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutosRequest $request)
    {
        Produto::create($request->all());
        return redirect()->action('ProdutoController@lista')->withInput($request->flashOnly([
            'nome'
        ]));
    }

    public function altera(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->action('ProdutoController@lista')->withInput($request->flashOnly([
            'nome'
        ]));
    }
}
