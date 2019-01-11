<?php
namespace estoque\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    public $timestamps = false;

    protected $fillable = array(
        'nome',
        'valor',
        'descricao',
        'quantidade',
        'tamanho',
        'categoria_id'
    );

    public function categoria()
    {
        return $this->belongsTo('estoque\Http\Models\Categoria');
    }
}
