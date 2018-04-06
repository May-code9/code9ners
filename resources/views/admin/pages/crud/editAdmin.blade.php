@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>Edit Table</h3>
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

    <!-- Add Games -->
    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" role="form" method="POST" action="/admin/{{$admin->id}}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0">Change Admin</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>First Name</label>
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $admin->first_name }}" disabled style="background-color: #739cc5;">
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $admin->last_name }}" disabled style="background-color: #739cc5;">
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Email</label>
                        <input id="email" name="email" type="email" class="form-control" value="{{ $admin->email }}" disabled style="background-color: #739cc5;">
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                        <label>Role</label>
                        <input id="role" name="role" type="text" class="form-control" value="{{ $admin->role }}" >

                        @if ($errors->has('role'))
                        <span class="help-block">
                          <strong>{{ $errors->first('role') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

            <div class="card-footer">
              <button class="btn btn-success pull-right" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
