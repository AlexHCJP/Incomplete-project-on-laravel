<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Recipe
 * @package App
 *
 * @property-read $id
 * @property $name
 * @property $title
 * @property $text
 * @property $likes
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 */
class Recipe extends Model
{
    protected $fillable = [
        'name', 'text', 'title', 'user_id', 'likes'
    ];
}
