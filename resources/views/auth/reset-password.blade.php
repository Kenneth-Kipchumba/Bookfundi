@extends('frontend.layout.main')

@section('content')

<section class="" style="background-color: #f27a21;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="card-body p-4 p-lg-5 text-black">
            <div class="d-flex align-items-center mb-3 pb-1">
              <img src="{{ asset('assets/images/logo.jpeg') }}" class="img-fluid">
            </div>

            <h3>You are now resetting your password</h3>
            <hr>

            <form action="{{ url('reset-password') }}" method="post" class="mt-5">
              @csrf

              <input type="hidden" name="token" value="{{ request()->route('token') }}">

              <div class="form-outline mb-4">
                <label class="form-label" for="email">Your Email address</label>
                <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror   
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="password">
                  New Password
                </label>
                <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"/>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror   
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="password">
                  Confirm New Password
                </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"/>
                @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                    {{ $message }}
                  </span>
                @enderror   
              </div>

              <div class="pt-1 mb-4">
                <button type="submit" class="btn btn-dark btn-lg btn-block float-end" title="Submit">
                  <i class="fa-solid fa-lock"></i>
                  Reset Password
                </button>
              </div>
                  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection