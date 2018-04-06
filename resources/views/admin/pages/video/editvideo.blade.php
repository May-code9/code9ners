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

    <div class="row">
      <div class="col-sm-12 col-md-12 push-1">
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
    </div>


    <!-- Edit Scores -->
    <div class="row">
      <div class="col-sm-12 push-1">
        <form class="form-horizontal" role="form" method="POST" action="/videoupload/{{$videolinks->id}}" enctype="multipart/form-data">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Add Video Details</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Video Title</label>
                        <input id="video_title" name="video_title" value="{{ $videolinks->video_title }}" type="text" maxlength="25" class="form-control" required>
                        @if ($errors->has('video_title'))
                        <span class="help-block">
                          <strong>{{ $errors->first('video_title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Youtube Video Link</label>
                        <input id="link" name="link" type="text" value="{{ $videolinks->link }}" class="form-control" placeholder="https://youtube.com..." required>
                        @if ($errors->has('link'))
                        <span class="help-block">
                          <strong>{{ $errors->first('link') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <br>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Date</label>
                        <input id="date_of_video" name="date_of_video" value="{{ $videolinks->created_at }}" type="date" class="form-control" required>
                        @if ($errors->has('date_of_video'))
                        <span class="help-block">
                          <strong>{{ $errors->first('date_of_video') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Time</label>
                        <input id="time_of_video" name="time_of_video" type="time" value="{{ $videolinks->time_of_video }}" class="form-control" required>
                        @if ($errors->has('time_of_video'))
                        <span class="help-block">
                          <strong>{{ $errors->first('time_of_video') }}</strong>
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
