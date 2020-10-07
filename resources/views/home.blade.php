@extends('layouts.app')

@section('content')

    <!-- Homepage Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <h1 class="text-center" style="font-family: Georgia, serif; font-size: 60px;"> Supercars 2020 </h1>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ asset('images/home/car.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('images/home/car1.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('images/home/car2.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        <div class="row">
          @foreach ($cars as $car)
            
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/{{$car->slug}}/reviews"><img class="card-img-top" src="{{ asset($car->cover_img) }}" alt="Mclaren"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/{{$car->slug}}/reviews">{{ $car->name }}</a>
                  </h4>
                  <h5>${{ number_format($car->car_price) }}</h5>
                  <p class="card-text"> {{ $car->car_description }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
    
    @include('inc.backtop')
    </br>

@endsection



