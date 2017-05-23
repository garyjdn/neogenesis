<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Auth;
use Illuminate\Support\Facades\Crypt;

class PagesController extends Controller
{
    public function showHomePage()
    {
        $products = Product::where('category_id', '!=', 8)->take(4)->orderBy('created_at', 'desc')->get();
        $categories = Category::all();
        $mouses = Product::where('category_id', '=', 3)->take(4)->get();
        $keyboards = Product::where('category_id', '=', 2)->take(4)->get();

        return view('ecommerce.home')
          ->with('products', $products)
          ->with('categories', $categories)
          ->with('mouses', $mouses)
          ->with('keyboards', $keyboards);
    }

    public function showProductDetailPage($nama, $id)
    {
        $id = Crypt::decryptString($id);
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('ecommerce.productdetail')
          ->with('product', $product)
          ->with('categories', $categories)
          ->with('wrapper1', true);

    }

    public function showCartPage()
    {
        $categories = Category::all();
        $cart = session('cart');
        if(session('cart') != NULL)
        {
          $products = Product::where(function($p) use($cart){
            foreach($cart as $key => $value)
            {
              if($value > 0)
              {
                  $p->orWhere('id', $key);
              }
            }
          });
          $products = $products->get();

          return view('ecommerce.cart')
            ->with('products', $products)
            ->with('categories', $categories)
            ->with('wrapper', true);
        }
        else
        {
          return view('ecommerce.cart')
            ->with('categories', $categories)
            ->with('wrapper', true);
        }


    }

    public function addToCart($id)
    {
        $id = Crypt::decryptString($id);
        $cart = session('cart'); // laravel global session helper
        if(!isset($cart[$id]))
        {
          $cart[$id] = 1; // set default value(1)
        }
        else
        {
          $cart[$id] += 1; // increment existing item in cart
        }
        session(['cart' => $cart]);
        $msg = ['sub' => 'Berhasil!', 'msg' => 'barang telah ditambahkan ke keranjang belanjaan.'];

        return $msg;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blank');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
