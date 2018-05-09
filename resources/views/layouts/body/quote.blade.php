@extends('master')

@section('content')
<div class="container" style="padding-top:120px; padding-bottom:50px">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">Request Quote</div>
        <div class="panel-body">
          <div class="col-md-6 col-sm-12">
            <label class="col-md-8 col-sm-12 control-label">Would you like to select websites by Category?</label>
            <button id="category" class="col-md-4 btn btn_sm btn_primary quote_btn">Category</button>
          </div>

          <div class="col-md-6 col-sm-12">
            <label class="col-md-8 col-sm-12 control-label">Would you like to choose your website features?</label>
            <button id="features" class="col-md-4 btn btn_sm btn_primary quote_btn">Features</button>
          </div>
        </div>

      </div>

      <div id="showCat" class="panel panel-default" style="display: none">
        <div class="panel-heading">Categories</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('public_quote') }}">
            {{ csrf_field() }}

            @forelse($getCategories as $getCategory)
            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

              <div class="col-md-6 col-sm-12">
                <label for="name" class="col-md-6 col-sm-12 control-label" style="text-align: left">{{ $getCategory->website_category }}</label>
                <input id="name" type="text" class="col-md-4 form-control" value="{{ $getCategory->website_cost }}" disabled />

                <input id="name" type="radio" class="col-md-2 form-control" name="category_id" value="{{ $getCategory->id }}" />
              </div>

            </div>
            @empty
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 col-sm-12 control-label">Empty</label>

              <div class="col-md-6 col-sm-12">
                <input id="name" type="text" class="form-control" name="name" value="Empty" required>
              </div>
            </div>
            @endforelse

            <div class="col-md-12">
              <div class="pull-right" style="margin: 20px 10px">
                <button type="submit" class="btn btn-primary btn_sm btn_secondary">
                  Get Quote
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div id="showFea" class="panel panel-default" style="display: none">
        <div class="panel-heading">Features</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('public_quote') }}">
            {{ csrf_field() }}

            @forelse($getFeatures as $getFeature)
            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">

              <div class="col-md-6 col-sm-12">
                <label for="name" class="col-md-6 col-sm-12 control-label" style="text-align: left">{{ $getFeature->website_feature }}</label>
                <input id="name" type="text" class="col-md-2 form-control" value="{{ $getFeature->feature_cost }}" disabled />
                @if($getFeature->dynamic == 'Yes')
                <select name="{{$getFeature->website_feature}}.1" class="col-md-2 form-control" style="margin-left: 5px; margin-right: -5px">
                  <option value="">select</option>
                  @for($i = 0; $i < count(countWebFeatNumber()); $i++)
                  <option value="{{ countWebFeatNumber()[$i] }}">{{ countWebFeatNumber()[$i] }}</option>
                  @endfor
                </select>
                @endif
                <input id="name" type="checkbox" class="col-md-2 form-control" name="{{$getFeature->website_feature}}" value="{{ $getFeature->id }}" />
              </div>

            </div>
            @empty
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 col-sm-12 control-label">Empty</label>

              <div class="col-md-6 col-sm-12">
                <input id="name" type="text" class="form-control" name="name" value="Empty" >
              </div>
            </div>
            @endforelse

            <div class="col-md-12">
              <div class="pull-right" style="margin: 20px 10px">
                <button type="submit" class="btn btn-primary btn_sm btn_secondary">
                  Get Quote
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
