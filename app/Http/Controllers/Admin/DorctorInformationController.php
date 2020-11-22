<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
use App\Dorctor_information;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class DorctorInformationController extends Controller
{
	public function doctor_info_form(){
		return view('doctor_information');
	}
	//Insert Data
	public function doctor_info_add(Request $req){
		$doctor = new Dorctor_information;
		$doctor->name = $req->doct_name;
		$doctor->phone = $req->doct_phone;
		$doctor->degree = $req->doct_degree;
		$doctor->experience = $req->experience;
		$doctor->field = $req->doct_field;
		$doctor->image = $req->doct_photo;
		
		$doctor->save();
		if($doctor){
			echo "Data Inserted Success";
		}
		else{
			echo "Data not Inserted Success";
		}
	}
	//Show Data
	public function doctor_info_view(){
		$fetchData = DB::select('select * from Dorctor_informations');
		$doctorinfo=['data'=>$fetchData];
		return view("doctor_information_view",$doctorinfo);
	}
	//edit show data
	public function showdata($id){
//		return Dorctor_information::find($id);
        $data = Dorctor_information::find($id);
        return view('doctor_information_edit',['data'=>$data]);
	}
	//update data
	public function update(Request $req){
//		return $req->input();
		$data = Dorctor_information::find($req->id);
		$data->name = $req->doct_name;
		$data->phone = $req->doct_phone;
		$data->degree = $req->doct_degree;
		$data->experience = $req->experience;
		$data->field = $req->doct_field;
		$data->save();
		return redirect::to('admin/doctorinfoview');
	}
	//Delete Data
	public function delete($id){
		$data = Dorctor_information::find($id);
		$data -> delete();
		return redirect::to('admin/doctorinfoview');
	}
}
