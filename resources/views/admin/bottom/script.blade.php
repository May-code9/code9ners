<!-- jQuery first, then Tether, then Bootstrap JS. -->

<script src="{{asset('js/jquery-2.1.1.min.js')}}" type="text/javascript"></script>
<script>
$(function() {
  $("#question").fadeToggle(1000);
  $("#option").slideToggle(1000).delay(12000).fadeToggle(1000);
  $("#option2").fadeToggle(1000).delay(12000).fadeToggle(1000);
  $(".option").on('click', function() {
    var buttonId = $(this).attr('id');
    $('#'+buttonId).css({
      color:'black',
    });
  });
});
</script>
<script type="text/javascript">
$("document").ready(function() {
    $("#winner").animate({height: 100}, "fast")
    .animate({height: 80}, 400)
    .animate({"font-size": "+=10"}, "slow");
    $("#winner").fadeToggle(3000).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500)
    .fadeToggle(3000).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500).fadeToggle(1500);
    $("#winner").animate({height: 100}, "fast")
    .animate({height: 80}, 400)
    .animate({"font-size": "-=10"}, "slow");
  });
  </script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

  <script src="{{asset('vendor/bootstrap4beta/js/bootstrap.min.js')}}" type="text/javascript"></script>

  <!--Cookie js for theme chooser and applying it -->
  <script src="{{asset('vendor/cookie/jquery.cookie.js')}}"  type="text/javascript"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>

  <!-- Circular chart progress js -->
  <script src="{{asset('vendor/cicular_progress/circle-progress.min.js')}}" type="text/javascript"></script>

  <!--sparklines js-->
  <script type="text/javascript" src="{{asset('vendor/sparklines/jquery.sparkline.min.js')}}"></script>

  <!-- jvectormap JavaScript -->
  <script src="{{asset('vendor/jquery-jvectormap/jquery-jvectormap.js')}}"></script>
  <script src="{{asset('vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

  <!-- chart js -->
  <!-- <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('vendor/chartjs/utils.js')}}" type="text/javascript"></script> -->

  <!-- spincremente js -->
  <script src="{{asset('vendor/spincrement/jquery.spincrement.min.js')}}" type="text/javascript"></script>

  <!-- DataTables JavaScript -->
  <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('vendor/datatables/js/dataTables.responsive.min.js')}}"></script>

  <!-- custome template js -->
  <script src="{{asset('js/adminux.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/dashboard1.js')}}"></script>

  @if(Route::currentRouteName() == 'minstrelViewImages')
  <!-- Gallery and swipebox JavaScript -->
  <script src="{{ asset('vendor/masonry_swipebox/jquery.swipebox.js') }}"></script>
  <script src="{{ asset('vendor/masonry_swipebox/masonry.pkgd.min.js') }}"></script>

  <!-- page level js -->
  <script src="{{ asset('js/gallery.js') }}" type="text/javascript"></script>
  @endif
