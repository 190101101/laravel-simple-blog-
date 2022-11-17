<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
	protected $table = 'Slider';
	protected $fillable = [
		'slider_title', 
		'slider_slug',
		'slider_content',
		'slider_url',
		'slider_file',
	];
}
