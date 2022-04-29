<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $rules = [
        'produto' => 'required|min:3|max:100',
        'preco' => 'required|min:1|max:9999999',
        'imagem' => 'required',
    ];

    public $messages = [
        'produto.required' => 'o campo PRODUTO é obrigatorio',
        'produto.min' => 'o campo PRODUTO deve ter no minino 3 caracteres',
        'imagem.required' => 'o campo IMAGEM é obrigatorio',
        'preco.required' => 'o campo PRECO é obrigatorio',
        'preco.min' => 'o campo PRECO deve ter no minino 1 real de valor',
    ];

    protected $fillable = ['produto', 'preco', 'imagem', 'categoria_id'];

    public function nome_categoria(){
        return Produto::select('produtos.id','produtos.produto as produto', 'categorias.categoria as categoria_id', 'produtos.preco', 'produtos.imagem')->join('categorias', 'produtos.categoria_id', '=', 'categorias.id');
    }
}
