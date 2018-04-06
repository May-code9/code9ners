@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>Save Table</h3>
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

    <!-- Edit Scores -->
    <div class="row">
      <div class="col-sm-16">
        <form class="form-horizontal" role="form" method="POST" action="/contactinfo/{{$getContactInfo->id}}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Status</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>First Name</label>
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $getContactInfo->first_name }}" placeholder="Edit First Name" disabled style="background-color: #847c59">
                        @if ($errors->has('first_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $getContactInfo->last_name }}" placeholder="Edit Last Name" disabled style="background-color: #847c59">
                        @if ($errors->has('last_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                        @endif
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
                        <input id="email" name="email" type="email" class="form-control" value="{{ $getContactInfo->email }}" placeholder="Edit Email" required>
                        @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Own Phone Number</label>
                        <input id="phone_number" name="phone_number" type="text" class="form-control" value="{{ $getContactInfo->phone_number }}" placeholder="Edit Phone Number" required>
                        @if ($errors->has('phone_number'))
                        <span class="help-block">
                          <strong>{{ $errors->first('phone_number') }}</strong>
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
