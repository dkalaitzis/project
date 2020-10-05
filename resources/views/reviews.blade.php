@extends('layouts.app')

@section('content')
<!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-10">
        <div class="card mt-5">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="car.jpeg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="car1.jpeg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="cat.jpeg" alt="Third slide">
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
          <div class="card-body">
            <h3 class="card-title">$selected product name</h3>
            <h4>$selected product price</h4>
            <p class="card-text">$selected product description</p>
            <button type="button" class="btn btn-primary" onClick="window.location.href='checkout'">Buy Now!</button>
          </div>
        </div>

        

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>$Review content</p>
            <small class="text-muted">$username of the review</small>
            <hr>
            <p>$Review content</p>
            <small class="text-muted">$username of the review</small>
            <hr>
            <p>$Review content</p>
            <small class="text-muted">$username of the review</small>
            <hr>
            

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Leave a Review</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Leave a Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- Modal Body -->
                  <div class="modal-body">
                  <div class="md-form">
                    @csrf
                  <textarea method="post" action="" id="review" class="form-control md-textarea" length="250" rows="3" placeholder="Type your text"></textarea>
                  </div>
                  </div>
                  <!-- Modal Footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="submit" onClick="/reviews">Submit</button>
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