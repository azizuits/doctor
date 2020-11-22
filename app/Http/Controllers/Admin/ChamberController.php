<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Chamber;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;

class ChamberController extends Controller
{
	public function chamber_info()
	{
		return view('chamber_info');
	}
	
	public function chamber_info_add(Request $req)
	{
		$chamber = new Chamber;
		$chamber->chamber_name = $req->chamber_name;
		$chamber->doctors_name = $req->doctors_name;
		$chamber->save();
		return redirect::to('admin/chamberinfoview');
//		if ($chamber) {
//			echo "Data Inserted Success";
//		} else {
//			echo "Data not Inserted Success";
//		}
	}
	
	//Show Data
	public function chamber_info_view()
	{
		$fetchData = DB::select('select * from chambers');
		$chamberinfo = ['data' => $fetchData];
		return view("chamber_info_view", $chamberinfo);
	}
}
