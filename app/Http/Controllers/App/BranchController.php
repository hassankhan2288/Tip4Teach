<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Branch;
use Spatie\Permission\Models\Role;
use App\ProductPricingManagement;
use App\ProductBranchManagement;
use DataTables;

class BranchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        generateBreadcrumb();

    }

    public function index()
    {
        
        $admins = Branch::count();
        
        return view('app.partials.branch.index', compact(
            'admins',
        ));
    }

    public function form(Request $request){
        $admin = Branch::find($request->id);
        $roles = Role::pluck("name", "id");
        $role_ids = [];
        if($admin){
            if($admin->roles){
                $role_ids = $admin->roles->pluck("id")->toArray();
            }
        }
        
        return view('app.partials.branch.form', compact(
            'admin','roles','role_ids'
        ));
    }

    public function submit(Request $request){
        $user = Auth::user();
        $input = $request->all();

        $role = [
            // 'assign_branch_no' => ['string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['nullable', 'numeric', 'digits:11'],
            'address' => ['nullable', 'max:500'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:branches,email,'.$request->id.',id'],
        ];
        if(!$request->id){
            $role['password'] = ['required', 'string', 'min:8', 'confirmed'];
        } else {
            if($request->password){
                 $role['password'] = ['required', 'string', 'min:8', 'confirmed'];
            }
        }
        $request->validate($role);

        if($request->id){
            $admin = Branch::find($request->id);
        } else {
            $admin = new Branch;
        }
        $admin->assign_branch_no = $request->assign_branch_no;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->phone = $request->phone??"";
        $admin->address = $request->address??"";
        if($request->password){
            $admin->password = Hash::make($request->password);
        }
        
        $admin->user_id = $user->id;
        $admin->save();
 
        return redirect()->route('app.branch');
    }

    public function ajax(Request $request){
        $user = Auth::user();
        $data = Branch::where('user_id', $user->id)->orderBy('sort_id', 'desc')->get();
        return Datatables::of($data)
        ->addIndexColumn()
        ->addColumn('assign_num', function($row){
            $btn = '<div class="input-group"><div class="input-group-prepend"></div><input type="text" 
            value="'.$row->assign_branch_no.'" data-id="'.$row->id.'" data-assign_branch_no="'.$row->assign_branch_no.'" class="form-control assgin-num"></div>';
            return $btn;
        })
        ->addColumn('action', function($row){
            $btn = '<a href="'.route('app.branch.form', $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
            // $btn .= '<a href="'.route('app.branch.assign', $row->id).'" class="edit btn btn-info btn-sm ml-2">Assign product</a>';
            return $btn;
        })
        ->rawColumns(['action','assign_num'])
        ->make(true);
    }
    public function assign_number(Request $request){
        // dd($request->all());
        $assgin_no = Branch::find($request->id);
        $assgin_no->assign_branch_no = $request->assign_branch_no;
        $assgin_no->save();
        return $assgin_no;
    }

    public function assign(Request $request){
        $branch_id = $request->id;
        //dd($company_id);
        return view('app.partials.branch.assign', compact('branch_id'));
    }

    public function branchProductAjax(Request $request){
         $data = ProductBranchManagement::with("product")->where("user_id",$request->user_id);
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('action', function($row){
                //     $btn = '<a href="'.route('admin.company.form', $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                //     $btn .= '<a href="'.route('admin.company.assign', $row->id).'" class="edit btn btn-info btn-sm ml-2">Assign product</a>';
                //     return $btn;
                // })
                //->rawColumns(['action'])
                ->make(true);
    }
    public function sort_branch()
    {
        $user = Auth::user();
        $branches = Branch::where('user_id', $user->id)->orderBy('sort_id', 'asc')->get();

        return view('app.partials.branch.branch_sort', compact('branches'));
    }


    public function updatebranch(Request $request)
    {
        // dd($request->all());

        if ($request->has('ids')) {
            $arr = explode(',', $request->input('ids'));

            foreach ($arr as $sortOrder => $id) {
                $menu = Branch::find($id);
                $menu->sort_id = $sortOrder;
                $menu->save();
            }
            return ['success' => true, 'message' => 'Updated'];
        }

        $posts = Post::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);
        
    }

}
