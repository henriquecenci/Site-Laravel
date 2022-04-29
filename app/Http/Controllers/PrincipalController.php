<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;

class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->only(['deletar', 'editar', 'cadastrar']);
    }

    //LISTAR PRODUTO -------------------------------------------------------------------------------------------
    public function listar(){
        $produto = new Produto();
        $produtos = $produto->nome_categoria()->paginate(4);
        return view('listarProdutos', compact('produtos'));
    }

    
    //CADASTRAR PRODUTO -------------------------------------------------------------------------------------------

    public function cadastrar(){
        $categorias = Categoria::all();
        return view('cadastraProduto', compact('categorias'));
    }

    public function salvar(Request $request){
        $d = $request->except("_token");
        $produto = new Produto;
        $this -> validate($request, $produto ->rules, $produto->messages);
        
        if ($request->hasFile('imagem')){
            $novoNome = $request->file('imagem')->store('imagens', 'public');
        }
        
        $d['imagem'] = $novoNome;

        $insert = Produto::create($d);
        if($insert){
            return redirect()->route('listarProdutos');
        }else{
            return redirect()->route('cadastraProdutos');
        }
    }


    //DELETAR PRODUTO -------------------------------------------------------------------------------------------

    public function deletar($id){
        $produto = Produto::find($id);
        $delete = $produto ->delete();   
        Storage::disk('public')->delete($produto->getAttributes()['imagem']);
        if($delete){
            return redirect()->route('listarProdutos');
        }else{
            return redirect()->route('cadastraProdutos');
        }
    }

    
    //EDITAR PRODUTO -------------------------------------------------------------------------------------------

    public function editar($id){
        $produto = Produto::find($id);
        $categorias = Categoria::all();
        return view('editarProduto', compact('produto', 'categorias'));
    }


    public function atualizar(Request $request, $id){
        $dados = $request->except("_token");
        $produto = Produto::find($id);
        $this -> validate($request, $produto ->rules, $produto->messages);
        
        $editar = $produto->update($dados);

        if($editar){
            return redirect()->route('listarProdutos');
        }else{
            return redirect()->route('editarProduto/$id');
        }
        
    }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
