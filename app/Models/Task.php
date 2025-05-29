<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $fillable['nome_campo_data_base']; serve per salvare le informazioni inserite dall'utente nel form html
    protected $fillable = ['task'];
}
