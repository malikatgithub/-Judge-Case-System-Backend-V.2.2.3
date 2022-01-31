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
                  <li class="breadcrumb-item"><a href="#"> Judge Cases </a></li>
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
          
             <div class="col-xl-12 col-md-12">
  

                <div class="col-xl-6 col-md-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                        
                          <div class="col-auto d-flex align-items-center">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            {{$approved->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">
                            <h3 class="card-title   mb-0  text-muted">Approved Cases</h3>
                          </div>

                        </div>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>


               

                <hr>
    



                <div class="table-responsive mr-5 pt-0 pb-0 pr-5 pl-5 ">
                                           
                                           <table class="table table-striped table-bordered text-left text-black text-left" >
                                           <br>
                                            <thead >
                                               <tr class="font-weight-bold">
                                                   <td> Case_id</td>
                                                   <td> Claimant</td>
                                                   <td> Defendant </td>
                                                   <td> Case date </td>
                                                   <td> Subject </td>
                                                   <td> Judge Comment </td>
                                                   <td class="text-center"> <span class="text-danger"> Action </span> </td>
                                                 </tr>
                                            </thead>
                                             
                                            <tbody class="text-right tbody">

                                                

                              
                                               @php $x=0; @endphp
                                                @foreach ($approved as $item)
                                                @php $x++; @endphp
                                                   <tr class="text-left">
                                                       <td>{{$item->id}}</td>
                                                       <td>{{$item->c_name}}</td>
                                                       <td>{{$item->d_name}}</td>
                                                       <td>{{$item->case_date}}</td>
                                                       <td>{{$item->subject}}</td>
                                                       <td>{{$item->j_comment}}</td>
                                                       <td class=" text-center ">
                                                               
                                                            <form action="{{route('notify', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                               {{@csrf_field()}}
                                                               <button type="submit" class="btn btn-md btn-danger"> <i class="fa fa-envelope"></i> Notify </button>
                                                               
                                                           </form>

                                                           <br>


                                                           <!-- <form action="{{route('reports', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                               {{@csrf_field()}}
                                                               <button type="submit" class="btn btn-md btn-success"> <i class="fa fa-print"></i> print </button>
                                                               
                                                           </form> -->


                                                          



                                                           



                                                  
                                                       
                                                   </td>
                                                   </tr>
                                                @endforeach
                                                
                              


                                            </tbody>
                                     
                                           </table>
                                          </div>

                

          </div>
        </div>
      </div>
    </div>
 
   
    </div>
  </div>
  @endsection 