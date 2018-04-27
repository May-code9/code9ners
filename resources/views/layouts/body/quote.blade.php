@extends('master')

@section('content')
<div class="container" style="padding-top:120px; padding-bottom:50px">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">Request Quote</div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 col-sm-12 control-label">Full Name</label>

              <div class="col-md-6 col-sm-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 col-sm-12 control-label">E-Mail</label>

              <div class="col-md-6 col-sm-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 col-sm-12 control-label">Password</label>

              <div class="col-md-6 col-sm-12">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <label for="password-confirm" class="col-md-4 col-sm-12 control-label">Confirm Password</label>

              <div class="col-md-6 col-sm-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="clear"><br/></div>

            <legend>Your Contact/Address</legend>

            <div class="form-group{{ $errors->has('phonenumber') ? ' has-error' : '' }}">
              <label for="phonenumber" class="col-md-4 col-sm-12 control-label">Phone Number</label>

              <div class="col-md-6 col-sm-12">
                <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}" required>

                @if ($errors->has('phonenumber'))
                <span class="help-block">
                  <strong>{{ $errors->first('phonenumber') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
              <label for="city" class="col-md-4 col-sm-12 control-label">City</label>

              <div class="col-md-6 col-sm-12">
                <select id="city" name="city" type+"text" class="form-control" required>
                  <option value=""> --Select-- </option>
                  @for($i = 0; $i < count(getCity()); $i++)
                  <option value="{{getCity()[$i]}}">{{getCity()[$i]}}</option>
                  @endfor
                </select>

                @if ($errors->has('city'))
                <span class="help-block">
                  <strong>{{ $errors->first('city') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
              <label for="state" class="col-md-4 col-sm-12 control-label">State</label>

              <div class="col-md-6 col-sm-12">
                <select id="state" name="state" type+"text" class="form-control" required>
                  <option value=""> --Select-- </option>
                  @for($i = 0; $i < count(getStates()); $i++)
                  <option value="{{getStates()[$i]}}">{{getStates()[$i]}}</option>
                  @endfor
                </select>

                @if ($errors->has('state'))
                <span class="help-block">
                  <strong>{{ $errors->first('state') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary btn_sm btn_secondary">
                  Register
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
