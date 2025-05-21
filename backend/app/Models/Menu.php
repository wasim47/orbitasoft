<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $fillable = [];

    protected $guarded = ['id'];

    public function subMenu()
	{
		return $this->hasMany(Menu::class, 'parent_id', 'id')->whereNull('sparent_id')->with('lastMenu');;
	}
    
	public function lastMenu()
	{
		return $this->hasMany(Menu::class, 'sparent_id', 'id');
	}

    public function content()
	{
		return $this->belongsTo(Content::class, 'id', 'menu_id');
	}
}
