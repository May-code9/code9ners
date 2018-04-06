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
        <form class="form-horizontal" role="form" method="POST" action="/guardianinfo/{{$getGuardianInfo->id}}">
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
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $getGuardianInfo->first_name }}" placeholder="Edit First Name" disabled style="background-color: #847c59">
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
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $getGuardianInfo->last_name }}" placeholder="Edit Last Name" disabled style="background-color: #847c59">
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
                        <label>Guardian Name</label>
                        <input id="parent_name" name="parent_name" type="text" class="form-control" value="{{ $getGuardianInfo->parent_name }}" placeholder="Edit Guardian Name" required>
                        @if ($errors->has('parent_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('parent_name') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Guardian Address</label>
                        <input id="address" name="address" type="text" class="form-control" value="{{ $getGuardianInfo->address }}" placeholder="Edit Address" required>
                        @if ($errors->has('address'))
                        <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
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
                        <label>Guardian CHurch</label>
                        <input id="church" name="church" type="text" class="form-control" value="{{ $getGuardianInfo->church }}" placeholder="Edit Guardian Church" required>
                        @if ($errors->has('church'))
                        <span class="help-block">
                          <strong>{{ $errors->first('church') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Guardian Phone Number</label>
                        <input id="phone_number2" name="phone_number2" type="text" class="form-control" value="{{ $getGuardianInfo->phone_number2 }}" placeholder="Edit Address" required>
                        @if ($errors->has('phone_number2'))
                        <span class="help-block">
                          <strong>{{ $errors->first('phone_number2') }}</strong>
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
