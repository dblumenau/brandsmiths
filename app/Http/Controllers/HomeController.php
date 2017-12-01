<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	//	$this->middleware('auth');
	}
	
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('home');
	}
	
	public function getHomePage(Portfolio $portfolio)
	{
		$portfolios = $portfolio->where('active', 1)->orderBy('updated_at', 'desc')->get();
		
		return view('welcome', compact('portfolios'));
	}
}
