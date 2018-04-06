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
        <form class="form-horizontal" role="form" method="POST" action="/personalinfo/{{$getPersonalInfo->id}}">
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
                        <input id="first_name" name="first_name" type="text" class="form-control" value="{{ $getPersonalInfo->first_name }}" placeholder="Edit First Name" required>
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
                        <input id="last_name" name="last_name" type="text" class="form-control" value="{{ $getPersonalInfo->last_name }}" placeholder="Edit Last Name" required>
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
                        <label>Gender</label>
                        <select class="form-control" id="gender" name="gender" required>
                          <option value="{{ $getPersonalInfo->gender }}">{{ $getPersonalInfo->gender }}</option>
                          <option value="" disabled>---- Select ----</option>
                          <option value="male">Male</option>
                          <option value="female">Female</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Age</label>
                        <select class="form-control" id="age" name="age" required>
                          <option value="{{ $getPersonalInfo->age }}">{{ $getPersonalInfo->age }}</option>
                          <option value="" disabled>---- Select ----</option>
                          @for($i = 0; $i < count(getAge()); $i++)
                          <option value="{{getAge()[$i]}}">{{getAge()[$i]}}</option>
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
                        <label>Inspiration</label>
                        <input id="inspiration" name="inspiration" type="text" class="form-control" value="{{ $getPersonalInfo->inspiration }}" placeholder="Edit Inspiration" required>
                        @if ($errors->has('inspiration'))
                        <span class="help-block">
                          <strong>{{ $errors->first('inspiration') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Disability</label>
                        <input id="handicap" name="handicap" type="text" class="form-control" value="{{ $getPersonalInfo->handicap }}" placeholder="Edit Disability" required>
                        @if ($errors->has('handicap'))
                        <span class="help-block">
                          <strong>{{ $errors->first('handicap') }}</strong>
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
