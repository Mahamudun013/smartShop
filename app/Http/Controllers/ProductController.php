<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function createProduct(){

    	$categories=Category::where('publicationStatus',1)->get();
    	$manufacturers=Manufacturer::where('publicationStatus',1)->get();

    	return view('admin.product.createProduct',['categories'=>$categories,'manufacturers'=>$manufacturers]);
    }


    public function storeProduct(Request $request){

    	$this->validate($request,[
    		'productName'=>'required',
    		'productPrice'=>'required',
    		'productQuantity'=>'required',
    		'productImage'=>'required',
    	]);



    	$productImage=$request->file('productImage');
    	$name=$productImage->getClientOriginalName();
    	$uploadPath='public/productImage/';
    	$productImage->move($uploadPath,$name);
    	$imageUrl=$uploadPath.$name;
    	$this->saveProductInfo($request,$imageUrl);

    	return redirect('/product/add')->with('message','Product Info Added Successfully!');

    }


    protected function saveProductInfo($request,$imageUrl){

    	$product=new Product();
    	$product->productName=$request->productName;
    	$product->categoryId=$request->categoryId;
    	$product->manufacturerId=$request->manufacturerId;
    	$product->productPrice=$request->productPrice;
    	$product->productQuantity=$request->productQuantity;
    	$product->productShortDescription=$request->productShortDescription;
    	$product->productLongDescription=$request->productLongDescription;
    	$product->productImage=$imageUrl;
    	$product->publicationStatus=$request->publicationStatus;
        $product->specialOffer=$request->specialOffer;
    	$product->save();
    }



    public function manageProduct(){

    	$products=DB::table('products')
    	          ->join('categories','products.categoryId','=','categories.id')
    	          ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
    	          ->select('products.id','products.productName','products.productImage','products.productPrice','products.productQuantity','products.publicationStatus','categories.categoryName','manufacturers.manufacturerName')
    	          ->get();


    	      //    ->select('products.*','categories.categoryName','manufacturers.manufacturerName')


    	 // echo "<pre>";
    	// print_r($products); publicationStatus
    	// exit();



       return view('admin.product.manageProduct',['products'=>$products]);

    }


    public function viewProduct($id){

    	$productById=DB::table('products')
    	          ->join('categories','products.categoryId','=','categories.id')
    	          ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
    	          ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
    	          ->where('products.id',$id)
    	          ->first();


    	
    	return view('admin.product.viewProduct',['product'=>$productById]);
    }



    public function editProduct($id){

        $categories=Category::where('publicationStatus',1)->get();
        $manufacturers=Manufacturer::where('publicationStatus',1)->get();
        //$productById= Product::where('id',$id)->first();

        $productById=DB::table('products')
                  ->join('categories','products.categoryId','=','categories.id')
                  ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
                  ->select('products.*','categories.categoryName','manufacturers.manufacturerName')
                  ->where('products.id',$id)
                  ->first();


        return view('admin.product.editProduct',['product'=>$productById,'categories'=>$categories,'manufacturers'=>$manufacturers]);

      // return view('admin.product.editProduct')
      //    ->with('product',$productById)
      //    ->with('categories',$categories)
      //    ->with('manufacturers',$manufacturers);
    }


    public function updateProduct(Request $request){

        $product=Product::find($request->productId);

        $productImage=$request->file('productImage');



        if($productImage != null){

        $name=$productImage->getClientOriginalName();
        $uploadPath='public/productImage/';
        $productImage->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        }
        
        else
        {
          $imageUrl=$product->productImage;
        }

        $product->productName=$request->productName;
        $product->categoryId=$request->categoryId;
        $product->manufacturerId=$request->manufacturerId;
        $product->productPrice=$request->productPrice;
        $product->productQuantity=$request->productQuantity;
        $product->productShortDescription=$request->productShortDescription;
        $product->productLongDescription=$request->productLongDescription;
        $product->productImage=$imageUrl;
        $product->publicationStatus=$request->publicationStatus;
        $product->specialOffer=$request->specialOffer;
        $product->save();

        return redirect('/product/manage')->with('message','Product Info Updated Successfully!');

    }


    public function deleteProduct($id){

        $product=Product::find($id);
        $product->delete();

    return redirect('/product/manage')->with('message','Product Info Deleted Successfully!');

    }



}
