
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
        

        <style>
            
* {
	margin:0px;
	padding:0px;
}
*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing: border-box; }

.clearfix:before, .clearfix:after { display: table; content: ''; }
.clearfix:after { clear: both; }


body {
	background: #ffffff;
	color: #333;
	font-weight: normal;
	font-size: 1em;
	font-family: 'Roboto', Arial, sans-serif;
}

input:focus, textarea:focus, keygen:focus, select:focus {
	outline: none;
}
::-moz-placeholder {
	color: #666;
	font-weight: 300;
	opacity: 1;
}

::-webkit-input-placeholder {
	color: #666;
	font-weight: 300;
}


/* Contact Form Styling */

.textcenter {
	text-align: center;
}
.section1 {
	text-align: center;
	display: table;
	width: 100%;
}
.section1 .shtext {
	display: block;
	margin-top: 20px;
}
.section1 .seperator {
	border-bottom:1px solid #a2a2a2;
	width: 35px;
	display: inline-block;
	margin: 20px;
}

.section1 h1 {
	font-size: 40px;
	color: #A44DD8;
	font-weight: normal;
}

.section2 {
    width: 1200px;
    margin: 25px auto;
}
.section2 .col2 {
	width: 48.71%;
}
.section2 .col2.first {
	float: left;
}
.section2 .col2.last {
	float: right;
}
.section2 .col2.column2 {
	padding: 0 30px;
}
.section2 span.collig {
	color: #a2a2a2;
	margin-right: 10px;
	display: inline-block;
}
.section2 .sec2addr {
	display: block;
	line-height: 26px;
}
.section2 .sec2addr p:first-child {
	margin-bottom: 10px;
}
.section2 .sec2contactform input[type="text"], 
.section2 .sec2contactform input[type="email"],
.section2 .sec2contactform textarea {
    padding: 18px;
    border: 0;
    background: #EDEDED;
    margin: 7px 0;
}
.section2 .sec2contactform textarea {
	width: 100%;
	display: block;
	color: #666;
  resize:none;
}
.section2 .sec2contactform input[type="submit"] {
	padding: 15px 40px;
    color: #fff;
    border: 0;
    background: #A44DD8;
    font-size: 16px;
    text-transform: uppercase;
    margin: 7px 0;
    cursor: pointer;
}
.section2 .sec2contactform h3 {
	font-weight: normal;
    margin: 20px 0;
    margin-top: 30px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 19px;
    color: #A44DD8;
}

/* @media querries */

@media only screen and (max-width: 1266px) {
	.section2 {
		width: 100%;
	}
}
@media only screen and (max-width: 960px) {
	.container {
		padding: 0 30px 70px;
	}
	.section2 .col2 {
		width: 100%;
		display: block;
	}
	.section2 .col2.first {
		margin-bottom: 10px;
	}
	.section2 .col2.column2 {
		padding: 0;
	}
	body .sec2map {
		height: 250px !important;
	}
}
@media only screen and (max-width: 768px) {
	.section2 .sec2addr {
		font-size: 14px;
	}
	.section2 .sec2contactform h3 {
		font-size: 16px;
	}
	.section2 .sec2contactform input[type="text"], .section2 .sec2contactform input[type="email"], .section2 .sec2contactform textarea {
		padding: 10px;
		margin:3px 0;
	}
	.section2 .sec2contactform input[type="submit"] {
		padding: 10px 30px;
		font-size: 14px;
	}
}
@media only screen and (max-width: 420px) {
	.section1 h1 {
		font-size: 28px;
	}	
}
        </style>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html">MOJ E-portal</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item"><a class="nav-link" href={{ url('website') }}>Home</a></li>
                            <li class="nav-item"><a class="nav-link" href={{ url('lawyer') }}>Lawyer</a></li>
                            <li class="nav-item"><a class="nav-link" href={{ url('contact') }}>Contact</a></li>
                          
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <header class="bg-dark ">
                
                        <div class="" style=" background-image: url('{{ asset('public/assets/img/hero.jpg') }}');
                                                                    background-color: #fff; background-size: cover">

                            <div style='  background: rgba(0, 0, 0, 0.5);'>
                            <div class="row  align-items-center justify-content-center">
                                <div class="col-12 p-5">
                                    <div class="my-5 text-center text-xl-start p-5">
                                        <h1 class="display-5 fw-bolder text-white mb-2 text-left">Court Cases Management</h1>
                                        <p class="lead fw-normal text-white mb-4 text-left">Wellcome to electronic case management system where you can follow up your case.</p>
                                        
                                    </div>
                                </div>
                                <!-- <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="{{ asset('public/assets/img/hero.jpg') }}" alt="..." /></div> -->
                            </div>
                        </div>
                </div>
                
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">





           



                            <div class="container mt-5">

                            <div class="row justify-content-center">
                            <div class="col-md-12 ">

                                {{-- Start of card Div  --}}

                                <div class="card border-top-0">
                                        <div class="card-header border-top1 font-weight-bold text-primary">
                                                <i class="fas fa-file-alt"></i> &nbsp; Check your case status here
                                        </div>
                                            <br>
                                            <div class="container">
                                            {{-- Start of form  --}}
                                            <form action="{{route('case.search')}}" method="POST" enctype="multipart/form-data">
                                                {{@csrf_field()}}
                                                
                                                <div class="row">
                                                    <div class="col-md-10 mb-5">
                                                        <label for="validationDefault01">Enter your case number </label>
                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="id" value="">
                                                            
                                                    </div>

                                                    <div class="col-md-2 mt-2">
                                                        <br>
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-search"></i> Submit Case </button>
                                                    </div>
                                                </div>

                                            </form>

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



                        <div class="row justify-content-center">
                            <div class="col-md-12 ">

                                {{-- Start of card Div  --}}

                                <div class="card border-top-0">
                                        <div class="card-header border-top1 font-weight-bold">
                                                <i class="fas fa-university"></i> &nbsp; Create new case  
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
                                                                        <label for="validationDefault01">Claimant Name <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="c_name" value="">
                                                                </div>


                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Identity No. <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="id_num" value="">
                                                                </div>


                                                                
                                                                
                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Case Types <span class="required">*</span></label>
                                                                        <select class="custom-select" required name="case_type">
                                                                                <option value="civil">Civil</option>
                                                                                <option value="crime">Crime</option>
                                                                        </select>
                                                                </div>

                                                                
                                                                
                                                                
                                                        </div>
                                                        

                                                        <div class="row ">

                                                                 

                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Address <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="c_address" value="">
                                                                </div>


                                                                <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Claimant Phone</label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="" value=""  name="phone" required>
                                                                </div>

                                                    
                                                        </div>


                                                        <div class="row">

                                                    

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Name <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="d_name" value="">
                                                            </div>

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Address <span class="required">*</span> </label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder=""  required name="d_address" value="">
                                                            </div>

                                                            <div class="col-md-4 mb-4">
                                                                        <label for="validationDefault01">Defendant Phone</label>
                                                                        <input type="text" class="form-control" id="validationDefault01" placeholder="" value=""  name="d_phone" required>
                                                            </div>


                                                        </div>

                                                        
                                                        

                                                        <div class="row ">
                                                            <div class="col-md-12 mb-12">
                                                                    <div class="form-group">
                                                                            <label for="exampleFormControlTextarea1">Subject</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="" name="subject">...</textarea>
                                                                    </div>
                                                            </div>
                                                                
                                                        </div>

                                
                                                
                                                        
                                                    </div>
                                                </div>
                                                        
                                                        <center>
                                                            <button type="submit" class="btn btn-primary"> Submit Case </button>
                                                        </center>
                                                    
                                                    </form>

                                                    <br>
                                                    <br>
                                            </div>
                                        
                                        
                    
                    
                                    </div>
                    
                                    {{-- End of Start of card Div  --}}

                            </div>
                        </div>
                    </div>




                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">About misitry of justice sudan.</h2></div>

                        <div class="col-lg-8">
                            <div class="row col-12">
                            <img class="img-fluid rounded-3 mb-5" src="{{ asset('public/assets/img/logo.jpg') }}"  alt="..."  style="width:200px"/>
                              <h3>
                              The Ministry of Justice of Sudan was created in 1956 by Mohammed Ahmed Abu Ranat and Ahmed Metwally al-Atabani. In 1983, the ministry's responsibilities were clearly defined to include representing the state in legal affairs, reviewing and reforming laws that promote justice, and other functions
                              </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            </section>

            <div class="row">
            <div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
					<span class="shtext display-3">Contact Us</span>
					<span class="seperator"></span>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
                <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=El%20Gamhuriya%20Ave,%20Khartoum,%20Sudan+(Mistry%20of%20justice)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="http://www.gps.ie/">vehicle gps</a></iframe></div>				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p>El Gamhuriya Ave, Khartoum, Sudan</p>
							<p><span class="collig">Phone :</span>+249 18 376 4168</p>
							<p><span class="collig">Email :</span> Civil@moj.gov.sd</p>
							<p><span class="collig">Fax :</span> +91 9768850839</p>
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
						<form action="">
							<div class="clearfix">
								<input class="col2 first" type="text" placeholder="FirstName">
								<input class="col2 last" type="text" placeholder="LastName">
							</div>
							<div class="clearfix">
								<input  class="col2 first" type="Email" placeholder="Email">
								<input class="col2 last" type="text" placeholder="Contact Number">
							</div>
							<div class="clearfix">
								<textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
							</div>
							<div class="clearfix"><input type="submit" class="btn-primary" value="Send"></div>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>
            </div>
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
