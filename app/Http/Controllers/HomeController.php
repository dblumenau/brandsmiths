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

    public function terms()
    {
        return view('terms');
	}
	
	public function getHomePage(Portfolio $portfolio)
	{
		$portfolios = $portfolio->where('active', 1)->orderBy('updated_at', 'desc')->get();
		return view('welcome', compact('portfolios'));
	}
	
	public function showModal(Request $request)
	{
		$portfolio = Portfolio::whereId($request->id)->first();
		$html = '<p>' . $portfolio->description . '</p>';
		if ($portfolio->type === 1) {
			$html .= '<img src="' . $portfolio->path . '" alt="">';
		} elseif ($portfolio->type === 2) {
			$html .= '<video controls>
  <source src="' . $portfolio->path . '" type="video/mp4">
Your browser does not support the video tag.
</video>';
		}
		
		return $html;
	}
}
