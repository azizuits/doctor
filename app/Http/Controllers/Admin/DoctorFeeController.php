<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Doctor_fee;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;
class DoctorFeeController extends Controller
{
	public function doctorfee_info(){
		return view('doctorfee_info');
	}
	//Insert Data
	public function doctorfee_info_add(Request $req){
//		$doctor = new Dorctor_information;
//		$doctor->id;
		$doctorfee = new Doctor_fee;
		$doctorfee->doctor_id=1;
		$doctorfee->schedule = $req->schedule;
		$doctorfee->fee = $req->fee;
		$doctorfee->save();
		return redirect::to('admin/doctorfeeinfoview');
//		if($doctorfee){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//
//		}
	}
	//Show Data
	public function doctorfee_info_view()
	{
		$fetchData = DB::select('select * from doctor_fees');
		$doctorfee = ['data' => $fetchData];
		return view("doctorfee_info_view", $doctorfee);
	}
}
