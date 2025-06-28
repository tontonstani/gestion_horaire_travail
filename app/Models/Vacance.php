<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacance extends Model
{
    /** @use HasFactory<\Database\Factories\VacanceFactory> */
    protected $fillable = ["debut_vacance", "fin_vacance", "id_employe"];
    use HasFactory;
}
