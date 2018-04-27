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
            <h5 class="card-title">Search Website<small> by Name or Id</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Search Here</label>
                      <div class="input-group">
                      <input id="name_search" name="name_search" type="text" class="form-control datepicker" placeholder="Search By Website Name or Id">
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
            <h5 class="card-title">All Websites | <small>Total Number of Websites: </small> {{ noWebsite() }} </h5>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Website</th>
                  <th>Address</th>
                  <th>Image</th>
                  <th>Admin Editor</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($getWebsites as $getWebsite)
                <tr class="">
                  <td>{{ $getWebsite->id }}</td>
                  <td>{{ $getWebsite->website_name }}</td>
                  <td>{{ $getWebsite->website_address }}</td>
                  <td class="center"><a href="/edit Website Image/{{ $getWebsite->id }}"><img class="img-rounded" src="{{ asset('images/websites/' . $getWebsite->website_image) }}" width="90" height="50"></a></td>
                  <td>{{ $getWebsite->name }}</td>
                  <td class="center"><a href="/website/{{$getWebsite->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Info</a></td>
                  <td class="center">
                    <a href="/website/{{ $getWebsite->id }}" onclick="event.preventDefault(); document.getElementById('{{$getWebsite->website_name}}').submit();" class="btn btn-sm btn-danger mr-2">Delete</a>
                    <form id="{{$getWebsite->website_name}}" action="/website/{{ $getWebsite->id }}" method="POST" style="display: none;">
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
                  <th>Website</th>
                  <th>Address</th>
                  <th>Image</th>
                  <th>Admin Editor</th>
                  <th></th>
                  <th></th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table-responsive -->
            <div style="font-size:20px">
              {{ $getWebsites->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
