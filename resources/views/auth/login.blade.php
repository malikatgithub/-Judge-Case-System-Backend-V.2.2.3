
@extends('layouts.css_main')

@section('body')
   

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-white py-6 pt-lg-5">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-12">
                <a href="javascript:void(0)">
                    <img src={{ asset("public/assets/img/brand/logo.webp") }} class="navbar-brand-img " alt="..." style="width:15%">
                </a>
              <p class="text-lead text-black display-4" style="font-family:times-new-roman">Electronic System Dashboard</p>
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">

            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <meduim>Login Information</meduim>
              </div>



              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

              
                <div class="form-group row mb-0">
                    <div class="col-md-12">
                        <center>
                          <button type="submit" class="btn btn-dark">
                            {{ __('Login') }}
                          </button>
                        </center>
                    </div>
                </div>
            </form>
              
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <!-- <div class="copyright text-right text-muted">
                &copy; 2020 <a href="https://www.privilege.sd" class="text-dark font-weight-bold" target="_blank" style="letter-spacing: 1px"> PRIVILEGE <i class="fab fa-product-hunt text-danger"></i></a>
              </div> -->
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://privilege.sd" class="nav-link" target="_blank">Electronic System Dashboard</a>
                </li>
        
              </ul>
            </div>
          </div>
    </div>
  </footer> 
@endsection
