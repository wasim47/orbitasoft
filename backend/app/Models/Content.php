<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [];

    protected $guarded = ['id'];

    public function menu() {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
