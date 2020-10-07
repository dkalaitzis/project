@extends('layouts.app')

@section('content')

          <h2 class="mb-5 text-center" data-config-id="header">Checkout Page</h2>
          <div class="container mt-4 d-flex justify-content-center main">
            <div class="card">
              <div class="d-flex justify-content-between px-3 pt-4"> 
                <span class="pay">Pay amount</span>
                  <div class="amount">
                      <div class="inner">
                        <span class="dollar">$</span>
                        <span class="total"> $_SESSION["total"] </span>
                      </div>
                  </div>
              </div>
                <div class="px-3 pt-3"> 
                  <label for="card number" class="d-flex justify-content-between">
                    <span class="labeltxt">CARD NUMBER</span>
                  </label> 
                  <input type="number" name="number" class="form-control inputtxt" placeholder="8881 2545 2545 2245"> 
                </div>
              <div class="d-flex justify-content-between px-3 pt-4">
                  <div>
                    <label for="date" class="exptxt"> Expiry </label>
                    <input type="number" name="number" class="form-control expiry" placeholder="YYYY">
                  </div>
                  <div>
                    <label for="cvv" class="cvvtxt">CVV / CVC </label>
                    <input type="number" name="number" class="form-control cvv" placeholder="123">
                  </div>
              </div>
              <div class="d-flex justify-content-between px-3 pt-4 pb-4">
                  <div>
                    <button type="button" class="btn btn-light cancel" onClick="window.location.href='/home', window.alert('Click OK to be redirected to the Homepage')">Cancel</button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-primary payment" onClick="window.alert('Success or Not')";>Make Payment</button>
                  </div>
              </div>
          </div>
      </div>    


      <!-- IF CARD# NOT 16 DIGITS SHOW ERROR -->
      <!-- IF CVV NOT 3 DIGITS SHOW ERROR -->
      <!-- IF EXP.YEAR NOT 4 DIGITS SHOW ERROR -->
      <!-- ELSE SHOW ALERT "SUCCESS PAYMENT" -->


@endsection