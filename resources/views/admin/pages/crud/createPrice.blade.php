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
        <form class="form-horizontal" role="form" method="POST" action="{{ route('pricelist.store') }}">
          {{ csrf_field() }}
          <div class="card">

            <div class="card-body">
              <h5 class="m-0"> Create Price</h5>
              <hr>

              <div class="row justify-content-center">
                <div class="col-md-10 ">
                  <div class="row ">
                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Position</label>
                        <input id="position" name="position" type="text" class="form-control" placeholder="Add Position">
                        @if ($errors->has('position'))
                        <span class="help-block">
                          <strong>{{ $errors->first('position') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>

                    <div class="col-lg-8 col-md-8">
                      <div class="form-group">
                        <label>Price</label>
                        <input id="price" name="price" type="text" class="form-control" placeholder="Add Price">
                        @if ($errors->has('price'))
                        <span class="help-block">
                          <strong>{{ $errors->first('price') }}</strong>
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
                        <label>Other Prices</label>
                        <input id="others" name="others" type="text" class="form-control" placeholder="Add Other Prices">
                        @if ($errors->has('others'))
                        <span class="help-block">
                          <strong>{{ $errors->first('others') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>

            <div class="card-footer">
              @if($price <= 2)
              <button class="btn btn-success pull-right" type="submit">Submit</button>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  @endsection
