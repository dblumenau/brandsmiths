<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Media extends Model
{
    protected $fillable = ['description', 'type', 'alt', 'url', 'active'];
	
	public function portfolio()
	{
		return $this->hasOne(Portfolio::class);
    }
}
