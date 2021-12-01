<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Categoria;
use App\Imagen;


class Articulo extends Model
{
    use SoftDeletes;
    /* declaramos nuestros campos de nuestra tabla tags*/
    protected $fillable = [
        'titutlo',
        'imagen',
        'subtitulo',
        'contenido',
        'categoria_id',
        'imagen_id',
    ];

    /* definindo la relacion de article and category one a one */
    public  function categoria()
    {
        return $this->hasOne(Categoria::class, 'foreign_key');
    }

    /* definimos la relacion de imagenes  one a one  */

    public function imagen()
    {
        return $this->hasMany('App\Imagen', 'foreign_key', 'imagen_id');
    }

    /**
     * Get the user that owns the Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
