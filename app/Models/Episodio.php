<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'temporada',
        'numero',
        'assistido',
    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
