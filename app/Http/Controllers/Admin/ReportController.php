<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Tip;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Sale;
use App\Product_Sale;
use App\User;
use App\Branch;
use Spatie\Permission\Models\Role;
use App\ProductPricingManagement;
use App\ProductBranchManagement;
use DataTables;

class ReportController extends Controller
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

    public function index()
    {
        // $starting_date = date("Y-m-d", strtotime(date('Y-m-d', strtotime('-1 year', strtotime(date('Y-m-d') )))));
        // $ending_date = date("Y-m-d");
        
        return view('admin.partials.report.index');
    }

    public function invoice($id)
    {  //dd(1);
        $sale = Tip::find($id);
        // if(!$sale){
        //     return redirect()->route('admin.report');
        // }
        // $items = Product_Sale::where("sale_id",$id)->get();
        //dd($items);
        //$items->branch;
        return view('admin.partials.report.invoice', compact('sale'));
    }
    public function ajax(Request $request)
    {
        $user = Auth::user();
        $data = Tip::with('teacher')->where(function($query) use($request) {
            if($request->payment_status){
                $query->where("payment_status",$request->payment_status);
            }
            if($request->starting_date && $request->ending_date){
                $query->whereDate("created_at", ">=", $request->starting_date)->whereDate("created_at", "<=", $request->ending_date);
            }
        });
        
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('date', function($row){
                $date = date_create($row->created_at);
                return date_format($date,"d/m/Y");
            }) 
            ->addColumn('teacher_name', function($row){
                return $row->teacher->first_name . ' ' . $row->teacher->last_name;
            })
            ->addColumn('user_name', function($row){
                return $row->user->first_name . ' ' . $row->user->last_name;
            })
            ->addColumn('action', function($row){
                return '<a href="'.route('admin.report.invoice', $row->id).'" class="edit btn btn-primary btn-sm"target="_blank">Invoice</a>';
            }) 
            ->rawColumns(['date', 'teacher_name', 'user_name', 'action'])
            ->make(true);
    }
    


}
