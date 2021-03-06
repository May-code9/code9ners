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
        <form class="form-horizontal" role="form" method="POST" action="/siteCategory/{{ $getCategory->id }}">
          {{ method_field('PUT') }}
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Edit Website Category</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Website Category</label>
                        <input id="website_category" name="website_category" type="text" class="form-control" value="{{ $getCategory->website_category }}" placeholder="Add Website Category" required/>
                        @if ($errors->has('website_category'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_category') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <div class="form-group ">
                          <label>Dynamic?</label>
                          <select name="dynamic" class="form-control" required>
                            <option value="{{ $getCategory->dynamic }}">{{ $getCategory->dynamic }}</option>
                            <option>--------------------------------------------------------------------------</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                          </select>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                      <div class="form-group">
                        <label>Cost</label>
                        <input id="website_cost" name="website_cost" type="text" value="{{ $getCategory->website_cost }}" class="form-control" placeholder="Add Category Cost" required/>
                        @if ($errors->has('website_cost'))
                        <span class="help-block">
                          <strong>{{ $errors->first('website_cost') }}</strong>
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
