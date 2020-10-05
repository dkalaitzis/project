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
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/mclaren/mclaren.jpeg') }}" alt="Mclaren"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item One ($name)</a>
                  </h4>
                  <h5>$24.99 ($price)</h5>
                  <p class="card-text">The McLaren 720S is a sports car designed and manufactured by British automobile manufacturer McLaren Automotive. It is the second all-new car in the McLaren Super Series, replacing the 650S beginning in May 2017.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/lambo/lambo.jpeg') }}" alt="Lamborghini"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item Two</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">The Huracán EVO is the evolution of the most successful V10-powered Lamborghini ever. The result of fine-tuning and refining existing features, combined with new design solutions that increase performance, the car stands out for its ability to anticipate and cater to the driver’s behavior, expectations and desires.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/ford/ford.jpeg') }}" alt="Ford"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item Three</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">This car has a racing history—it won its class at the 2016 24 Hours of LeMans—that shows it belongs alongside the worlds most desirable supercars and one of the most exclusive, expensive, and extraordinary cars the Blue Oval brand has ever built.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/aston/aston.jpeg') }}" alt="Aston Martin"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item Four</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">The Aston Martin Valhalla is an upcoming mid-engine sports car manufactured by British automobile manufacturer Aston Martin in collaboration with Red Bull Racing. The car is meant to sit below the flagship Valkyrie track focused sports car and is intended to be more usable as an everyday car.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/ferrari/ferrari.jpeg') }}" alt="Ferrari"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">The Ferrari SF90 Stradale is a mid-engine PHEV sports car produced by the Italian automobile manufacturer Ferrari. The car shares its name with the SF90 Formula One car with SF90 standing for the 90th anniversary of the Scuderia Ferrari racing team and "Stradale" meaning road.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/reviews"><img class="card-img-top" src="{{ asset('images/bmw/bmw5.jpeg') }}" alt="BMW"></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/reviews">Item Six</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">The BMW i8 is a plug-in hybrid sports car developed by BMW. The i8 is part of BMW's electrified fleet and is marketed under the BMW i sub-brand. The production version of the BMW i8 was unveiled at the 2013 Frankfurt Motor Show, and was released in Germany in June 2014.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @include('inc.backtop')
    </br>

@endsection



