<?php

namespace App\Entities;

use App\Entities\Entitie;

/**
 * Description of Tag
 *
 * @author marcelo
 */
class Post extends Entitie {

    protected $table = 'Post';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['post', 'idUsuario'];

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }

    public function Usuario(){
        
    }
    
    public function Tags(){
        return $this->belongsToMany(Tag::class, 'PostTag', 'idTag', 'idPost');
    }
}
