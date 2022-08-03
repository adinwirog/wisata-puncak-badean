<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use DataTables;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $model = Event::with('users');
            return DataTables::of($model)->editColumn('is_visible', function(Event $event) {
                $value = ($event->is_visible == 1) ? 'Tampil' : 'Belum Tampil' ;
                return $value;
            })->addColumn('action', function($data){
                $button = '<a href="'.route("post.edit", $data->id).'" data-toggle="tooltip"  '.' data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> Delete</button>';
                $button .= '&nbsp;&nbsp;';
                if($data->is_visible == 1) {
                    $button .= '<button type="button" id="'.$data->id.'" class="unpublish btn btn-warning btn-sm mt-2">Sembuyikan</button>';     
                } else {
                    $button .= '<button type="button" id="'.$data->id.'" class="publish btn btn-primary btn-sm mt-2">Publish</button>'; 
                }
                return $button;
            })
            ->rawColumns(['action'])->make(true);
        }

        return view('dashboard.post');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.postcreate');
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
            'title' => 'required|min:8|max:100',
            'contents' => 'required|min:10',
        ]);
        $event = new Event();
        $event->title = $request->input('title');
        $event->contents = $request->input('contents');
        $event->save();

        $request->session()->flash('status', 'Event Post Berhasil Disimpan');

        return redirect()->route('post.index');
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
        return view('dashboard.postedit', ['event' => Event::findOrFail($id)]);
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
        if ($request->ajax()) {
            $postevent = Event::find($id);
            if($postevent->is_visible == 1 ) {
                $postevent->is_visible = false;
            } else {
                $postevent->is_visible = true;
            }
            // $postevent->save();
            return $postevent->save();
        }
        $request->validate([
            'title' => 'required|min:8|max:100',
            'contents' => 'required|min:10',
        ]);
        $postevent = Event::find($id);
        $postevent->title = $request->input('title');
        $postevent->contents = $request->input('contents');
        $postevent->save();

        $request->session()->flash('status', 'Event Post Berhasil Diubah');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Event::where('id',$id)->delete();
        return response()->json($post);
    }
}
