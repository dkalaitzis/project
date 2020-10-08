@extends('layouts.app')

@section('content')

    <h2 class="mb-5 text-center" data-config-id="header">Checkout Page</h2>
    <form>
    <div class="container mt-4 d-flex justify-content-center main">
      <div class="card">
        <div class="d-flex justify-content-between px-3 pt-4"> 
          <span class="pay">Car price:</span>
            <div class="amount">
                <div class="inner">
                  <span class="dollar">$</span>
                  <span class="total">{{ number_format($car->car_price) }}</span>
                </div>
            </div>
        </div>
          <div class="px-3 pt-3"> 
            <label for="card number" class="d-flex justify-content-between">
              <span class="labeltxt">Card Number</span>
            </label> 
            <input type="number" name="card" class="form-control inputtxt" placeholder="8881 2545 2545 2245" required> 
          </div>
        <div class="d-flex justify-content-between px-3 pt-4">
            <div>
              <label for="date" class="exptxt"> Expiry </label>
              <input type="month" name="expiry_month" class="form-control expiry" required>
            </div>
            <div>
              <label for="cvv" class="cvvtxt">CVV / CVC </label>
              <input type="number" name="cvv" class="form-control cvv" placeholder="123" required>
            </div>
        </div>
        <div class="d-flex justify-content-between px-3 pt-4 pb-4">
            <div>
              <button type="button" class="btn btn-light cancel" onClick="window.location.href='/home', window.alert('Click OK to be redirected to the Homepage')">Cancel</button>
            </div>
            <div>
              <button type="submit" class="btn btn-primary payment" onSubmit="window.location.href='/home'">Make Payment</button>
            </div>
        </div>
      </div>
    </div>
  </form>
</div>    


@endsection