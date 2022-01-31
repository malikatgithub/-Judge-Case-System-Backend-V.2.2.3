<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left   navbar-expand-xs navbar-light bg-white" id="sidenav-main" style="direction:ltr">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center shadow-0 mb-0 mt-5 mr-4 p-0">
      <a class="navbar-brand" href="javascript:void(0)">
        <img src={{ asset("public/assets/img/brand/logo.webp") }} class="navbar-brand-img " alt="...">
      
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse " id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link bg-primary text-white rounded-lg font-weight-bold" href="#">
              <i class="fa fa-list"></i>
              &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Quick links</span>
            </a>
          </li>
          <span class="mr-3 mt-2" style="border-right:2px solid #f3f3f3;">

            <li class="nav-item">
              <a class="nav-link" href={{ url('/') }}>
                <i class="fa fa-balance-scale text-red"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Home Page</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ url('cases') }}>
                <i class="fa fa-university text-dark"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Cases</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{route('accepted')}}  onclick="show_menu1()" id='show1'>
                <i class="fa fa-calendar-check text-muted"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Accepted Cases </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ url('rejected') }}>
                <i class="fas fa-ban text-info"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Rejected Cases </span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href={{ url('adminreports') }}>
                <i class="fas fa-file-alt text-info"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Reports </span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href={{ url('judge') }}>
                <i class="fas fa-file text-info"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Judge Review </span>
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href={{ url('notified') }}>
                <i class="fas fa-file-alt text-warring"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">Notified cases</span>
              </a>
            </li>

            

            <li class="nav-item">
              <a class="nav-link" href={{ url('lawyers') }}>
                <i class="fas fa-users text-info"></i>
                &nbsp;&nbsp;&nbsp;<span class="nav-link-text">lawyers</span>
              </a>
            </li>
          
          

           
        </ul>
        <!-- Divider -->
       
      
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li>
            <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/wesam/judge/website" target="_blank">
              <i class="fa fa-globe"></i> &nbsp;&nbsp;&nbsp;  
              <span class="nav-link-text">Website Preview</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" aria-disabled="true">
              <i class="fa fa-file"></i> &nbsp;&nbsp;&nbsp;
              <span class="nav-link-text">Documents</span>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </div>
</nav>