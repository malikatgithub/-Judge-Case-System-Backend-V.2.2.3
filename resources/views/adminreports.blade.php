@extends('layouts.css_main')

@section('body')

@include('layouts.right-menu')

@include('layouts.top-menu')



    <!-- Header -->
    <div class="header pb-6" style="direction: ltr; background:#f3f3f3 !important">
      <div class="container-fluid">
        <div class="header-body text-left">
          <div class="row align-items-center py-4" >
            <div class="col-12 float-left">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-list"></i></a></li>
                  <li class="breadcrumb-item font-weight-bold display-5"><a href="#"> Report Cases for today </a></li>
                </ol>
              </nav>
            </div>
           
          </div>


          
          <div class="row text-left">
            <div class="col-12">
            {{-- Start of card Div  --}}

              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{ session('status') }}
              </div>
              @endif


              @if (Session::has('delete'))

              <div class="alert alert-danger">
                  <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{Session::get('delete')}}
              </div>  

              {{Session::forget('delete')}}
              @endif

              @if (Session::has('success'))

              <div class="alert alert-success">
                  <i class="fas fa-check-square fa-1x"></i> &nbsp;  {{Session::get('success')}}
              </div>  

              {{Session::forget('success')}}
              @endif
            </div>   
          </div>


          <!-- Card stats -->
          <div class="row">
          
         
  

                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">

                          <div class="col-12 mb-3">
                          <h2>&nbsp; Accepted Cases </h2>
                          </div>

                         

                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                              {{$accept->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">

                                                                                    
                            <div class="row">

                              <div class="col-6">
                                <form action="{{route('accepted_report')}}" method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <input type="hidden" name="operation" value="show">
                                <button type="submit" class="btn btn-md btn-danger" name='show'> <i class="fa fa-eye"></i> Show </button>
                                </form>

                              </div>


                              <div class="col-6">
                                <form action="{{route('accepted_report')}}" method="POST" enctype="multipart/form-data">

                                  {{@csrf_field()}}
                                <input type="hidden" name="operation" value="print">

                                  <button type="submit" class="btn btn-md btn-info"> <i class="fa fa-print"></i> print &nbsp;</button>
                                </form>
                              </div>

                            </div>



                          </div>

                        </div>
                    </div>
                  </div>
                </div>



                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">

                          <div class="col-12 mb-3">
                          <h2>&nbsp; Rejected Cases</h2>
                          </div>

                         

                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              {{$rejected->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">

                                                                                    
                            <div class="row">

                              <div class="col-6">
                                <form action="{{route('reject_report')}}" method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <input type="hidden" name="operation" value="show">
                                <button type="submit" class="btn btn-md btn-danger" > <i class="fa fa-eye"></i> Show </button>
                                </form>

                              </div>


                              <div class="col-6">
                                <form action="{{route('reject_report')}}" method="POST" enctype="multipart/form-data">
                                  {{@csrf_field()}}
                                  <input type="hidden" name="operation" value="print">
                                  <button type="submit" class="btn btn-md btn-info"> <i class="fa fa-print"></i> print &nbsp;</button>
                                </form>
                              </div>

                            </div>



                          </div>

                        </div>
                    </div>
                    </div>


                </div>

                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">

                          <div class="col-12 mb-3">
                          <h2>&nbsp; Judge Accepted Cases</h2>
                          </div>

                         

                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              {{$approved->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">

                                                                                    
                            <div class="row">

                              <div class="col-6">
                                <form action="{{route('judge_report')}}" method="POST" enctype="multipart/form-data">
                                {{@csrf_field()}}
                                <button type="submit" class="btn btn-md btn-danger"> <i class="fa fa-eye"></i> Show </button>
                                </form>

                              </div>


                              <div class="col-6">
                                <form action="{{route('judge_report')}}" method="POST" enctype="multipart/form-data">
                                  {{@csrf_field()}}
                                  <button type="submit" class="btn btn-md btn-info"> <i class="fa fa-print"></i> print &nbsp;</button>
                                </form>
                              </div>

                            </div>



                          </div>

                        </div>
                    </div>

                </div>
                </div>


              
                

          </div>
     
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