
@extends('layouts.css_main')






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="../../../public/css/css/styles.css" rel="stylesheet" /> -->

        <link href="{{ asset('public/css/css/styles.css') }}" rel="stylesheet">
        
    </head>
    <body class="d-flex flex-column h-100">
    
        <div class="row">
            <div class="col-md-12 bg-dark">
                    <div class="small m-0 text-white p-4"> 
                        <span>Case Check status page</span>
                        <span class="float-right">Electronic Judge Case System 2021</span>
                    </div>
                
            </div>


            

        </div>      

    <div class="container">
                       
            
            <section class="py-5" id="features">


                            <div class="container mt-2">
                        <div class="row justify-content-center">

                            
                                @if(isset($operation))

                                        @if($info->j_comment != NULL)
                                            <div class="col-md-12 bg-success p-4 text-white rounded">
                                                <i class="fa fa-check"></i> &nbsp; Your case if reviewed and Juding data : <b> {{$info->case_date}}</b>.
                                            </div>
                                       
                                        
                                        @elseif($info->status == NULL)
                                            <div class="col-md-12 bg-warning p-4 text-white rounded">
                                                <i class="fa fa-ban"></i> Your Case pendding right now ( Not Accepted or Rejected).
                                            </div>

                                        @elseif($info->status == 1)
                                            <div class="col-md-12 bg-primary p-4 text-white rounded">
                                                <i class="fa fa-exclamation-triangle"></i> Your Case Accepted wait for Judge Review.
                                            </div>

                                        @elseif($info->status == 0)
                                            <div class="col-md-12 bg-danger p-4 text-white rounded">
                                                <i class="fa fa-ban"></i> Your Case Rejected.
                                            </div>
                                        @endif

                                @endif

                            <div class="col-md-12 mt-3">

                                {{-- Start of card Div  --}}

                                <div class="card border-top-0">
                                        <div class="card-header border-top1 font-weight-bold text-dark">
                                                <i class="fas fa-university"></i> &nbsp; Your Case have been submitted
                                        </div>
                                            <br>
                                            <div class="container">
                                {{-- Start of form  --}}
                                            <form action="{{route('case.store')}}" method="POST" enctype="multipart/form-data">
                                                {{@csrf_field()}}
                                                <div class="card flex-row flex-wrap">
                                                    
                                            

                                        
                                                    <div class="p-3 border-0 flex-column w-100" >                                    

                                                        
                                        {{-- teacher information Section --}}

                                        {{-- Row of teacher information --}}


                                                        <div class="row ">

                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Case ID <span class="required">*</span> </label>
                                                                        <h2 class="text-danger">{{ $info->id }}</h2>
                                                                </div>

                                                               
                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Name <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder=""  required name="c_name" value="{{ $info->c_name }}">
                                                                </div>


                                                                                                                            
                                                                <div class="col-md-4 mb-4">
                                                                <label for="validationDefault01">Case Type <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder=""  required name="c_name" value="{{ $info->case_type }}">
                                                                </div>

                                                                
                                                                
                                                                
                                                        </div>
                                                        

                                                        <div class="row ">

                                                                 

                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Address <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder=""  required name="c_address" value="{{ $info->c_address }}">
                                                                </div>


                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Phone</label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder="" value="{{ $info->phone}}"  name="phone" required>
                                                                </div>

                                                    
                                                        </div>


                                                        <div class="row">

                                                    

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Name <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder=""  required name="d_name" value="{{ $info->d_name }}">
                                                            </div>

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Address <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder=""  required name="d_address" value="{{ $info->d_address }}">
                                                            </div>

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Phone</label>
                                                                        <input type="text" class="form-control border-0" id="validationDefault01" placeholder="" value="{{ $info->d_phone }}"  name="d_phone" required>
                                                            </div>


                                                        </div>

                                                        
                                                        

                                                        <div class="row ">
                                                            <div class="col-md-12 mb-12">
                                                                    <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Subject</label>
                                                                            <textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="3" placeholder="" name="subject">{{ $info->subject }}</textarea>
                                                                    </div>
                                                            </div>
                                                                
                                                        </div>


                                                        <div class="row">
                                                         
                                                            <a class="nav-link text-center" href={{ url('website') }}>
                                                                <i class="fas fa-arrow-left "></i>
                                                                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Home Page</span>
                                                            </a>
                                                          
                                                        </div>
                                
                                                
                                                        
                                                    </div>
                                                </div>
                                                       
                                                    </form>

                                                    <br>
                                                    <br>
                                            </div>
                                        
                    
                                    </div>
                    
                                    {{-- End of Start of card Div  --}}

                            </div>
                        </div>
                    </div>



                    <!-- Call to action
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                    -->
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Your Website 2021</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('public/js/js/scripts.js')}}"></script>
        
    </body>
</html>
