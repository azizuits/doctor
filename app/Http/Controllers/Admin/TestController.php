<?php
	
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Test;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
	public function patienttest_info(){
		return view('patienttest_info');
	}
	//Insert Data
	public function patienttest_info_add(Request $req){
		$patienttest = new Test;
		$patienttest->name = $req->name;
		$patienttest->description = $req->description;
		$patienttest->save();
		return redirect::To('admin/patienttestinfoview');
//		if($patienttest){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//
//		}
	}
	//Show Data
	public function patienttest_info_view()
	{
		$fetchData = DB::select('select * from tests');
		$patienttestinfo = ['data' => $fetchData];
		return view("patienttest_info_view", $patienttestinfo);
	}
}
