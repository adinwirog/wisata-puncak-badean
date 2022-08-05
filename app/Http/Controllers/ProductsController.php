<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listProduk = Product::all();
        if($request->ajax()) {
            return DataTables::of($listProduk)->editColumn('created_at', function ($data) {
                return $data->created_at;
            })->editColumn('updated_at', function ($data) {
                return $data->updated_at;
            })->editColumn('price', function ($data) {
                return "Rp ". number_format($data->price, 2, ",", ".");
            })->addColumn('action', function($data){
                $button = '<a href="'.route("products.edit", $data->id).'" data-toggle="tooltip"  '.' data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="'.$data->title.'" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])->make(true);
        }
        return view('dashboard.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.productscreate');
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
            'title' => 'required|min:2|max:100',
            'price' => 'required|numeric',
            'description' => 'required|min:5',
        ]);
        $product = new Product();
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        
        $product->save();

        $request->session()->flash('status', 'Produk Berhasil Disimpan');

        return redirect()->route('products.index');
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
        return view('dashboard.productsedit', ['product' => Product::findOrFail($id)]);
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
        $request->validate([
            'title' => 'required|min:2|max:100',
            'price' => 'required|numeric',
            'description' => 'required|min:5',
        ]);
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        
        $product->save();
        $request->session()->flash('status', 'Produk Berhasil Disimpan');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id',$id)->delete();
        return response()->json($product);
    }
}
