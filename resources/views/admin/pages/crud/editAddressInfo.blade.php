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
        <form class="form-horizontal" role="form" method="POST" action="/addressinfo/{{$getAddressInfo->id}}">
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
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $getAddressInfo->first_name }}" placeholder="Edit First Name" disabled style="background-color: #847c59">
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
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $getAddressInfo->last_name }}" placeholder="Edit Last Name" disabled style="background-color: #847c59">
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
                        <label>City</label>
                        <select class="form-control" id="city" name="city" required>
                          <option value="{{ $getAddressInfo->city }}">{{ $getAddressInfo->city }}</option>
                          <option value="" disabled>---- Select ----</option>
                          @for($i = 0; $i < count(getCities()); $i++)
                          <option value="{{getCities()[$i]}}">{{getCities()[$i]}}</option>
                          @endfor
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>State</label>
                        <select class="form-control" id="state" name="state" required>
                          <option value="{{ $getAddressInfo->state }}">{{ $getAddressInfo->state }}</option>
                          <option value="" disabled>---- Select ----</option>
                          @for($i = 0; $i < count(getStates()); $i++)
                          <option value="{{getStates()[$i]}}">{{getStates()[$i]}}</option>
                          @endfor
                        </select>
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
                        <label>School Name</label>
                        <input id="school" name="school" type="text" class="form-control" value="{{ $getAddressInfo->school }}" placeholder="Edit School Name" required>
                        @if ($errors->has('school'))
                        <span class="help-block">
                          <strong>{{ $errors->first('school') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>School Address</label>
                        <input id="school_address" name="school_address" type="text" class="form-control" value="{{ $getAddressInfo->school_address }}" placeholder="Edit School Address" required>
                        @if ($errors->has('school_address'))
                        <span class="help-block">
                          <strong>{{ $errors->first('school_address') }}</strong>
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
