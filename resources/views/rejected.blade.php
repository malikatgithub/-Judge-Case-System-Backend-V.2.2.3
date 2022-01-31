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
                  <li class="breadcrumb-item"><a href="#"> Rejected Cases </a></li>
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
                            {{$reject->count()}}
                            </div>
                          </div>

                          <div class="col d-flex align-items-center border-right-1">
                            <h3 class="card-title   mb-0  text-muted">Rejected Case</h3>
                          </div>

                        </div>
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
                                                   <td>#</td>
                                                   <td> Claimant</td>
                                                   <td> Defendant </td>
                                                   <td> Subject </td>
                                                   <td> National Number </td>
                                                   <td> Claimant phone </td>
                                                   <td> Claimant Address </td>
                                                   <td> Defendant phone </td>
                                                   <td> Case type </td>
                                                   <td class="text-center"> <span class="text-danger"> Accept </span> </td>
                                                 </tr>
                                            </thead>
                                             
                                            <tbody class="text-right tbody">

                                                

                              
                                               @php $x=0; @endphp
                                                @foreach ($reject as $item)
                                                @php $x++; @endphp
                                                   <tr>
                                                       <td>{{$x}}</td>
                                                       <td>{{$item->c_name}}</td>
                                                       <td>{{$item->d_name}}</td>
                                                       <td>{{$item->subject}}</td>
                                                       <td>{{$item->id_num}}</td>
                                                       <td>{{$item->phone}}</td>
                                                       <td>{{$item->c_address}}</td>
                                                       <td>{{$item->d_address}}</td>
                                                       <td>{{$item->case_type}}</td>
                                                      
                                                       <td class=" text-center ">
                                                       
                                                           
                                                             
                                                  
                                                           <form action="{{route('rejectedrollback', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                               {{@csrf_field()}}
                                                               <button type="submit" class="btn btn-md btn-danger"> Accept </button>
                                                               
                                                           </form>


                                                  
                                                       
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
 
   
      <!-- Footer -->
      <footer class="footer pt-0 mt-5 p-3">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-right text-muted">
              &copy; 2021 <a href="https://www.privilege.sd" class="text-dark font-weight-bold" target="_blank" style="letter-spacing: 1px"> PRIVILEGE <i class="fab fa-product-hunt text-danger"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://privilege.sd" class="nav-link" target="_blank"> v.0.1.1</a>
              </li>
      
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  @endsection 