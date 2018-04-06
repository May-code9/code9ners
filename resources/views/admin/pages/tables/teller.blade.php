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

    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" method="GET" action="{{ route('tellerno.search') }}" role="form">
          {{ csrf_field() }}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Teller Info<small> by User Name, Teller Number or Confirmation Status</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Search Here</label>
                      <div class="input-group">
                      <input id="name_search" name="name_search" type="text" class="form-control datepicker" placeholder="Search By User Name, Teller Number or Confirmation Status">
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
      <div class="col-sm-16 col-md-16">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">All Teller <small>Table</small> | <small>Total Number of Tellers: </small>{{ countTeller() }} </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Teller No</th>
                  <th>Status</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School</th>
                  <th>State</th>
                  <th>Disability</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($getListOfUsers as $getListOfUser)
                <tr class="">
                  <td>{{ $getListOfUser->id }}</td>
                  <td>{{ $getListOfUser->first_name }} {{ $getListOfUser->last_name }}</td>
                  <td>{{ $getListOfUser->teller_no }}</td>
                  <td>{{ $getListOfUser->confirmed }}</td>
                  <td>{{ $getListOfUser->age }}</td>
                  <td>{{ $getListOfUser->gender }}</td>
                  <td>{{ $getListOfUser->school }}</td>
                  <td>{{ $getListOfUser->state }}</td>
                  <td>{{ $getListOfUser->handicap }}</td>
                  <td class="center"><a href="/teller/{{$getListOfUser->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Status</a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Subscriber</th>
                  <th>Teller No</th>
                  <th>Status</th>
                  <th>Age</th>
                  <th>Gender</th>
                  <th>School</th>
                  <th>State</th>
                  <th>Disability</th>
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
