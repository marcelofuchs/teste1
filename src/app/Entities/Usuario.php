<?php
namespace App\Entities;
use App\Entities\Entitie;

/**
 * Description of Tag
 *
 * @author marcelo
 */
class Usuario extends Entitie {
    
    protected $table = 'Usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nome', 'email', 'senha', 'status',  'token']; 
    
    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
    
    public function Posts(){
        return $this->hasMany(Post::class, 'idUsuario');
    }
}
