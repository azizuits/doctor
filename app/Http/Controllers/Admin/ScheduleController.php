<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Schedule;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class ScheduleController extends Controller
{
   public function schedule_info(){
   	return view('schedule_info');
   }
	public function schedule_info_add(Request $req){
		$schedule = new Schedule;
		$schedule->schedule_1 = $req->schedule1;
		$schedule->schedule_2 = $req->schedule2;
		$schedule->schedule_3 = $req->schedule3;
		$schedule->schedule_4 = $req->schedule4;
		$schedule->date = $req->date;
		$schedule->save();
		return redirect::to('admin/scheduleinfoview');
//		if($schedule){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//		}
	}
	//Show Data
	public function schedule_info_view()
	{
		$fetchData = DB::select('select * from schedules');
		$scheduleinfo = ['data' => $fetchData];
		return view("schedule_info_view", $scheduleinfo);
	}
}
