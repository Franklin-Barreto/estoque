<?php
namespace estoque\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    public function produtos()
    {
       return $this->hasMany('estoque\Http\Models\Produto');
    }
}
