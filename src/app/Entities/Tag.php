<?php
namespace App\Entities;
use App\Entities\Entitie;

/**
 * Description of Tag
 *
 * @author marcelo
 */
class Tag extends Entitie {
    
    protected $table = 'Tag';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tag']; 
    
    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
    
    public function Posts(){
        return $this->belongsToMany(Post::class, 'PostTag', 'idPost', 'idTag');
    }
}
