<div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

      <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/index') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
<!-- home start -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="{{ route('logout') }}">
      <i class="bi bi-journal-text"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/homee') }}">
          <i class="bi bi-circle"></i><span>Add Home</span>
        </a>
      </li>
    </ul>
  </li> 
  <!-- home end   -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Product-nav" data-bs-toggle="collapse" href="{{ route('logout') }}">
      <i class="bi bi-journal-text"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Product-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/crud') }}">
          <i class="bi bi-circle"></i><span>Product</span>
        </a>
      </li>
    </ul>
  </li>   

  <!-- order detlis -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Customer-nav" data-bs-toggle="collapse" href="{{ route('logout') }}">
      <i class="bi bi-journal-text"></i><span>Customer Orders</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Customer-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/Customer') }}">
          <i class="bi bi-circle"></i><span>Customer Orders</span>
        </a>
      </li>
    </ul>
  </li>   
                <!-- End Product Nav -->

                 <!-- Start About Nav -->
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#about-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-lines-fill"></i><span>About</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="about-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/aboutt') }}">
          <i class="bi bi-circle"></i><span>Add About</span>
        </a>
      </li>
    </ul>
  </li>      
                    <!-- End About Nav -->

                    <!-- Start Team Nav -->
     <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-substack"></i><span>Team</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="team-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/Team') }}">
          <i class="bi bi-circle"></i><span>Add Team</span>
        </a>
      </li>
    </ul>
  </li>      
                    <!-- End Team Nav -->

                    <!-- Start service Nav -->
     <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#service-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-star-fill"></i><span>Service</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="service-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/service') }}">
          <i class="bi bi-circle"></i><span>Add service</span>
        </a>
      </li>
    </ul>
  </li>      
                     <!-- End service Nav -->

                        <!-- Start Chefs Nav -->
     <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-person-standing"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="blog-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/blogg') }}">
          <i class="bi bi-circle"></i><span>Add Blog</span>
        </a>
      </li>
    </ul>
  </li>      
                     <!-- End Chefs Nav -->

                      <!-- Start Footer Nav -->
     <!-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Footer-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-table"></i><span>Footer</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Footer-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/footerr') }}">
          <i class="bi bi-circle"></i><span>Footer</span>
        </a>
      </li>
    </ul>
  </li>       -->
                     <!-- End Footer Nav -->

  <!-- home -->

    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#modern-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-house-check-fill"></i><span>Modern</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="modern-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/modern') }}">
          <i class="bi bi-circle"></i><span>Add Modern</span>
        </a>
      </li>
    </ul>
  </li> 
  
  <!-- End home-->

  <!-- service -->
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#reveuse-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-life-preserver"></i><span>Reveuse</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="reveuse-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/reveuse') }}">
          <i class="bi bi-circle"></i><span>Add Reveuse</span>
          
        </a>
      </li>
    </ul>
  </li> 
  <!-- service -end -->

     <!-- menu start -->
    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#Contact-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-sliders"></i><span>Contact</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="Contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/Contact') }}">
          <i class="bi bi-circle"></i><span>Add Contact</span>
        </a>
  
      </li>
    </ul>
  </li> 
  <!-- service -end -->
<!-- about as -->
   <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#masge-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-file-earmark-person-fill"></i><span>customer masge</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="masge-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/customer_masge') }}">
          <i class="bi bi-circle"></i><span>customer masge</span>
          
        </a>
      </li>
    </ul>
  </li> 
  <!-- about as end -->


  {{-- <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/components-alerts') }}">
          <i class="bi bi-circle"></i><span>Alerts</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-accordion') }}">
          <i class="bi bi-circle"></i><span>Accordion</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-badges') }}">
          <i class="bi bi-circle"></i><span>Badges</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-breadcrumbs') }}">
          <i class="bi bi-circle"></i><span>Breadcrumbs</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-buttons') }}">
          <i class="bi bi-circle"></i><span>Buttons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-cards') }}">
          <i class="bi bi-circle"></i><span>Cards</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-carousel') }}">
          <i class="bi bi-circle"></i><span>Carousel</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-list-group') }}">
          <i class="bi bi-circle"></i><span>List group</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-modal') }}">
          <i class="bi bi-circle"></i><span>Modal</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-tabs') }}">
          <i class="bi bi-circle"></i><span>Tabs</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Pagination</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-progress') }}">
          <i class="bi bi-circle"></i><span>Progress</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-spinners') }}">
          <i class="bi bi-circle"></i><span>Spinners</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-tooltips') }}">
          <i class="bi bi-circle"></i><span>Tooltips</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Form Elements</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/forms-layouts') }}">
          <i class="bi bi-circle"></i><span>Form Layouts</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/components-pagination') }}">
          <i class="bi bi-circle"></i><span>Form Editors</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/forms-validation') }}">
          <i class="bi bi-circle"></i><span>Form Validation</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/tables-general') }}">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/tables-data') }}">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.php">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.php">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.php">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="{{route('logout')}}">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="{{ url('/icons-bootstrap') }}">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/icons-boxicons') }}">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="{{ url('/icons-remix') }}">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li><!-- End Icons Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/users-profile') }}">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-faq') }}">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-contact') }}">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-register') }}">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-login') }}">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ url('/pages-error-404') }}">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.php">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul> --}}

</aside><!-- End Sidebar-->
    
</body>
</html>
</div>
