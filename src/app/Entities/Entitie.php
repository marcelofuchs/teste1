<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * classe base de models
 *
 * @author marcelo
 */
class Entitie extends Model {    
    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
}
