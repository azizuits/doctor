<?php
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\employee_information;
	use Illuminate\Http\Request;
	use DB;
	use Illuminate\Support\Facades\Redirect;;
class EmployeeInformationController extends Controller
{
	public function employee_info_form(){
		return view('employee_info');
	}
	public function employee_info_add(Request $req){
		$employee = new employee_information;
		$employee->name = $req->emp_name;
		$employee->phone = $req->emp_phone;
		$employee->designation = $req->designation;
		$employee->image = $req->emp_photo;
		$employee->save();
		return redirect::to('admin/employeeinfoview');
//		if($employee){
//			echo "Data Inserted Success";
//		}
//		else{
//			echo "Data not Inserted Success";
//		}
	}
	//Show Data
	public function employee_info_view(){
		$fetchData = DB::select('select * from employee_informations');
		$employeeinfo=['data'=>$fetchData];
		return view("employee_info_view",$employeeinfo);
	}
	//edit show data
	public function showdata($id){
//		return Dorctor_information::find($id);
		$data = employee_information::find($id);
		return view('employee_info_edit',['data'=>$data]);
	}
	//update data
	public function update(Request $req){
//		return $req->input();
		$data = employee_information::find($req->id);
		$data->name = $req->emp_name;
		$data->phone = $req->emp_phone;
		$data->designation = $req->designation;
		$data->save();
		return redirect::to('admin/employeeinfoview');
	}
	//Delete Data
	public function delete($id){
		$data = employee_information::find($id);
		$data -> delete();
		return redirect::to('admin/employeeinfoview');
	}
}
