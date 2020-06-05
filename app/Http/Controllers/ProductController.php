<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $categories =Category::all();
        if ($request->ajax()) {
            $product = Product::with('category')->get();
            return Datatables::of($product)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="productdelete(' . $data->id . ')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('product.edit', $data->id) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
// dd($categories);
        return view ('admin.product.index',compact('categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $rules = [
                'category_id' => 'required',
                'product' => 'required',
                'description' => 'required',
                'price' => 'required',
                'main_image' => 'required',
                'gallery' => 'required',
    
            ];
    
            $error = Validator::make($request->all(), $rules);
    
            if ($error->fails()) {
                return response([
                    'errors'=>True,
                    'message'=>$error->errors()->all(),
                ],Response::HTTP_OK);
            }
        
        $imgdestination = '/SosioFruits_Products';
        $gallerarray = [];
        if ($request->hasfile('main_image')) {
            $productimages = $request->file('main_image');
            $imgname = $this->generateUniqueFileName($productimages, $imgdestination);
        }

        if ($request->hasfile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $galleryname = $this->generateUniqueFileName($image, $imgdestination);
                $gallerarray[] = $galleryname;
            }
        }
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->product = $request->product;
        $product->price = $request->price;
        $product->description = $request->description;
        if ($product->save()) {

            $product_id= $product->id;
            $product_image = new ProductPhoto();
            $product_image->product_id = $product_id;
            $product_image->image_path = $imgname;
            $product_image->type = "main_image";
            $product_image->save();


            foreach ($gallerarray as $img) {
                $product_image = new ProductPhoto();
                $product_image->product_id = $product_id;
                $product_image->image_path = $img;
                $product_image->type = "gallery";
                $product_image->save();
            }
            return response([
                'success'=>True,
                'message'=>'Product  created Succesfully',
            ],Response::HTTP_OK);
            
        }
    }

    }
    public function generateUniqueFileName($image, $destinationPath)
    {
        $initial = "SosioFruits";
        $random = Str::random();
        $name = $initial  .$random. time() . '.' . $image->getClientOriginalExtension();
        if ($image->move(public_path() . $destinationPath, $name)) {
            return $name;
        } else {
            return null;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $categories = Category::all();
        $products =Product::where('id',$id)->get();
        $photos =ProductPhoto::where('product_id',$id)->get();
      
        
        

        return view ('admin.product.edit',compact('categories','products','photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
      
        
        // dd($request->price);
        $rules = [
            'category_id' => 'required',
            'product' => 'required',
            'description' => 'required',
            'price' => 'required',

        ];

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response([
                'errors'=>True,
                'message'=>$error->errors()->all(),
            ],Response::HTTP_OK);
        }

        $imgdestination = '/SosioFruits_Products';
        $gallerarray = [];
        if ($request->hasfile('main_image')) {
            $productimages = $request->file('main_image');
            $imgname = $this->generateUniqueFileName($productimages, $imgdestination);
            ProductPhoto::where('product_id',$id)
            ->where('type','=','main_image')
            ->update([
                'image_path'=>$imgname,
            ]);
        }
        if ($request->hasfile('gallery')) {
    
            foreach ($request->file('gallery') as $image) {
                $galleryname = $this->generateUniqueFileName($image, $imgdestination);
                $gallerarray[] = $galleryname;
            }
    
            foreach ($gallerarray as $img) {
                ProductPhoto::where('product_id',$id)
                ->where('type','=','gallery')
                ->update([
                    'image_path'=>$img,
                ]);
            }
        }
        Product::where('id',$id)->update([
            'category_id'=>$request->category_id,
            'product'=>$request->product,
            'description'=>$request->description,
            'price'=>$request->price
        ]);
        // }
        return response([
            'success'=>True,
            'message'=>'Product Updated Succesfully',
        ],Response::HTTP_OK);
    
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->ajax()){
                $product_id = $request->product_id;
        $product = Product::find($product_id);
        if ($product) {
            $product->delete();
            return response([
                'success'=>True,
                'message'=>'Product  deleted Succesfully',
            ],Response::HTTP_OK);
        } else {
            return response([
                'success'=>True,
                'message'=>'Product  not deleted',
            ],Response::HTTP_OK);
        }
        }
    
    }
    public function photoDestroy(Request $request){
        $photo_id = $request->photo_id;
        if (ProductPhoto::where('id',$photo_id)->delete()) {
            return response([
                'success'=>True,
                'message'=>'Photo  deleted Succesfully',
            ],Response::HTTP_OK);
        }else{
            return response([
                'error'=>True,
                'message'=>'Photo not deleted ',
            ],Response::HTTP_OK);
        
        }
         }


         
    
}
