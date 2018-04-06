@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>{{ config('app.name') }} Dashboard</h3>
        <p>Creatively crafted Dashboard for your needs</p>
      </div>

    </div>

    <div class="row">
      <div class="col-sm-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">User <small>Search</small></h5>
            <h5 class="card-title"><small>Locate your new Admin, click "Edit", then Change "Role" to "3"</small></h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Admin FullName </th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($users as $user)
                <tr class="">
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone_number }}</td>
                  <td>{{ $user->role }}</td>
                  <td><a href="/admin/{{$user->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit</a></td>
                </tr>
                @empty
                <h2>Cannot Find {{ $first_name }}</h2>
                @endforelse
              </tbody>
            </table>
            <!-- /.table-responsive -->
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
