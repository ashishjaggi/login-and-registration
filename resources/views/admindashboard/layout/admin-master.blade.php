<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! url('assets/vendors/mdi/css/materialdesignicons.min.css') !!}">


    <link rel="stylesheet" href="{!! url('assets/vendors/css/vendor.bundle.base.css') !!}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    <link rel="stylesheet" href="{!! url('assets/css/style.css') !!}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{!! url('assets/images/favicon.ico') !!}" />
  </head>
  <body>

  	  @include('admindashboard.layout.admin.navbar')

  	   @include('admindashboard.layout.admin.sidebar')

      <div class="main-panel">
        @yield('content')
    


      <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->


    <!-- plugins:js -->
    <script src=" {!! url('assets/vendors/js/vendor.bundle.base.js') !!}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src=" {!! url('assets/vendors/chart.js/Chart.min.js') !!}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" {!! url('assets/js/off-canvas.js') !!}"></script>
    <script src="{!! url('assets/js/hoverable-collapse.js') !!}"></script>
    <script src="{!! url('assets/js/misc.js') !!}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{!! url('assets/js/dashboard.js') !!}"></script>
    <script src="{!! url('assets/js/todolist.js') !!}"></script>
    <!-- End custom js for this page -->
  </body>
</html>