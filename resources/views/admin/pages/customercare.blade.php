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
      <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Production <small>February 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" ><i class="fa fa-refresh"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Setting</a>
                  <a class="dropdown-item" href="#">Edit</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Close this</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="list-unstyled comment-list" style="height:400px;">
              <div class="media"> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Rahul Akshay <small class="pull-right">2:00 pm, 20 January, 2017</small></h6>
                  <p class="description">This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                  <button class="btn btn-outline-primary btn-round mr-2">Approve</button>
                  <button class="btn btn-outline-primary btn-round mr-2">Edit</button>
                  <button class="btn btn-outline-primary mr-2 btn-round ">Reject</button>
                </div>
              </div>
              <div class="media"> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Rahul Akshay <small class="pull-right">2:00 pm, 20 January, 2017</small></h6>
                  <p class="description">This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                  <button class="btn btn-outline-primary btn-round mr-2">Approve</button>
                  <button class="btn btn-outline-primary btn-round mr-2">Edit</button>
                  <button class="btn btn-outline-primary mr-2 btn-round ">Reject</button>
                </div>
              </div>
              <div class="media"> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Rahul Akshay <small class="pull-right">2:00 pm, 20 January, 2017</small></h6>
                  <p class="description">This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                  <button class="btn btn-outline-primary btn-round mr-2">Approve</button>
                  <button class="btn btn-outline-primary btn-round mr-2">Edit</button>
                  <button class="btn btn-outline-primary mr-2 btn-round ">Reject</button>
                </div>
              </div>
              <div class="media"> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Rahul Akshay <small class="pull-right">2:00 pm, 20 January, 2017</small></h6>
                  <p class="description">This is awesome product and, I am very happy with delivery & product packaging. Overall experience is good & I prefer to buy it again from this portals and like more orders.</p>
                  <button class="btn btn-outline-primary btn-round mr-2">Approve</button>
                  <button class="btn btn-outline-primary btn-round mr-2">Edit</button>
                  <button class="btn btn-outline-primary mr-2 btn-round ">Reject</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center"> <a href="#" >View all...</a> </div>
        </div>
      </div>
      <div class="col-md-16 col-lg-8 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Production <small>February 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-success btn-round"><i class="fa fa-save"></i> <span class="text">Save</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button>
                <div class="dropdown-menu"> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 1</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 2</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 3</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 4</a> </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="list-unstyled comment-list" style="height:400px;">
              <div class="media">
                <span class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Meeting with HODs and boards<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media">
                <span class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Presentation on target of 2017 order and sales marketing<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media active">
                <span class="form-check">
                  <label class="form-check-label active">
                    <input type="checkbox" class="form-check-input" checked>
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Strategy building on worlds health and consult organizations<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media active">
                <span class="form-check">
                  <label class="form-check-label active">
                    <input type="checkbox" class="form-check-input" checked>
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Meeting with HODs and boards<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media">
                <span class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Presentation on target of 2017 order and sales marketing<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media active">
                <span class="form-check">
                  <label class="form-check-label active">
                    <input type="checkbox" class="form-check-input" checked>
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Strategy building on worlds health and consult organizations<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
              <div class="media">
                <span class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    <i class="fa fa-check"></i>
                  </label>
                </span>
                <div class="media-body">
                  <h6 class="mt-0 mb-1">Meeting with HODs and boards<small class="pull-right"></small></h6>
                  2:00 pm, 20 January, 2017
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-center"> <a href="#">View all...</a> </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-16 col-lg-16 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">New Member <small>March 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-success btn-round"><i class="fa fa-cloud-download"></i> <span class="text"> Add</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn "><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu"> <a class="dropdown-item" href="#">Setting</a> <a class="dropdown-item" href="#">Edit</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Close this</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="list-unstyled member-list row">
              <div class="col-lg col-sm-8 col-xs-16 ">
                <div class="media flex-column "> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                  <div class="media-body">
                    <h6 class="mt-0 mb-1">Astha Smith</h6>
                    New Jersey, UK
                    <p class="description">This is awesome product and, I am very happy</p>
                  </div>
                  <div class="overlay align-items-center">
                    <button class="btn btn-success btn-round mr-2"><i class="fa fa-check"></i></button>
                    <button class="btn btn-danger mr-2 btn-round "><i class="fa fa-close"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-8 col-xs-16 ">
                <div class="media flex-column "> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                  <div class="media-body">
                    <h6 class="mt-0 mb-1">Rahul Akshay </h6>
                    New Jersey, UK
                    <p class="description">This is awesome product and, I am very happy</p>
                  </div>
                  <div class="overlay align-items-center">
                    <button class="btn btn-success btn-round mr-2"><i class="fa fa-check"></i></button>
                    <button class="btn btn-danger mr-2 btn-round "><i class="fa fa-close"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-lg col-sm-8 col-xs-16 ">
                <div class="media flex-column "> <span class="message_userpic"><img class="d-flex" src="../img/user-header.png" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                  <div class="media-body">
                    <h6 class="mt-0 mb-1">Rocky Jolly</h6>
                    New Jersey, UK
                    <p class="description">This is awesome product and, I am very happy</p>
                  </div>
                  <div class="overlay align-items-center">
                    <button class="btn btn-success btn-round mr-2"><i class="fa fa-check"></i></button>
                    <button class="btn btn-danger mr-2 btn-round "><i class="fa fa-close"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-16 col-lg-16 col-xl-8">
        <div class="card full-screen-container">
          <div class="card-header align-items-start justify-content-between flex">
            <h5 class="card-title  pull-left">Recent Projects <small>February 2017</small></h5>
            <ul class="nav nav-pills card-header-pills pull-right">
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-primary btn-round"><i class="fa fa-cloud-download"></i> <span class="text">Export</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-outline-success btn-round"><i class="fa fa-print"></i> <span class="text">Print</span></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round fullscreen-btn"><i class="fa fa-arrows-alt"></i></button>
              </li>
              <li class="nav-item">
                <button class="btn btn-sm btn-link btn-round" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></button>
                <div class="dropdown-menu"> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 1</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 2</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 3</a> <a class="dropdown-item" href="#"><i class="fa fa-calendar mr-2"></i>Quarter 4</a> </div>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="list-unstyled project-list row">
              <div class="col-md-16 col-lg-8 col-xl-8">
                <div class="media flex-column "> <span class="projectpic"><img src="../img/project_pic.jpg" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                  <div class="overlay ">
                    <label class="ribbon left danger"><span>Maxartkiller</span></label>
                    <h6 class="mt-0 mb-1">Website Design</h6>
                    2017 <br>
                    <br>
                    <a href="#" class="btn btn-outline-white btn-round "><i class="fa fa-eye"></i>View </a> </div>
                  </div>
                </div>
                <div class="col-md-16 col-lg-8 col-xl-8">
                  <div class="media flex-column "> <span class="projectpic"><img src="../img/project_pic.jpg" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                    <div class="overlay "> <br>
                      <h6 class="mt-0 mb-1">Website Design</h6>
                      2017 <br>
                      <br>
                      <a href="#" class="btn btn-outline-white btn-round "><i class="fa fa-eye"></i>View </a>
                      <label class="ribbon left danger"><span>Maxartkiller</span></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-16 col-lg-8 col-xl-8">
                  <div class="media flex-column hide"> <span class="projectpic"><img src="../img/project_pic.jpg" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                    <div class="overlay ">
                      <label class="ribbon left danger"><span>Maxartkiller</span></label>
                      <h6 class="mt-0 mb-1">Website Design</h6>
                      2017 <br>
                      <br>
                      <a href="#" class="btn btn-outline-white btn-round "><i class="fa fa-eye"></i>View </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-16 col-lg-8 col-xl-8">
                  <div class="media flex-column hide "> <span class="projectpic"><img src="../img/project_pic.jpg" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                    <div class="overlay ">
                      <label class="ribbon left danger"><span>Maxartkiller</span></label>
                      <h6 class="mt-0 mb-1">Website Design</h6>
                      2017 <br>
                      <br>
                      <a href="#" class="btn btn-outline-white btn-round "><i class="fa fa-eye"></i>View </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-16 col-lg-8 col-xl-8">
                  <div class="media flex-column hide"> <span class="projectpic"><img src="../img/project_pic.jpg" alt="Generic user image"> <span class="user-status bg-success "></span></span>
                    <div class="overlay ">
                      <label class="ribbon left danger"><span>Maxartkiller</span></label>
                      <h6 class="mt-0 mb-1">Website Design</h6>
                      2017 <br>
                      <br>
                      <a href="#" class="btn btn-outline-white btn-round "><i class="fa fa-eye"></i>View </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
