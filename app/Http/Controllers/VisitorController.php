<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipeTiket;
use App\Models\Visitors;
use App\Models\Tiket;
use App\Models\BookList;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tiket', ['tipetiket' => TipeTiket::all()]);
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
        $visitor = Visitors::where('email', $request->email)->get();
        $model = Tiket::with(['bookList', 'tipeTiket'])
                ->whereDoesntHave('bookList')
                ->whereHas('tipeTiket', function ($query) use ($request) {
                    $query->where('id', $request->tipe_kendaraan);
                })
                ->get();

        if($model->count() < 1) {
            return redirect()->route('booking-tiket.index');
        }
        
        $bookList = new BookList();
        $randomPicking = rand(0, ($model->count()-1));
        if($visitor->count() < 1) {
            // dd($model);
            $visitor = new Visitors();
            $visitor->email = $request->email;
            $visitor->save();

            $bookList->visitor()->associate($visitor);
            $bookList->tiket()->associate($model[$randomPicking]);
            $bookList->is_validated = false;
            $bookList->created_at = $request->kadaluarsa;
        } else {
            $visitor = $visitor->first();

            $bookList->visitor()->associate($visitor);
            $bookList->tiket()->associate($model[$randomPicking]);
            $bookList->is_validated = false;
            $bookList->created_at = $request->kadaluarsa;
        }

        $bookList->save();
        return redirect()->route('booking-tiket.index');
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
