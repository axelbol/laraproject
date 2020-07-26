<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate(10);
        $user = User::all();
        $names = $user->sortBy('name')->pluck('name')->unique();
        $emails = $user->sortBy('email')->pluck('email')->unique();
        return view('user.index', compact('names', 'emails'));
    }

    public function dataTable()
    {
        return DataTables::of(User::select('id', 'name', 'email', 'created_at'))
        ->editColumn('created_at', function(User $user){
            return $user->created_at->diffForHumans();
        })
        // ->addColumn('delete', '<form action="{{route(\'user.destroy\', $id)}}" method="POST">
        //                     <input type="hidden" name="_method" value="DELETE">
        //                     <input type="submit" name="submit" value="'.('Eliminar').'" class="btn btn-danger btn-sm"
        //                     onClick="return confirm(\'¿Seguro?\')">
        //                     {{csrf_field()}}
        //                     </form>')
        // ->addColumn('show', '<a href="{{route(\'user.show\', $id)}}" class="btn btn-info btn-sm">' .('Ver'). '</a>')
        // ->addColumn('edit', '<a href="{{route(\'user.edit\', $id)}}" class="btn btn-warning btn-sm">' . ('Editar') . '</a>')

        // ->addColumn('show', 'user.dataTable.show')
        // ->addColumn('edit', 'user.dataTable.edit')
        // ->addColumn('delete', 'user.dataTable.delete')
        ->addColumn('btn', 'user.dataTable.btn')
        ->rawColumns(['btn'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        User::create($input);
        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
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
        $user = User::findOrFail($id);
        $input = $request->only('name', 'email');
        $password = $request->input('password');
        if($password){
            $input['password'] = bcrypt($password);
        }
        $user->fill($input);
        // dd($user);
        $user->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
