<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Medicine;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class MedicineController extends Controller
{
	public function medicine_info(){
		return view('medicine_info');
	}
	//Insert Data
	public function medicine_info_add(Request $req){
		$medicine = new Medicine;
		$medicine->name = $req->name;
		$medicine->doz = $req->doz;
		$medicine->description = $req->description;
		$medicine->save();
		return redirect::to('admin/medicineinfoview');
//		if($medicine){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//		}
	}
	//Show Data
	public function medicine_info_view()
	{
		$fetchData = DB::select('select * from medicines');
		$medicineinfo = ['data' => $fetchData];
		return view("medicine_info_view", $medicineinfo);
	}
}
