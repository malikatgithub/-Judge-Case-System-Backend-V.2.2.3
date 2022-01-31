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
                  <li class="breadcrumb-item"><a href="#"> Lawyer Page </a></li>
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
          



                            <div class="col-md-12 ">

                                {{-- Start of card Div  --}}

                                <div class="card border-top-0">
                                        <div class="card-header border-top1 font-weight-bold">
                                                <i class="fas fa-university"></i> &nbsp; Create new lawyer  
                                        </div>
                                            <br>
                                            <div class="container">
                                {{-- Start of form  --}}
                                            <form action="{{route('lawyer.store')}}" method="POST" enctype="multipart/form-data">
                                                {{@csrf_field()}}
                                                <div class="card flex-row flex-wrap">
                                                    
                                            

                                        
                                                    <div class="p-3 border-0 flex-column w-100" >                                    

                                                        
                                        {{-- teacher information Section --}}

                                        {{-- Row of teacher information --}}


                                                        <div class="row ">

                                                               
                                                                <div class="col-md-3 mb-4">
                                                                        <label for="validationDefault01"> Name <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="name">
                                                                </div>


                                                                <div class="col-md-3 mb-4">
                                                                        <label for="validationDefault01">phone<span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="phone">
                                                                </div>

                                                                <div class="col-md-3 mb-4">
                                                                        <label for="validationDefault01">address<span class="required">*</span> </label>
                                                                        <input type="address" class="form-control" id="validationDefault01" placeholder=""  required name="address">
                                                                </div>


                                                                <div class="col-md-3 mb-4">
                                                                        <label for="validationDefault01"> Email <span class="required">*</span> </label>
                                                                        <input type="email" class="form-control" id="validationDefault01" placeholder=""  required name="email" >
                                                                </div>



                                                                
                                                               
                                                                
                                                                
                                                                
                                                        </div>
                                                        


                                
                                                
                                                        
                                                    </div>
                                                </div>
                                                        
                                                        <center>
                                                            <button type="submit" class="btn btn-primary"> Save </button>
                                                        </center>
                                                    
                                                    </form>

                                                    <br>
                                                    <br>
                                            </div>
                                        
                                        
                    

                            </div>
                        </div>
                    </div>




                <div class="table-responsive mr-5 pt-0 pb-0 pr-5 pl-5">
                                           
                                           <table class="table table-striped table-bordered text-left text-black dir-ltr" >
                                           <br>
                                            <thead >
                                               <tr class="font-weight-bold">
                                                   <td>#</td>
                                                   <td> Name</td>
                                                   <td> Phone </td>
                                                   <td> Address </td>
                                                   <td> Email </td>
                                                   <td class="text-center"> <span class="text-danger"> delete </span> </td>
                                                 </tr>
                                            </thead>
                                             
                                            <tbody class="text-right tbody">

                                                

                                            

                              
                                            @if (count($lawyers) == 0)
                                                  
                                                  <tr>
                                                    <td colspan="10" class="text-center font-weight-bold text-danger" style="font-size:20px;">
                                                      Woops, There is no Lawyers :(
                                                    </td>
                                                  </tr>
                                                
                                                  @else

                                               @php $x=0; 
                                               
                                               @endphp
                                                @foreach ($lawyers as $item)
                                                @php $x++; @endphp
                                                   <tr>
                                                       <td>{{$x}}</td>
                                                       <td>{{$item->name}}</td>
                                                       <td>{{$item->phone}}</td>
                                                       <td>{{$item->address}}</td>
                                                       <td>{{$item->email}}</td>
                                                       <td class=" text-center ">
                                                       
                                                           
                                                             
                                                  
                                                           <form action="{{route('lawyer_delete', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                               {{@csrf_field()}}
                                                               <button type="submit" class="btn btn-md btn-danger"> Delete </button>
                                                               
                                                           </form>


                                                  
                                                       
                                                   </td>
                                                   </tr>
                                                @endforeach

                                                @endif
                                                
                              


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