<?php
	
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Patient_information;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class PatientInformationController extends Controller
{
	public function patient_info_form(){
		return view('patient_info');
	}
	public function patient_info_add(Request $req){
		$patient = new Patient_information;
		$patient->name = $req->patient_name;
		$patient->phone = $req->patient_phone;
		$patient->main_disease = $req->disease;
		$patient->image = $req->patient_photo;
		$patient->save();
		return redirect::to('admin/patientinfoview');
//		if($patient){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//		}
	}
	//Show Data
	public function patient_info_view(){
		$fetchData = DB::select('select * from patient_informations');
		$patientinfo=['data'=>$fetchData];
		return view("patient_info_view",$patientinfo);
	}
	//edit show data
	public function showdata($id){
//		return Dorctor_information::find($id);
		$data = Patient_information::find($id);
		return view('patient_info_edit',['data'=>$data]);
	}
	//update data
	public function update(Request $req){
//		return $req->input();
		$data = Patient_information::find($req->id);
		$data->name = $req->patient_name;
		$data->phone = $req->patient_phone;
		$data->main_disease = $req->disease;
		$data->save();
		return redirect::to('admin/patientinfoview');
		
	}
	//Delete Data
	public function delete($id){
		$data = Patient_information::find($id);
		$data -> delete();
		return redirect::to('admin/patientinfoview');
	}
}
