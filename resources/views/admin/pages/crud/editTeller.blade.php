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
        <form class="form-horizontal" role="form" method="POST" action="/teller/{{$checkSerial->id}}">
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
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $checkSerial->first_name }}" placeholder="Edit First Name" disabled style="background-color: #847c59">
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
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $checkSerial->last_name }}" placeholder="Edit Last Name" disabled style="background-color: #847c59">
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

              <input id="confirmation_id" name="confirmation_id" type="hidden" class="form-control" value="{{ $checkSerial->confirmation_id }}">

              <br/>
              <br/>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Teller Number</label>
                        <input id="teller_no" name="teller_no" type="text" class="form-control" value="{{ $checkSerial->teller_no }}" placeholder="Teller No">
                        @if ($errors->has('teller_no'))
                        <span class="help-block">
                          <strong>{{ $errors->first('teller_no') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Confirmation</label>
                        <select class="form-control" id="confirmed" name="confirmed" required >
                          <option value="" >{{ $checkSerial->confirmed }}</option>
                          <option value="" >---- Select ----</option>
                          <option value="Activate" >Activate</option>
                          <option value="Deactivate" >Deactivate</option>
                        </select>
                        @if ($errors->has('confirmed'))
                        <span class="help-block">
                          <strong>{{ $errors->first('confirmed') }}</strong>
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
