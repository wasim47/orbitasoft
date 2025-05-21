<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCategory extends Model
{
    use HasFactory;
    protected $fillable = [];

    protected $guarded = ['id'];

    public function packages() {
        return $this->hasMany(Package::class, 'category_id','id');
    }
}

