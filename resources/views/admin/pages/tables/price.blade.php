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
      <div class="col-sm-8 col-md-8 push-2">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Price <small>Table</small> </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Position</th>
                  <th>Price</th>
                  <th>Other Prices</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($prices as $price)
                <tr class="">
                  <td>{{ $price->id }}</td>
                  <td>{{ $price->position }}</td>
                  <td>{{ $price->price }}</td>
                  <td>{{ $price->others }}</td>
                  <td class="center"><a href="/pricelist/{{$price->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Status</a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Position</th>
                  <th>Price</th>
                  <th>Other Prices</th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->

          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
