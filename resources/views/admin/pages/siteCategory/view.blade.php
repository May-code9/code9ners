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

    <div class="col-md-12 push-1">
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

    <div class="row">
      <div class="col-sm-16 col-md-12 push-1">
        <form class="form-horizontal" method="GET" action="#" role="form">
          {{ csrf_field() }}
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Search Site Category<small> by Name or Id</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Search Here</label>
                      <div class="input-group">
                      <input id="name_search" name="name_search" type="text" class="form-control datepicker" placeholder="Search By Site Category or Id">
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

    <div class="col-md-12 push-1">
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

    <div class="row">
      <div class="col-sm-16 col-md-12 push-1">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title pull-left">All Website Categories | <small>Total Number of Websites Categories: </small> {{ noSiteCategory() }} </h5>
            <span style="font-size:20px; float: right">
              {{ $getCategories->links() }}
            </span>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Category</th>
                  <th>Dynamic?</th>
                  <th>Cost</th>
                  <th>Admin Editor</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($getCategories as $getCategory)
                <tr class="">
                  <td>{{ $getCategory->id }}</td>
                  <td>{{ $getCategory->website_category }}</td>
                  <td>{{ $getCategory->dynamic }}</td>
                  <td>{{ $getCategory->website_cost }}</td>
                  <td>{{ $getCategory->name }}</td>
                  <td class="center"><a href="/siteCategory/{{$getCategory->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Info</a></td>
                  <td class="center">
                    <a href="/siteCategory/{{ $getCategory->id }}" onclick="event.preventDefault(); document.getElementById('{{$getCategory->website_category}}').submit();" class="btn btn-sm btn-danger mr-2">Delete</a>
                    <form id="{{$getCategory->website_category}}" action="/siteCategory/{{ $getCategory->id }}" method="POST" style="display: none;">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                    </form>
                  </td>
                </tr>
                @empty
                <h1 style="text-align: center">Website Table is Empty</h1>
                @endforelse
              </tbody>
              <tfoot>
                <tr>
                  <th>Id </th>
                  <th>Category</th>
                  <th>Dynamic?</th>
                  <th>Cost</th>
                  <th>Admin Editor</th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $getCategories->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
