<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\AttributeDetail;
use App\Models\CategoryDetail;

class FilterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function searchProduct(Request $request)
    {
        if($request->input('c') == 8)
        {
          // guard topup saldo item
          return redirect()->route('home');
        }
        $product = $request->input('q');
        $category = $request->input('c');
        $categories = Category::where('id', '!=', 8)->get();
        $brands = AttributeDetail::where('attribute_id', 1)->get();
        $memories = AttributeDetail::where('attribute_id', 2)->get();
        $take = 16; // set limit
        if($category == 0)
        {
          $haveMemory = 1;
        }
        else
        {
          $haveMemory = CategoryDetail::where('category_id', $category)->where('attribute_id', '2')->take(1)->count();
        }

        // set offset
        if($request->input('s') != NULL)
        {
          $skip = $request->input('s');
        }
        else
        {
          // default offset
          $skip = 0;
        }

        // set page
        if($request->input('p') != NULL)
        {
          $page = $request->input('p');
        }
        else
        {
          // default page
          $page = 1;
        }

        $src = 'search'; // source function

        $products = Product::where('name', 'like', '%'.$product.'%')
        ->where(function($p) use($category){
          if($category == 0)
          {
            $p->where('category_id', '!=', 8);
          }
          else
          {
            $p->where('category_id', $category);
          }
        })->where(function($p){
          $p->orderBy('created_at', 'desc');
        });
        $totalItem = $products->count();
        $products = $products->skip($skip)->take($take)->get();

        // pagination
        $totalPagination = ceil($totalItem/16);
        if($page < 5)
        {
          $startPage = 1;
        }
        else
        {
          $startPage = $page - 4;
        }
        $endPage = 8 + $startPage;
        if($totalPagination < $endPage)
        {
          $endPage = $totalPagination;
        }
        $diff = $startPage - $endPage + 8;
        if(($startPage - $diff) > 0)
        {
          $startPage = $diff;
        }
        else
        {
          $startPage = 1;
        }

        return view('ecommerce.search')
          ->with('query', $product)
          ->with('products', $products)
          ->with('page', $page)
          ->with('q', $product)
          ->with('sc', $category)
          ->with('categories', $categories)
          ->with('sort', 0)
          ->with('brands', $brands)
          ->with('memories', $memories)
          ->with('haveMemory', $haveMemory)
          ->with('totalItem', $totalItem)
          ->with('totalPagination', $totalPagination)
          ->with('startPage', $startPage)
          ->with('endPage', $endPage)
          ->with('wrapper2', true)
          ->with('src', $src);
    }

    public function searchFilterProduct(Request $request)
    {
        if($request->input('c') == 8)
        {
          // guard topup saldo item
          return redirect()->route('home');
        }
        $product = $request->input('q');
        $category = $request->input('c');
        $selectedBrand = $request->input('brandCheckboxes');
        $selectedMemory = $request->input('memoryCheckboxes');
        $hargaRendah = $request->input('hr');
        $hargaTinggi =$request->input('ht');
        $sort = $request->input('sort');
        $categories = Category::where('id', '!=', 8)->get();
        $brands = AttributeDetail::where('attribute_id', 1)->get();
        $memories = AttributeDetail::where('attribute_id', 2)->get();
        $take = 16; // set limit

        if($category == 0)
        {
          $haveMemory = 1;
        }
        else
        {
          $haveMemory = CategoryDetail::where('category_id', $category)->where('attribute_id', '2')->take(1)->count();
        }

        // set offset
        if($request->input('s') != NULL) // current page
        {
          $skip = $request->input('s');
        }
        else
        {
          $skip = 0;
        }

        // set page
        if($request->input('p') != NULL)
        {
          $page = $request->input('p');
        }
        else
        {
          // default page
          $page = 1;
        }

        $src = 'filter'; // source function

        $products = Product::where('name', 'like', '%'.$product.'%')
        ->where(function($p) use($category){
          if($category == 0)
          {
            $p->where('category_id', '!=', 8);
          }
          else
          {
            $p->where('category_id', $category);
          }
        })->where(function($p) use($selectedBrand) { // Filter brand
          if(isset($selectedBrand))
          {
            $p->whereIn('brand', $selectedBrand);
          }
        })->where(function ($p) use($selectedMemory){ // Filter memory
          if(isset($selectedMemory))
          {
            $p->whereIn('memory', $selectedMemory);
          }
        })->where(function($p) use($hargaRendah, $hargaTinggi){ // Filter harga
          if(isset($hargaRendah) && isset($hargaTinggi))
          {
            $p->whereBetween('price', [$hargaRendah, $hargaTinggi]);
          }
          elseif(isset($hargaRendah) && !isset($hargaTinggi))
          {
            $p->where('price', '>=', $hargaRendah);
          }
          elseif(!isset($hargaRendah) && isset($hargaTinggi))
          {
            $p->where('price', '<=', $hargaTinggi);
          }
        });
        //dd($sort);
        if(isset($sort) && $sort == 0)
        {
          $products = $products->orderBy('created_at', 'desc');
        }
        elseif(isset($sort) && $sort == 1)
        {
          $products = $products->orderBy('price', 'asc');
        }
        elseif(isset($sort) && $sort == 2)
        {
          $products = $products->orderBy('price', 'desc');
        }
        elseif(isset($sort) && $sort == 3)
        {
          $products = $products->orderBy('rating', 'desc');
        }
        $totalItem = $products->count();
        $products = $products->skip($skip)->take($take)->get();
        $totalPagination = ceil($totalItem/16);
        // pagination
        if($page < 5)
        {
          $startPage = 1;
        }
        else
        {
          $startPage = $page - 4;
        }
        $endPage = 8 + $startPage;
        if($totalPagination < $endPage)
        {
          $endPage = $totalPagination;
        }
        $diff = $startPage - $endPage + 8;
        if(($startPage - $diff) > 0)
        {
          $startPage = $diff;
        }
        else
        {
          $startPage = 1;
        }

        return view('ecommerce.search')
          ->with('query', $product)
          ->with('products', $products)
          ->with('page', $page)
          ->with('q', $product)
          ->with('sc', $category)
          ->with('categories', $categories)
          ->with('sort', $sort)
          ->with('hargaRendah', $hargaRendah)
          ->with('hargaTinggi', $hargaTinggi)
          ->with('brands', $brands)
          ->with('memories', $memories)
          ->with('haveMemory', $haveMemory)
          ->with('totalItem', $totalItem)
          ->with('totalPagination', $totalPagination)
          ->with('startPage', $startPage)
          ->with('endPage', $endPage)
          ->with('wrapper2', true)
          ->with('src', $src);
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
