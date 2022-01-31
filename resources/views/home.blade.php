

<?php 
$judge = Auth::user()->judge;
$str_judge = "$judge";
?>


@extends('layouts.css_main')

@section('body')


@if ($str_judge == NULL )

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
                  <li class="breadcrumb-item"><a href="#"> Cases </a></li>
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
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              {{ $reject->count() }}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center">
                            <h3 class="card-title   mb-0  text-muted">Rejected Case</h3>
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            {{ $accept->count() }}

                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">
                            <h3 class="card-title   mb-0  text-muted">Accepted Case</h3>
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>


               

                <hr>
    


                <div class="container-fluid">
        <div class="header-body text-left">
          <div class="row align-items-center  " >
            <div class="col-12 float-left">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-th-list"></i></a></li>
                  <li class="breadcrumb-item"><a href="#"> Total Cases </a></li>
                </ol>
              </nav>
            </div>
           
          </div>

          <!-- Card stats -->
          <div class="row">



          
          
             <div class="col-xl-6 col-md-6">
                  <div class="card card-stats ">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                              {{ $crime->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center">
                            <h3 class="card-title   mb-0  text-muted">Criminal Cases</h3>
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
                </div>


                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            {{ $civil->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center">
                            <h3 class="card-title   mb-0  text-muted">Civil Cases</h3>
                          </div>

                        </div>
                      </a>
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



@elseif($str_judge == "civil")



@include('layouts.top-menu')


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
          <div class="row mt-5">
          
             <div class="col-xl-12 col-md-12">
  

                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            {{$civil_accept->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">
                            <h3 class="card-title   mb-0  text-muted">Accepted Case Need to Confirm</h3>
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>


                  
                </div>

               


                  
                </div>
                </div>
                </div>


               

                <hr>
    



                <div class="table-responsive mr-5 pt-0 pb-0 pr-5 pl-5">
                                           
                                           <table class="table table-striped table-bordered text-left text-black dir-ltr" >
                                           <br>
                                            <thead >
                                               <tr class="font-weight-bold">
                                                   <td>Case_id</td>
                                                   <td width="10%"> Claimant</td>
                                                   <td width="10%"> Defendant </td>
                                                   <td width="30%"> Subject </td>
                                                   <td> Comment </td>
                                                   <td> Case Date </td>
                                                  
                                                   <td class="text-center"> <span class="text-danger"> Confirm </span> </td>
                                                 </tr>
                                            </thead>
                                             
                                            <tbody class=" tbody">

                                                
                                              @if(count($civil_accept) == 0)
                                              
                                              <td colspan=10 class="text-center text-danger"> <h1>No Cases</h1> </td>  
                                              
                                              @else
                                             
                              
                                               @php $x=0; @endphp
                                                @foreach ($civil_accept as $item)
                                                @php $x++; @endphp
                                                   <tr class="text-left">
                                                       <td>{{$item->id}}</td>
                                                       <td>{{$item->c_name}}</td>
                                                       <td>{{$item->d_name}}</td>
                                                       <td>{{$item->subject}}</td>
                                                       
                                                      
                                                       <form action="{{route('j_comment', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                        <td>
                                                            <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="j_comment" value="">
                                                        </td>

                                                        <td width="10%">
                                                            <input type="date" class="form-control" id="validationDefault01" placeholder=""  required name="case_date" value="">
                                                        </td>

                                                       <td class=" text-center ">
                                                            {{@csrf_field()}}
                                                            <button type="submit" class="btn btn-md btn-success"> <i class="fa fa-file-alt"></i> Approved </button>
                                                        </td>

                                                   </form>
                                                   </tr>
                                                @endforeach
                                                
                                                @endif


                                            </tbody>
                                     
                                           </table>
                                          </div>





                                          <div class="col-xl-6 col-md-6 mt-5">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                

                          <div class="col d-flex align-items-center border-right-1">

                          <form action="{{route('show_judge_case', ['id'])}}" method="POST" enctype="multipart/form-data">
                                
                              {{@csrf_field()}}
                              <input type="hidden" class="form-control" id="validationDefault01" placeholder=""  required name="judge_type" value="{{$str_judge}}">
                              <button type="submit" class="btn btn-md btn-success"> <i class="fa fa-eye"></i> Show Schedule</button>
                           
                          </form>

                          <form action="{{route('print_judge_case', ['id'])}}" method="POST" enctype="multipart/form-data">
                                
                              <input type="hidden" class="form-control" id="validationDefault01" placeholder=""  required name="judge_type" value="{{$str_judge}}">
                              {{@csrf_field()}}
                              <button type="submit" class="btn btn-md btn-primary ml-5"> <i class="fa fa-print"></i> Print Schedule</button>
                           
                          </form>

                           
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
          </div>
        </div>
      </div>



@else($str_judge == "crime")

@include('layouts.top-menu')




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
          <div class="row mt-5">
          
             <div class="col-xl-12 col-md-12">
  

                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            {{$crime_accept->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">
                            <h3 class="card-title   mb-0  text-muted"> Criminal accepted Case Need to Confirm</h3>
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>


               

                <hr>
    



                <div class="table-responsive mr-5 pt-0 pb-0 pr-5 pl-5">
                                           
                                           <table class="table table-striped table-bordered text-left text-black dir-ltr" >
                                           <br>
                                            <thead >
                                               <tr class="font-weight-bold">
                                                   <td>Case_id</td>
                                                   <td width="10%"> Claimant</td>
                                                   <td width="10%"> Defendant </td>
                                                   <td width="30%"> Subject </td>
                                                   <td> Comment </td>
                                                   <td> Case Date </td>
                                                  
                                                   <td class="text-center"> <span class="text-danger"> Confirm </span> </td>
                                                 </tr>
                                            </thead>
                                             
                                            <tbody class=" tbody">

                                                

                                            @if(count($civil_accept) == 0)
                                              
                                              <td colspan=10 class="text-center text-danger"> <h1>No Cases</h1> </td>  
                                              
                                              @else
                                               @php $x=0; @endphp
                                                @foreach ($crime_accept as $item)
                                                @php $x++; @endphp
                                                   <tr class="text-left">
                                                       <td>{{$item->id}}</td>
                                                       <td>{{$item->c_name}}</td>
                                                       <td>{{$item->d_name}}</td>
                                                       <td>{{$item->subject}}</td>
                                                       
                                                      
                                                       <form action="{{route('j_comment', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                        <td>
                                                            <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="j_comment" value="">
                                                        </td>

                                                        <td width="10%">
                                                            <input type="date" class="form-control" id="validationDefault01" placeholder=""  required name="case_date" value="">
                                                        </td>

                                                       <td class=" text-center ">
                                                            {{@csrf_field()}}
                                                            <button type="submit" class="btn btn-md btn-success"> <i class="fa fa-file-alt"></i> Approved </button>
                                                        </td>

                                                   </form>
                                                   </tr>
                                                @endforeach
                                                
                                              @endif


                                            </tbody>
                                     
                                           </table>
                                          </div>



                                          
                                          <div class="col-xl-6 col-md-6 mt-5">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                      <a href="">
                        <div class="row">
                        
                

                          <div class="col d-flex align-items-center border-right-1">

                          <form action="{{route('show_judge_case', ['id'])}}" method="POST" enctype="multipart/form-data">
                                
                              {{@csrf_field()}}
                              <input type="hidden" class="form-control" id="validationDefault01" placeholder=""  required name="judge_type" value="{{$str_judge}}">
                              <button type="submit" class="btn btn-md btn-success"> <i class="fa fa-eye"></i> Show Schedule</button>
                           
                          </form>

                          <form action="{{route('print_judge_case', ['id'])}}" method="POST" enctype="multipart/form-data">
                                
                              <input type="hidden" class="form-control" id="validationDefault01" placeholder=""  required name="judge_type" value="{{$str_judge}}">
                              {{@csrf_field()}}
                              <button type="submit" class="btn btn-md btn-primary ml-5"> <i class="fa fa-print"></i> Print Schedule</button>
                           
                          </form>

                           
                          </div>

                        </div>
                      </a>
                    </div>
                  </div>
          </div>
        </div>
      </div>








@endif



  @endsection 