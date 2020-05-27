<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class recipe
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

    public function user(){
        return $this->belongsTo(User::class);
    }
}
