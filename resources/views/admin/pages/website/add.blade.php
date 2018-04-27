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
        <form class="form-horizontal" role="form" method="POST" action="{{ route('website.store') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Add Website</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Website Name</label>
                        <input id="website_name" name="website_name" type="text" class="form-control" placeholder="Add Website Name" required/>
                        @if ($errors->has('website_name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_name') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Website Image</label>
                        <input id="website_image" name="website_image" type="file" class="form-control" placeholder="Add Website Image" required/>
                        @if ($errors->has('website_image'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_image') }}</strong>
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

                    <div class="col-lg-16 col-md-16">
                      <div class="form-group">
                        <label>Website Address</label>
                        <input id="website_address" name="website_address" type="text" class="form-control" placeholder="Add Website Address" required/>
                        @if ($errors->has('website_address'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_address') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <input id="user_id" name="user_id" type="hidden" class="form-control" value="{{ Auth::user()->id }}" />

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
