<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\TipeTiket;
use DataTables;
use Illuminate\Support\Str;
use Carbon\Carbon;
use DB;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd(Str::upper(preg_replace('/[0-9]/','A',Str::random(10))));
        $listTiket = Tiket::with('tipeTiket')->get();
        // dd(DataTables::of($listTiket)->make(true));
        if($request->ajax()) {
            return DataTables::of($listTiket)->editColumn('created_at', function ($data) {
                return $data->created_at;
            })->addColumn('harga_tiket', function (Tiket $tiket) {
                return "Rp ". number_format($tiket->tipeTiket->harga_tiket, 2, ",", ".");
            })->addColumn('tipe_kendaraan', function (Tiket $tiket) {
                return $tiket->tipeTiket->tipe_kendaraan;
            })->addColumn('action', function($data){
                $button = '<a href="'.route("products.edit", $data->id).'" data-toggle="tooltip"  '.' data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="'.$data->title.'" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])->make(true);
        }
        return view('dashboard.ticketmanajemen', ['tipetiket' => TipeTiket::all()]);
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
        $dtNow = Carbon::now();
        for($i = 0; $i < $request->jumlah_tiket; $i++) {
            $uniqueStr = null;
            $tiket = new Tiket();
            do {
                $theStr = Str::upper(preg_replace('/[0-9]/','A',Str::random(10)));
                $uniqueStr = $dtNow->year . $theStr . $dtNow->month . $dtNow->day; 
            } while (DB::table('tikets')->where([['unique_string', '=', $uniqueStr], ['tipe_tiket_id', '=', $request->tipe_tiket_id]])->count());
            $tiket->unique_string = $uniqueStr;
            $tiket->tipe_tiket_id = $request->tipe_tiket_id;
            $tiket->save();
        }

        return response()->json(true);
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
