@extends('layouts.admin')
@section('title')
    Add Employee Information
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12 p-0 m-0">
                    <div class="card ">
                        <div class="card-header bg-light"><h4>Employee Information View</h4></div>
                        <div class="card-body m-0 p-3">
                            <table class="table table-bordered table-hover table-striped table-responsive m-0">
                <tr>
					<?php
					foreach($data[0] as $key=>$value){
						echo "<th>".ucfirst($key)."</th>";
					}
					echo "<th>Action</th>";
					?>
                </tr>
				<?php
				$count=1;
				foreach($data as $rows){
					echo "<tr>";
					foreach($rows as $val){
						echo "<td>$val</td>";
						$count++;
					}
					$id=$rows->id;
					echo "<td><a class=\"btn btn-info\" href=\"/admin/employeeedit/$id\">Edit</a>  <a class=\"btn btn-danger\" href=\"/admin/delete/$id\">Delete</a></td>";
					echo "</tr>";
				}
				?>
                {{--        <tr>--}}
                {{--            <td colspan="<?=$count;?>" class="text-center"><a href="/form" class="btn btn-primary">Add New Subagents</a></td>--}}
                {{--        </tr>--}}
            </table>
        </div>
    </div>
</div>
@endsection
