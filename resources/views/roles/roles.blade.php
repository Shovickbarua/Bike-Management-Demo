@extends('layout.master')
@section('title', 'Roles')
@section('content')

<div class="row">
			<div class="col-lg-12">
				<div class="card">
				  <div class="card-header">
					<h3 class="card-title">Roles</h3>
					<a href="{{route('role.create')}}" class="btn btn-success float-right btn-sm">Add Role</a>
				  </div>
					<!-- /.card-header -->
					<div class="card-body">
          <table id="" class="table table-bordered table-striped">
						  <thead>
						  <tr>
                <th width="7%">Serial</th>
                <th>Role</th>
                <th>Status</th>
                <th width="7%">Action</th>
						  </tr>
						  </thead>
						  <tbody>
							@foreach($users as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$user->username}}</td>
									<td>
                                @if($user->status ==1)
                                <span class="badge light ">
                                    <i class="fa fa-circle text-success me-1"></i>
                                    Active
                                </span>
                                @else
                                <span class="badge light ">
                                    <i class="fa fa-circle text-danger me-1"></i>
                                   Inactive
                                </span>
                                @endif
                            </td>
									<td>
									<a href="{{route('role.edit', $user->id)}}" class="btn shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
									<a href="{{route('destroy', $user->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
								</td>
								</tr>
							@endforeach
						  </tbody>
						</table>
            
					</div>	 
				</div>
			</div>
		</div>


@endsection