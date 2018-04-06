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
        <form class="form-horizontal" role="form" method="POST" action="{{ route('minstrelPostImages') }}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Add Image Details</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Image Title</label>
                        <input id="image_title" name="image_title" type="text" class="form-control" required>
                        @if ($errors->has('image_title'))
                        <span class="help-block">
                          <strong>{{ $errors->first('image_title') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Image Text</label>
                        <input id="image_text" name="image_text" type="text" class="form-control" required>
                        @if ($errors->has('image_text'))
                        <span class="help-block">
                          <strong>{{ $errors->first('image_text') }}</strong>
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
                        <p>Mini-Image(370x370)</p>
                        <label class="custom-file">
                          <input id="mini_image" name="mini_image" class="custom-file-input" type="file" required>
                          <span class="custom-file-control"></span>
                        </label>
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <p>Large-Image(1200x800)</p>
                        <label class="custom-file">
                          <input id="large_image" name="large_image" class="custom-file-input" type="file" required>
                          <span class="custom-file-control"></span>
                        </label>
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
