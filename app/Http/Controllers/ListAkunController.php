<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ListAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listAkun = User::all()->where('is_admin', false);
        if($request->ajax()) {
            return DataTables::of($listAkun)
            ->editColumn('created_at', function ($data) {
                return $data->created_at;
            })->editColumn('updated_at', function ($data) {
                return $data->updated_at;
            })->editColumn('is_admin', function ($data) {
                $button = '<button type="button" class="delete btn btn-success btn-sm"> User</button>';
                return $button;
            })->addColumn('action', function($data){
                $button .= '<button type="button" name="'.$data->title.'" id="'.$data->id.'" class="delete btn btn-danger btn-sm"> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('dashboard.listakun');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.listakuncreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $userPwd = Str::random(8);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($userPwd);
        $user->is_admin = false;

        $user->save();

        return view('dashboard.printakun', ['pwd' => $userPwd, 'user' => $user]);
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
