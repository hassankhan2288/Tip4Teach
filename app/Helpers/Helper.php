<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Event;
use App\Setting;
use App\EventDescription;
use Carbon\Carbon;
use App\Message;
use App\Category;
use App\PostTag;
use App\PostCategory;
use App\Order;
use App\Wishlist;
use App\Shipping;
use App\Cart;
use App\Product_Sale;
use App\Customer;
use App\Stock;
//use App\product_sales;
use App\Warehouse;

use Illuminate\Support\Facades\DB;

function image_url($resource){

	return config("app.aws_url")."/".$resource;
}

function generateBreadcrumb($shop = null){

	/** Admin Breadcrumb **/

	if(Route::is('admin.dashboard')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Dashboard', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
		]));
	}
	if(Route::is('admin.teacher')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Teacher', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Teacher', 'route'=>'admin.teacher'],
		]));
	}
	if(Route::is('admin.student')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Student', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Student', 'route'=>'admin.student'],
		]));
	}
	if(Route::is('admin.teacher.report')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Reports', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Report', 'route'=>'admin.teacher.report'],
		]));
	}
	if(Route::is('admin.sub')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Admin', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Admin', 'route'=>'admin.sub'],
		]));
	}

	if(Route::is('admin.user')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('User', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'User', 'route'=>'admin.user'],
		]));
	}

	if(Route::is('admin.user.form')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('User', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'User', 'route'=>'admin.user'],
			['name'=>'Add', 'route'=>'admin.user'],
		]));
	}
	if(Route::is('admin.role')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Role', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Role', 'route'=>'admin.role'],
		]));
	}

	if(Route::is('admin.role.form')){

		View::share('renderBreadcrumb', generateBreadcrumbLink('Role', [
			['name'=>'Dashboard', 'route'=>'admin.dashboard'],
			['name'=>'Role', 'route'=>'admin.role'],
			['name'=>'Add', 'route'=>'admin.role'],
		]));
	}


}


function generateBreadcrumbLink(String $title, Array $links){

	$html = '';
	$html .= '<h1 class="mr-2">'.$title.'</h1>';
	if($links):
		$html .= '<ul>';
		foreach ($links as $key => $value):
			$html .= '<li>';
			if(count($links)!==($key+1)):
				$html .= '<a href="'.route($value['route']).'">'.ucfirst($value['name']).'</a>';
			else:
				$html .= ucfirst($value['name']).'</li>';
			endif;

		endforeach;
		$html .= '</ul>';
	endif;

	return $html;
}

function isPassworedConfirmed($password){
	return Hash::check($password, Auth::user()->password);
}

function generateUserEvent($id){
	$data = [];
	$event_count = Event::where("user_id",$id)->count();
	if($event_count===0){
		$event_descriptions = EventDescription::all();
		foreach($event_descriptions as $event){
			$data[] = ['user_id'=>$id, 'event_description_id'=>$event->id, 'type'=>'shopify','channel'=>$event->channel];
		}
		Event::insert($data);
	}

}

