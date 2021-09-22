<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $table = 'articles'; // Nom de la table concernée par cette classe
    protected $primaryKey = 'idArticles';
	public $timestamps = false; // Désactive la gestion des colonnes created_at et updated_at
    // use HasFactory;
}
