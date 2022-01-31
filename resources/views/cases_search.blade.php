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
                    <li class="breadcrumb-item"><a href="#"> Cases </a></li>
                  </ol>
                </nav>
              </div>
            
            </div>


            <div class="col-12">
                  <h3 class="card-title   mb-4  text-muted">
                    Search Cases by date
                  </h3>
                        <form action="{{route('cases_search')}}" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}

                        <input type="date" name="start_date" class="form-control d-inline-block  mb-3">
                        <input type="date" name="end_date" class="form-control d-inline-block mb-3">
                        <button type="submit" class="btn btn-md btn-danger"> <i class="fa fa-eye"></i> &nbsp; Show </button>
                        </form>
                      </div>




            <hr>


            <!-- Card stats -->
            <div class="row mt-5" >


          
                

                  <hr>
      



                  <div class="table-responsive mr-5 pt-0 pb-0 pr-5 pl-5">
                                                                            <table class="table table-striped table-bordered text-left text-black dir-ltr" >
                                            <br>
                                              <thead >
                                                <tr class="font-weight-bold">
                                                    <td> Case_id</td>
                                                    <td> date</td>
                                                    <td> Claimant</td>
                                                    <td> Defendant </td>
                                                    <td> Subject </td>
                                                    <td> National Number </td>
                                                    <td> Claimant phone </td>
                                                    <td> Claimant Address </td>
                                                    <td> Defendant phone </td>
                                                    <td> Case type </td>
                                                    <td class="text-center"> <span class="text-success"> Reject </span> / <span class="text-danger"> Accept </span> </td>
                                                  </tr>
                                              </thead>
                                              
                                              <tbody class="text-right tbody">

                                                  

                                              @if (count($cases) == 0)
                                                  
                                              <tr>
                                                <td colspan="10" class="text-center font-weight-bold text-danger" style="font-size:20px;">
                                                  Woops, There is no Cases :(
                                                </td>
                                              </tr>
                                            
                                              @else
                                                  
                                              @php $x=0; @endphp
                                                  @foreach ($cases as $item)
                                                  @php $x++; @endphp
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->created_at}}</td>
                                                        <td>{{$item->c_name}}</td>
                                                        <td>{{$item->d_name}}</td>
                                                        <td>{{$item->subject}}</td>
                                                        <td>{{$item->id_num}}</td>
                                                        <td>{{$item->phone}}</td>
                                                        <td>{{$item->c_address}}</td>
                                                        <td>{{$item->d_address}}</td>
                                                        <td>{{$item->case_type}}</td>
                                                        
                                                        <td class=" text-center ">
                                                        
                                                            
                                                              
                                                    
                                                            <form action="{{route('status.accept', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                                {{@csrf_field()}}
                                                                <button type="submit" class="btn btn-md btn-success"> Accept </button>
                                                                
                                                            </form>


                                                            <form action="{{route('status.reject', ['id' => $item->id ])}}" method="POST" enctype="multipart/form-data">
                                                                {{@csrf_field()}}
                                                                <br>
                                                                <button type="submit" class="btn btn-md btn-danger"> Reject </button>
                                                                
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