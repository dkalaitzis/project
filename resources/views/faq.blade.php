@extends('layouts.app')

@section('content')
	<section data-section-id="2" data-category="faqs" data-component-id="2c0d_9_01_awz" class="py-5">
      <div class="container content">
        <h2 class="mb-5 text-center" data-config-id="header">Frequently Asked Questions</h2>
        <div class="accordion" id="faq-01" data-config-id="faq">
          <div class="mb-2 border-bottom">
            <h5 id="faq-heading1-01">
              <button class="btn btn-link btn-block text-left d-flex text-dark" type="button" data-toggle="collapse" data-target="#faq-collapse1-01" aria-expanded="false" aria-controls="faq-collapse1-01" style="white-space:normal !important; word-wrap: break-word">What if I don't like the colour of the car in the pictures?<img class="p-1 ml-auto my-auto" src="{{ asset('images/chevron-circle-down.svg') }}" alt=""></button>
            </h5>
            <div class="collapse" id="faq-collapse1-01" aria-labelledby="faq-heading1-01" data-parent="#faq-01">
              <p>We can offer free repainting of the car once you purchase it.</p>
            </div>
          </div>
          <div class="mb-2 border-bottom">
            <h5 id="faq-heading2-01">
              <button class="btn btn-link btn-block text-left d-flex text-dark" type="button" data-toggle="collapse" data-target="#faq-collapse2-01" aria-expanded="false" aria-controls="faq-collapse2-01" style="white-space:normal !important; word-wrap: break-word">Can I see the car before I buy it?<img class="p-1 ml-auto my-auto" src="{{ asset('images/chevron-circle-down.svg') }}" alt=""></button>
            </h5>
            <div class="collapse" id="faq-collapse2-01" aria-labelledby="faq-heading2-01" data-parent="#faq-01">
              <p>Of course! Please arrange a viewing by calling us on 0606 024 0909.</p>
            </div>
          </div>
          <div class="mb-2 border-bottom">
            <h5 id="faq-heading3-01">
              <button class="btn btn-link btn-block text-left d-flex text-dark" type="button" data-toggle="collapse" data-target="#faq-collapse3-01" aria-expanded="false" aria-controls="faq-collapse3-01" style="white-space:normal !important; word-wrap: break-word">What happends if I change my mind?<img class="p-1 ml-auto my-auto" src="{{ asset('images/chevron-circle-down.svg') }}" alt=""></button>
            </h5>
            <div class="collapse" id="faq-collapse3-01" aria-labelledby="faq-heading3-01" data-parent="#faq-01">
              <p>All our cars have a 7-Day Exchange Policy. If you are not satisfied with your car, you can return it up to 7 days after pick up or delivery.</p>
            </div>
          </div>
          <div class="mb-2 border-bottom">
            <h5 id="faq-heading4-01">
              <button class="btn btn-link btn-block text-left d-flex text-dark" type="button" data-toggle="collapse" data-target="#faq-collapse4-01" aria-expanded="false" aria-controls="faq-collapse4-01" style="white-space:normal !important; word-wrap: break-word">Do you accept cash payments?<img class="p-1 ml-auto my-auto" src="{{ asset('images/chevron-circle-down.svg') }}" alt=""></button>
            </h5>
            <div class="collapse" id="faq-collapse4-01" aria-labelledby="faq-heading4-01" data-parent="#faq-01">
              <p>Due to COVID-19 we have introduced new measures as part of our commitment to our customers and colleagues safety. This unfortunately means we no longer accept cash payments of any value.</p>
            </div>
          </div>
          <div class="mb-2 border-bottom">
            <h5 id="faq-heading5-01">
              <button class="btn btn-link btn-block text-left d-flex text-dark" type="button" data-toggle="collapse" data-target="#faq-collapse5-01" aria-expanded="false" aria-controls="faq-collapse5-01" style="white-space:normal !important; word-wrap: break-word">Can I pick up the car and drive away on the same day?<img class="p-1 ml-auto my-auto" src="{{ asset('images/chevron-circle-down.svg') }}" alt=""></button>
            </h5>
            <div class="collapse" id="faq-collapse5-01" aria-labelledby="faq-heading5-01" data-parent="#faq-01">
              <p>In most cases yes! 95% of our cars are ready to leave.</p>
            </div>
          </div>
      </div>
    </section>



@endsection
