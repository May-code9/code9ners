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
            <h5 class="card-title">Search Site Feature<small> by Name or Id</small></h5>
          </div>
          <div class="card-body">
            <div class="row justify-content-center">
              <div class="col-md-8 ">
                <div class="row ">
                  <div class="col-md-16">
                    <div class="form-group">
                      <label>Search Here</label>
                      <div class="input-group">
                      <input id="name_search" name="name_search" type="text" class="form-control datepicker" placeholder="Search By Site Feature or Id">
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
            <h5 class="card-title pull-left">All Website Features | <small>Total Number of Websites Features: </small> {{ noSiteFeature() }} </h5>
            <span style="font-size:20px; float: right">
              {{ $getFeatures->links() }}
            </span>
          </div>
          <div class="card-body">
            <table class="table " id="dataTables-example">
              <thead>
                <tr>
                  <th>Id </th>
                  <th>Feature</th>
                  <th>Dynamic?</th>
                  <th>Cost</th>
                  <th>Admin Editor</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($getFeatures as $getFeature)
                <tr class="">
                  <td>{{ $getFeature->id }}</td>
                  <td>{{ $getFeature->website_feature }}</td>
                  <td>{{ $getFeature->dynamic }}</td>
                  <td>{{ $getFeature->feature_cost }}</td>
                  <td>{{ $getFeature->name }}</td>
                  <td class="center"><a href="/siteFeature/{{$getFeature->id}}/edit" id="edit" class="btn btn-sm btn-primary mr-2">Edit Info</a></td>
                  <td class="center">
                    <a href="/siteFeature/{{ $getFeature->id }}" onclick="event.preventDefault(); document.getElementById('{{$getFeature->website_feature}}').submit();" class="btn btn-sm btn-danger mr-2">Delete</a>
                    <form id="{{$getFeature->website_feature}}" action="/siteFeature/{{ $getFeature->id }}" method="POST" style="display: none;">
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
                  <th>Feature</th>
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
              {{ $getFeatures->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
