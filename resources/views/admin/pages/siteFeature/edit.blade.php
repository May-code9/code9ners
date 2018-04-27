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
        <form class="form-horizontal" role="form" method="POST" action="/siteFeature/{{ $getFeature->id }}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Website Feature</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Website Feature</label>
                        <input id="website_feature" name="website_feature" type="text" class="form-control" value="{{ $getFeature->website_feature }}" placeholder="Add Website Feature" required/>
                        @if ($errors->has('website_feature'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_feature') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <div class="form-group ">
                          <label>Dynamic?</label>
                          <select name="dynamic" class="form-control" required>
                            <option value="{{ $getFeature->dynamic }}">{{ $getFeature->dynamic }}</option>
                            <option>--------------------------------------------------------------------------</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label>Cost</label>
                        <input id="feature_cost" name="feature_cost" type="text" value="{{ $getFeature->feature_cost }}" class="form-control" placeholder="Add Feature Cost" required/>
                        @if ($errors->has('feature_cost'))
                        <span class="help-block">
                          <strong>{{ $errors->first('feature_cost') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
