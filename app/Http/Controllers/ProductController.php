<?php

namespace App\Http\Controllers;

use App\Product;
use App\Seo;
use App\Category;
use App\ProductPhoto;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\Input;
use Yajra\Datatables\Datatables;
use Symfony\Component\HttpFoundation\Response;

use Image;
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
                    return '<a class="btn btn-outline-danger btn-round waves-effect waves-light name="delete" id="' . $data->id . '" onclick="productdelete(\'' . $data->id . '\')"><i class="icon-trash"></i>Delete</a>&nbsp;&nbsp;<a class="btn btn-outline-warning btn-round waves-effect waves-light name="edit" href="' . route('product.edit', $data->slug) . '" id="' . $data->id . '" ><i class="ti-pencil"></i>Edit</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

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

    public function storeIMage(Request $request)
    {

        $initial = "SosioFruits";
        $image = $request->file('image');
        $input['imagename'] = $initial .time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/SosioFruits_Products');
        $img = Image::make($image->getRealPath());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        return back()
            ->with('success','Image Upload successful');
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
                'short_description' => 'required',
                'main_description' => 'required',
                'slug' => 'required|unique:products',
                // 'price' => 'required',
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

        $slug = Str::slug($request->slug, '-');


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




        // dd($request->description);
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->product = $request->product;
        // $product->price = $request->price;
        $product->short_description = $request->short_description;
        $product->main_description = $request->main_description;
        $product->slug = $slug;
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

        $image = $image;
        $imgname = $initial . $random. time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path($destinationPath);

        $img = Image::make($image->getRealPath());

        $img->resize(550, 550, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$imgname);



        if ($img) {
            # code...
            return $imgname;
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
    public function edit(Request $request,$slug)
    {
        $categories = Category::all();
        $products =Product::where('slug',$slug)->get();
        $photos =ProductPhoto::where('product_id',$products[0]['id'])->get();




        return view ('admin.product.edit',compact('categories','products','photos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug){

       $product =  Product::where('slug',$slug)->get();
       $id = $product[0]['id'];

        // dd($request->price);
        $rules = [
            'category_id' => 'required',
            'product' => 'required',
            'short_description' => 'required',
            'main_description' => 'required',
            'slug' => 'required|unique:products,id,' ,

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


        $slug = Str::slug($request->slug, '-');

        Product::where('slug',$slug)->update([
            'category_id'=>$request->category_id,
            'product'=>$request->product,
            'short_description'=>$request->short_description,
            'main_description'=>$request->main_description,
            'slug'=>$slug
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
         public function productDetails($slug){
            $category_id = Product::where('slug',$slug)->pluck('category_id')->first();
            $relateds = Product::where('category_id',$category_id)->get();
            $products =Product::where('slug',$slug)->get();

            $id = $products[0]['id'];

            $productphotos =ProductPhoto::where('product_id',$id)->get();
            $main_image = $productphotos->where('type', 'main_image')->pluck('image_path');
            $main_image = $main_image[0];
            // dd($main_image);

            $seos = Seo::where('product_id',$id)->get();

            if (!$seos->isEmpty()) {
                foreach ($seos as $seo) {
                    $meta_description =$seo->meta_description;
                    $meta_keyword =$seo->meta_keyword;

                }
            }else{

                $meta_description ='Sosio Fruits and Vegetables';
                $meta_keyword ='Kenyan expoerters of fruits and vegetables';
            }


             $meta_author ="Mwangi David Muthui|0721257308";
             $meta_site_title ="Sosio Fruits and Vegetables";
             $meta_url ="sosiofruitsandvegetables.com/fresh-fruits/kenyan-avocadoes";
             foreach ($products as $product) {
                $meta_title =$product->product.''."|Sosio Fruits and Vegetables";
            $name =$product->product;
             }
            return view ('export.product_details',compact('meta_title','meta_description','meta_keyword','meta_url','meta_site_title', 'name', 'productphotos', 'main_image','products','relateds'));
         }



}
