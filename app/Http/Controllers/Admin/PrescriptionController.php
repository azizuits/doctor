<?php
	
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Prescription;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;
use PhpParser\Comment\Doc;

class PrescriptionController extends Controller
{
	public function prescription_info(){
		return view('prescription_info');
	}
	public function prescription_info_add(Request $req){
//		$doctor = new Dorctor_information;
//		$doctor->id;
//		$patient = new Patient_information;
//		$patient->id;
		$prescription = new Prescription;
		$prescription->doctor_id=1;
		$prescription->patient_id=1;
		$prescription->description = $req->description;
		$prescription->save();
		return redirect::to('admin/prescriptioinfoview');
//		if($prescription){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//		}
	}
	//Show Data
	public function prescription_info_view()
	{
		$fetchData = DB::select('select * from prescriptions');
		$prescriptioninfo = ['data' => $fetchData];
		return view("prescription_info_view", $prescriptioninfo);
	}
}
