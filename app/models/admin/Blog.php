<?php

namespace App\models\admin;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'Blog';
	protected $fillable = ['blog_title', 'blog_content', 'blog_slug'];
}
