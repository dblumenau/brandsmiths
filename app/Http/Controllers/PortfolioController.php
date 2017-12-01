<?php

namespace App\Http\Controllers;

use App\Media;
use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller
{
	protected $portfolio;
	
	protected $request;
	
	protected $media;
	
	public function __construct(Portfolio $portfolio, Request $request, Media $media)
	{
		$this->portfolio = $portfolio;
		$this->request = $request;
		$this->media = $media;
	}
	
	public function index()
	{
		$portfolios = $this->portfolio->where('active', 1)->get();
		
		return view('admin.portfolio.index', compact('portfolios'));
	}
	
	public function create()
	{
		return view('admin.portfolio.create');
	}
	
	public function save()
	{
		$data = $this->request->all();
		$portfolio = $this->portfolio;
		$portfolio->heading = $data['heading'];
		$portfolio->description = $data['description'];
		$portfolio->path = $data['path'];
		$portfolio->save();
		
		return view('admin.portfolio.show', compact('portfolio'));
	}
	
	public function show()
	{
		$portfolio = $this->portfolio->whereId($this->request->id)->first();
		
		return view('admin.portfolio.show', compact('portfolio'));
	}
	
	public function upload(Request $request, Media $media)
	{
		$path = $request->file('file')->store('portfolios');
		
		return $path;
	}
}
