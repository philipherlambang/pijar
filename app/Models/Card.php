<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table ='cards';
    protected $fillable =['title', 'slug'];

    /**
     * Get all of the comments for the Card
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(Task::class, 'card_id');
    }
}
