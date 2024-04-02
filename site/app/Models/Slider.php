<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'table_slide';
    protected $fillable = ['title', 'description', 'image', 'text_button', 'link_button'];
}
