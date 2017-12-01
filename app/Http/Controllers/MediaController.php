<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
	public function upload(Request $request, Media $media)
	{
		$path = $request->file('file')->store('portfolios');
		$media->description = 'portfolio upload';
		$media->type = 'portfolio upload';
		$media->alt = 'alt goes here';
		$media->url = $path;
		$media->save();
		return $media->id;
		
		
    }
}
