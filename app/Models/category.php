<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

  // Category.php (Model)
public function brands() {
    return $this->hasMany(Brand::class);
}

}

