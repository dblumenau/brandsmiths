<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
	protected $fillable = ['media_id', 'heading', 'description', 'path', 'thumbnail', 'order', 'type', 'active'];
}
