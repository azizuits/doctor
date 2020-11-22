<?php
	
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\OrderSchedule_book;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class OrderScheduleBookController extends Controller
{
	public function order_schedule_book(){
		return view('order_schedule_book');
	}
}
