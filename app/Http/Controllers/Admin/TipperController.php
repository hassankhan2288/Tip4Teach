<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tipper;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;
class TipperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        generateBreadcrumb();
    }
    public function index()
    {

        return view('admin.partials.tipper.index');
    }

    public function form(Request $request)
    {
        $tippers = Tipper::find($request->id);

        return view('admin.partials.tipper.form', compact('tippers'));
    }

    public function submit(Request $request)
    {
        $input = $request->all();

        $role = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id.',id'],
            'age' => ['required', 'numeric'],
        ];
        if(!$request->id){
            $role['password'] = ['required', 'string', 'min:8', 'confirmed'];
        } else {
            if($request->password){
                 $role['password'] = ['required', 'string', 'min:8', 'confirmed'];
            }
        }
        $request->validate($role);

        if ($request->id) {
            $tipper = Tipper::find($request->id);
        } else {
            $tipper = new Tipper;
        }
        $tipper->name = $request->name;
        $tipper->email = $request->email;
        $tipper->age = $request->age;
        $tipper->is_active = 1;
        if($request->password){
            $tipper->password = Hash::make($request->password);
        }

        $tipper->save();


        return redirect()->route('admin.tipper');
    }

    public function ajax(Request $request)
    {
        $data = Tipper::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $dropdown = '
                <div class="btn-group">
                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . route('admin.tipper.form', $row->id) . '"><i class="fa fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="' . route('admin.tipper.delete', $row->id) . '" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>';

                return $dropdown;
            })

            ->rawColumns(['action'])
            ->make(true);
     }
     public function delete($id)
     {
        $tipper = Tipper::where('id' , $id)->first();
        // dd($teacher);
        $tipper->delete();
        return redirect()->route('admin.tipper')->with('success', 'Successfully deleted.');

     }
}
