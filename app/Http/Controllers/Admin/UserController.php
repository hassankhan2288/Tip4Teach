<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        generateBreadcrumb();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.partials.student.index');
    }

    public function form(Request $request)
    {
        $users = User::find($request->id);

        return view('admin.partials.student.form', compact('users'));
    }

    public function submit(Request $request)
    {
        $input = $request->all();

        $role = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id.',id'],
            // 'phone' => ['required', 'numeric'],  
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
            $user = User::find($request->id);
        } else {
            $user = new User;
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->occupation = $request->occupation;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->postal_code = $request->postal_code;
        $user->status = $request->status;
        if($request->password){
            $user->password = Hash::make($request->password);
        }

        $user->save();


        return redirect()->route('admin.student');
    }

    public function ajax(Request $request)
    {
        $data = User::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function ($row) {
                $status = '<div class="btn-group">
                    <select class="status-button" data-id="' . $row->id . '">
                        <option value="active" data-id="' . $row->id . '"';

                if ($row->status == "1") { $status .= ' selected';
                }$status .= '>' . "Active" . '</option>
                        <option value="deactive" data-id="' . $row->id . '"';

                if ($row->status != "1") {$status .= ' selected';
                }$status .= '>' . "De-Active" . '</option>
                </select>
                </div>';

                return $status;
            })
            ->addColumn('action', function ($row) {
                $dropdown = '
                <div class="btn-group">
                    <button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="' . route('admin.student.form', $row->id) . '"><i class="fa fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="' . route('admin.student.delete', $row->id) . '" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>';

                return $dropdown;
            })

            ->rawColumns(['action','status'])
            ->make(true);
     }
     public function delete($id)
     {
        $user = User::where('id' , $id)->first();
        // dd($teacher);
        $user->delete();
        return redirect()->route('admin.student')->with('success', 'Successfully deleted.');

     }
     public function student_status($id)
     {
         $customer = User::findOrFail($id);
         if ($customer->status == 1) {
             $customer->update(['status' => 0]);
         } else {
             $customer->update(['status' => 1]);
         }

         return response()->json(['success' => 'Status change successfully.']);
     }


}
