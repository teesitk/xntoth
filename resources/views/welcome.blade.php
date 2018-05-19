@extends('layouts.default')

@section('content')
<link rel="stylesheet" href="{{env('APP_URL')}}/vendor/owl/assets/owl.carousel.min.css">
<link rel="stylesheet" href="{{env('APP_URL')}}/vendor/owl/assets/owl.theme.default.min.css">
<div class="row">
    <div class="col-sm-8">
        <div class="owl-carousel owl-theme card">
          <div> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTw-AX1U08gtEu4h3dOm0rwhq_LMJdx54So7Dle75yVNXHeGZOSg"> </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card border-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">Coming Soon!</div>
          <div class="card-body text-primary">
            <br><br><br>
            <h5 class="card-title text-center">ADS 640x200</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <br><br><br>
          </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{env('APP_URL')}}/vendor/owl/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
        items:1,
        merge:true,
        //loop:true,
        margin:10,
        lazyLoad:true,
        center:true,
  });
});
</script>
@endsection