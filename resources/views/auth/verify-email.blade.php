@extends('frontend.layout.main')

@section('content')

<section class="" style="background-color: #f27a21;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="card-body p-4 p-lg-5 text-black">
              <div class="alert alert-success" role="alert">
                <h4>
                  <i class="fa-solid fa-envelope-check"></i>
                  Click the email verification link to activate your account!
                </h4>
              </div>
            <div class="d-flex align-items-center mb-3 pb-1">
              <img src="{{ asset('assets/images/logo.jpeg') }}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection