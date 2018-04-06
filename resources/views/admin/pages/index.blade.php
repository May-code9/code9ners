@extends('admin.master')
@section('content')
<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-11 col-sm-12 page-title">
        <h3>{{ config('app.name') }} Dashboard</h3>
        <p>Creatively crafted for your needs</p>
      </div>

    </div>
    <div class="row">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block success">
          <div class="media">
            <div class="media-body">
              <h5> <span class="spincreament">...</span></h5>
              <p>Subscribers</p>
            </div>
            <i class="fa fa-cubes"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-cubes"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block danger">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span></h5>
              <p> SuperAdmin</p>
            </div>
            <i class="fa fa-users"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-users"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block warning">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span></h5>
              <p> Admin</p>
            </div>
            <i class="fa fa-eye"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-users"></i>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block primary">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span></h5>
              <p>Tellers</p>
            </div>
            <i class="fa fa-dribbble"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
            </div>
          </div>
          <i class="bg-icon text-center fa fa-comments"></i>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span></h5>
              <p>Confirmed Subscribers</p>
            </div>
            <i class="fa fa-dribbble"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span><span class="badge badge-danger ml-2 "><i class="fa fa-caret-down"></i></span></h5>
              <p>Images</p>
            </div>
            <i class="fa fa-money"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">...</span><span class="badge badge-success ml-2 "><i class="fa fa-caret-up"></i></span></h5>
              <p>Video</p>
            </div>
            <i class="fa fa-question"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4">
        <div class="activity-block">
          <div class="media">
            <div class="media-body">
              <h5><span class="spincreament">....</span></h5>
              <p>.....</p>
            </div>
            <i class="fa fa-ticket"></i>
          </div>
          <br>
          <div class="media">
            <div class="media-body"><span class="progress-heading">Monthly progress</span></div>
            <span><span class="dynamicsparkline">Loading..</span> </span>
          </div>
          <div class="row">
            <div class="progress ">
              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span class="trackerball"></span></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
