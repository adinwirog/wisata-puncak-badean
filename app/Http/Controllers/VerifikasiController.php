<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookList;

use DataTables;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bookList = BookList::with(['visitor', 'tiket', 'tiket.tipeTiket', 'user'])
                    ->whereDoesntHave('user')
                    ->where('is_validated', false)
                    ->get();
        // dd($bookList);
        if($request->ajax()) {
            return DataTables::of($bookList)
                    ->addColumn('book_date', function($data) {
                        return $data->created_at;
                    })
                    ->addColumn('action', function($data) {
                        $button = '<button type="button" name="'.$data->id.'" id="'.$data->id.'" class="detail btn btn-secondary btn-sm">Detail</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('dashboard.verifikasitiket');
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
        
        $request = [
            'email' => $request->email,
            'tipe_kendaraan' => $request->tipe_kendaraan,
            'due_date' => $request->due_date,
            'unique_string' => $request->unique_string,
            'harga_tiket' => $request->harga_tiket,
            'bayar' => $request->bayar,
            'kembalian' => $request->kembalian,
        ];
        // dd($request);

        return view('dashboard.print', ['request' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookList = BookList::with(['visitor', 'tiket', 'tiket.tipeTiket', 'user'])
                    ->whereDoesntHave('user')
                    ->where('is_validated', false)
                    ->where('id', $id)
                    ->get()
                    ->first();
                    
        return response()->json($bookList);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // $request = [
        //     'email' => $request->email,
        //     'tipe_kendaraan' => $request->tipe_kendaraan,
        //     'due_date' => $request->due_date,
        //     'unique_string' => $request->unique_string,
        //     'harga_tiket' => $request->harga_tiket,
        //     'bayar' => $request->bayar,
        //     'kembalian' => $request->kembalian,
        // ];

        // return view('dashboard.print', ['request' => $request]);
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
