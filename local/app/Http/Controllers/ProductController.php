<?php 
namespace App\Http\Controllers;

use App;
class ProductController extends Controller {

	
	public function __construct()
	{
		
		parent::__construct();
		$this->styles[]= '';
		}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	
	

	

$last_added= \App\Product::all();;
		
	
        return view('product')->with('products', $last_added);
                
        }
	

}
