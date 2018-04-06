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
      <div class="col-sm-12 col-md-12 push-1">
        @if(session('success_status'))
        <div class = "alert alert-success">
          {{session('success_status')}}
        </div>
        @endif

        @if(session('failure_status'))
        <div class = "alert alert-danger">
          {{session('failure_status')}}
        </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 push-1">
        <form class="form-horizontal" method="GET" action="{{ route('contactinfo.search') }}" role="form">
          {{ csrf_field() }}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Contact<small> by User Name, Email, Phone Number</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Search Here</label>
                      <div class="input-group">
                      <input id="name_search" name="name_search" type="text" class="form-control datepicker" placeholder="Search By User Name, Email, Phone Number">
                    </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-primary mr-2">Search</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12 col-md-12 push-1">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">All Subscribers' <small>Contact</small> | <small>Total Number of Subscribers: </small>{{ countUser() }} </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Email</th>
                  <th>Own Phone</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($getListOfUsers as $getListOfUser)
                <tr class="">
                  <td>{{ $getListOfUser->id }}</td>
                  <td>{{ $getListOfUser->first_name }} {{ $getListOfUser->last_name }}</td>
                  <td>{{ $getListOfUser->email }}</td>
                  <td>{{ $getListOfUser->phone_number }}</td>
                  <td class="center"><a href="/contactinfo/{{$getListOfUser->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Contact</a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Email</th>
                  <th>Own Phone</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $getListOfUsers->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
