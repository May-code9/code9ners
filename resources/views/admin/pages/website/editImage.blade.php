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
      <div class="col-sm-8 push-2">
        <form class="form-horizontal" role="form" method="POST" action="/edit Website Image/{{ $getWebsite->id }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Website Image</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-16 col-md-16">
                      <div class="form-group">
                        <label>Website's Current Image</label>
                        <img class="img-responsive" src="{{ asset('images/websites/' . $getWebsite->website_image) }}" >
                      </div>
                    </div>

                    <div class="col-lg-16 col-md-16">
                      <div class="form-group">
                        <label>Change Website Image</label>
                        <input type="file" name="website_image" id="website_image" value="" required>
                        <p style="padding-left:10px">Image ratio (width/height): 1.33 or It's Equivalent Ratio</p>
                        @if ($errors->has('website_image'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_image') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

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
