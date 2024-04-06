<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        generateBreadcrumb();
    }
    public function index()
    {

        return view('admin.partials.teacher.index');
    }

    public function form(Request $request)
    {
        $teacher = Teacher::find($request->id);

        return view('admin.partials.teacher.form', compact('teacher'));
    }

    public function submit(Request $request)
    {
        $input = $request->all();

        $role = [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id.',id'],
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
            $teacher = Teacher::find($request->id);
        } else {
            $teacher = new Teacher;
        }
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->banking_detail = $request->banking_detail;
        $teacher->school = $request->school;
        $teacher->subject = $request->subject;
        $teacher->experience = $request->experience;
        $teacher->phone = $request->phone;
        $teacher->city = $request->city;
        $teacher->state = $request->state;
        $teacher->country = $request->country;
        $teacher->postal_code = $request->postal_code;
        $teacher->teacher_status = $request->teacher_status;   // 1 Current Teacher 0 Farmer Teacher
        $teacher->status = $request->status;

        if($request->password){
            $teacher->password = Hash::make($request->password);
        }
        $teacher->save();


        return redirect()->route('admin.teacher');
    }

    public function ajax(Request $request)
    {
        $data = Teacher::all();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('is_active', function ($row) {
                $status = '<div class="btn-group">
                    <select class="status-button" data-id="' . $row->id . '">
                        <option value="active" data-id="' . $row->id . '"';

                if ($row->is_active == "1") { $status .= ' selected';
                }$status .= '>' . "Active" . '</option>
                        <option value="deactive" data-id="' . $row->id . '"';

                if ($row->is_active != "1") {$status .= ' selected';
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
                        <a class="dropdown-item" href="' . route('admin.teacher.form', $row->id) . '"><i class="fa fa-edit"></i> Edit</a>
                        <a class="dropdown-item" href="' . route('admin.teacher.delete', $row->id) . '" onclick="return confirmDelete()"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>';

                return $dropdown;
            })

            ->rawColumns(['action','is_active'])
            ->make(true);
     }
     public function delete($id)
     {
        $teacher = Teacher::where('id' , $id)->first();
        // dd($teacher);
        $teacher->delete();
        return redirect()->route('admin.teacher')->with('success', 'Successfully deleted.');

     }
     public function teacher_status($id)
     {
         $customer = Teacher::findOrFail($id);
         if ($customer->is_active == 1) {
             $customer->update(['is_active' => 0]);
         } else {
             $customer->update(['is_active' => 1]);
         }

         return response()->json(['success' => 'Status change successfully.']);
     }
}
