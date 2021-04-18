<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $role = Auth::user()->roles->first()->name;
            if ($role == "admin" || $role == "pegawai") {
                return $next($request);
            } else {
                return abort(404);
            }
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProduct = Product::first()->paginate(5);

        $categories = Categorie::all();

        $brands = Brand::all();



        return view('product.index', compact('dataProduct', 'categories', 'brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        $brands = Brand::all();



        return view('product.index', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:items',
            'qty' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'brands_id' => $request->merk,
            'categories_id' => $request->categorie,
        ]);

        alert()->success('Barang telah terekam dalam sistem .', 'Berhasil', 'success');

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $barang)
    {
        $data = Product::find($barang->id);

        $categories = Categorie::all();

        $Brands = Brand::all();

        return view('product.show', compact('data', 'categories', 'brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $barang)
    {
        $data = Product::find($barang->id);

        $categories = Categorie::all();

        $brands = Brand::all();

        return view('product.edit', compact('data', 'categories', 'merks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $barang)
    {
        $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required|numeric',
        ]);

        $newData = Product::find($barang->id);
        $newData->name = $request->name;
        $newData->qty = $request->qty;
        $newData->price = $request->price;
        $newData->brands_id = $request->brand;
        $newData->categories_id = $request->categorie;
        $newData->save();

        alert()->info('Data telah terubah dalam sistem .', 'Berhasil', 'success');

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function destroy(Product $barang)
    {
        Product::find($barang->id)->delete();

        alert()->success('Data telah terhapus dalam sistem .', 'Berhasil', 'success');

        return redirect()->route('barang.index');
    }
}
