<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeTiket;
use DataTables;

class TipeTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listTiket = TipeTiket::all();
        if($request->ajax()) {
            return DataTables::of($listTiket)->editColumn('created_at', function ($data) {
                return $data->created_at;
            })->editColumn('updated_at', function ($data) {
                return $data->updated_at;
            })->editColumn('harga_tiket', function ($data) {
                return "Rp ". number_format($data->harga_tiket, 2, ",", ".");
            })->addColumn('action', function($data){
                $button = '<a href="'.route("products.edit", $data->id).'" data-toggle="tooltip"  '.' data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="'.$data->title.'" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])->make(true);
        }
        return view('dashboard.typeticketmanajemen');
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
        $tipeTiket = new TipeTiket();
        $tipeTiket->tipe_kendaraan = $request->tipe_kendaraan;
        $tipeTiket->harga_tiket = $request->harga_tiket;
        
        return response()->json($tipeTiket->save());
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
