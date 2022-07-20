@extends('frontend.layout.main')

@section('content')

<section class="" style="background-color: #f27a21;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="card-body p-4 p-lg-5 text-black">

            @if(session('status'))
              <div class="alert alert-success" role="alert">
                <h4>
                  <i class="fa-solid fa-envelope"></i>
                  Check Your E-Mail!
                </h4>
                <hr>
                <p class="mb-0">
                  {{ session('status') }}
                </p>
              </div>    
            @else
            <div class="d-flex align-items-center mb-3 pb-1">
              <img src="{{ asset('assets/images/logo.jpeg') }}" class="img-fluid">
            </div>   

            <form action="{{ url('forgot-password') }}" method="post">
              @csrf

              <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Your password reset procedure will be sent there</h4>

              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror   
              </div>

              <div class="pt-1 mb-4">
                <a href="{{ route('login') }}" class="btn btn-dark btn-lg btn-block float-start" title="Back to Login Page">
                  <i class="fa-solid fa-arrow-left"></i>
                  Back
                </a>
                <button type="submit" class="btn btn-dark btn-lg btn-block float-end" title="Send">
                  <i class="fa-solid fa-paper-plane"></i>
                  Send
                </button>
              </div>
                  
            </form>
            @endif 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection