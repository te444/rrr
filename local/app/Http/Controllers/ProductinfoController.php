<?php 
namespace App\Http\Controllers;
use Input;
use Session;
Use Auth;
use Illuminate\Support\Facades\Redirect;
Use Cookie;


use App;
class ProductinfoController extends Controller {

	
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
	public function index($id)
	{
	
	$product= \App\Product::find($id);
	if(Input::get('add')!= NULL){
		 $idProduct = Input::get('add');
		
         setcookie($idProduct, 1, time()+360000, "/");
         return Redirect::back();
        }
        $this->title= $product->marka.": ".$product->model;
	
	 return view('product_info')->with('product', $product);   
    }
	
    
	

}
