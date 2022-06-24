@extends('frontend.layout.main')

@section('content')

<section class="" style="background-color: #f27a21;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="{{ asset('assets/images/justice.jpg') }}"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;"
                author="Photo by Sora Shimazaki from Pexels"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('register') }}" method="POST">
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="{{ asset('assets/images/logo.jpeg') }}"
                         class="img-fluid"
                    >
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up For an Account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="first_name">Firstname</label>
                    <input type="text" name="first_name" id="first_name" class="form-control form-control-lg @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}"/>
                    @error('first_name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="last_name">Lastname</label>
                    <input type="text" name="last_name" id="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"/>
                    @error('last_name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}"/>
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror"/>
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"/>
                    @error('password_confirmation')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already signed up? <a href="login" style="color: #393f81;">Login here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection