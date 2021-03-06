<?php 

  $image = ['Screenshot_18.png','Screenshot_20.png','Screenshot_25.png'];
  $active = "active";

?>

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      @foreach($sliders as $slider)


        <div class="carousel-item {{$active}}" style="height: 404px; width: 740px;"> 
          <a href="{{$slider->link}}">
          <img src="{{asset('/images')}}/{{$slider->image}}" class="d-block w-100" alt="..."></a>
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$slider->title}}</h5>
            <p>{{$slider->caption}}</p>
          </div>
        </div>

        @php
          $active = '';
        @endphp
      @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
