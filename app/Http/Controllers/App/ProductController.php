<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ProductPricingManagement;
use App\ProductBranchManagement;
use App\Product;
use App\CustomerCategory;
use DataTables;

class ProductController extends Controller
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
        $user = Auth::user();
        $categories = CustomerCategory::
        // where("c_id", $user->user_id)->
        get(); 
        return view('app.partials.product.index',compact('categories'));
    }

    public function ajax(Request $request){ 
        $user = Auth::user();
        $data = ProductPricingManagement::with("product","categ")->where("user_id",$user->id);
        $customer_category = CustomerCategory::where('c_id',$user->id)->get();
        if ($request->has('category_id')) {
            $category_id = $request->category_id;
            $data->where('cate', $category_id);
        }
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('cate', function($row){
                    $btn = $row->categ != null ? $row->categ->name : "Not Selected";
                    return $btn;
                })
                ->rawColumns(['price','cate'])
                ->make(true);
    }

    public function assignProduct(Request $request){

        //dd($request->product_id,$request->id);
        $pricing = ProductBranchManagement::firstOrNew(array('product_id' => $request->product_id, 'user_id'=>$request->id));
        $pricing->company_price = $request->price;
        $pricing->save();
        
        return redirect()->route('app.branch.assign',$request->id);
    }

    public function adminProductSearch(Request $request){
        $user = Auth::user();
        //dd($user->id);
        $data = [];
        //$products = Product::where("name", "like", "%".$request->search."%")->limit(10)->get();
        $products = ProductPricingManagement::where('user_id',$user->id)->with("product")->get()->toArray();
//dd($products);
        if($products){
            foreach ($products as $key=>$product) {
                //dd($product['product']['name']);
                $data[] = ['text'=>$product['product']['name'], 'id'=>$product['product']['id'], 'product'=>$product['product']];
            }
        }
        return  ['results'=>$data];
    }

    public function updatePrice(Request $request){
        $price = ProductPricingManagement::find($request->id);
        $price->p_price = $request->price;
        $price->save();
        return $price;
    }

    public function updateCate(Request $request){
        $price = ProductPricingManagement::find($request->id);
        //$customer_category = CustomerCategory::where('name',$request->cate)->get();
        $price->cate = $request->cate;
        $price->save();
        return $price;
    }



}
