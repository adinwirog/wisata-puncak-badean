<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookList;
use Carbon\Carbon;
use DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPengunjung = DB::table('book_lists')
                            ->join('visitors', 'visitors.id', '=', 'book_lists.visitor_id')
                            ->select(DB::raw("COUNT(*) as count"), 'book_lists.created_at')
                            ->groupBy("book_lists.created_at")
                            ->orderBy('book_lists.created_at', 'asc');

        $labels = $dataPengunjung->pluck('count', 'book_lists.created_at')->keys();
        $data = $dataPengunjung->pluck('count', 'book_lists.created_at')->values();

        return view('dashboard.laporanpengunjung', ['labels' => $labels, 'data' => $data]);
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
