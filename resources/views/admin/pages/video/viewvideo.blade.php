@extends('admin.master')
@section('content')

<div class="wrapper-content">
  <div class="container">
    <div class="row  align-items-center justify-content-between">
      <div class="col-8 col-sm-10 page-title">
        <h3>Videos</h3>
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

    <div style="font-size:24px">
      {{ $videolinks->links() }}
    </div>

    <div class="row">
      <div class="col list-unstyled project-list " style="max-height: 480px;">
        <div class="page_subtitles">Video Uploads</div>
        <div class="row">
          @forelse($videolinks as $videolink)
          <div class="col-md-16 col-lg-8 col-xl-4">
            <div class="media flex-column ">
              <span class="projectpic">
                <iframe src="{{ $videolink->link }}" width="306" height="195" alt="" frameborder="0" allowfullscreen >
              </iframe>
                <span class="user-status bg-success "></span>
              </span>
              <div class="overlay " style="width:10%">
                <label class="ribbon right success" style="margin-right:-30px; padding: 5px 5px"><span>{{ $videolink->video_title }}</span></label>
                <label class="ribbon right success" style="margin-right:-30px; padding: 5px 5px"><span>{{ $videolink->time_of_video }}</span></label>
                <label class="ribbon right success" style="margin-right:-30px; padding: 5px 5px"><span><a style="font-size:16px; text-decoration:none" href="/videoupload/{{$videolink->id}}/edit">Edit</a></span></label>
              </div>

            </div>
          </div>
          <div style="margin-bottom:30px"></div>
          @empty
          <h1 style="text-align:center">No Uploads Yet</h1>
          @endforelse
        </div>
      </div>
    </div>
  </div>


  @endsection
