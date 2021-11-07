<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="opiekun/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="opiekun/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="opiekun/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="opiekun/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="opiekun/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('opiekun.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('opiekun.navbar')
        <!-- partial -->
        <style type="text/css">
            .title
            {
                color:white;
                padding-top:100px; 
                font-size: 25px;
            }
            label
            {
                display: inline-block;
                width: 200px;
            }
        </style>
        <div class="container-fluid page-body-wrapper">
            <div class="container" >
                <h1 class="title">Dodaj produkt</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" data-dismiss="alert"></button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('uploadproduct')}}" method="post">
                    @csrf
                <div style="padding:15px;">
                    <label>Nazwa</label>
                    <input style="color:black" type="text" name="name" placeholder="podaj nazwe produktu">
                </div>
                <div style="padding:15px;">
                    <label>Tag</label>
                    <input style="color:black" type="text" name="tag" placeholder="podaj charakterystyczny tag">
                </div>
                <div style="padding:15px;">
                    <label>Model</label>
                    <input style="color:black" type="text" name="model" placeholder="podaj model produktu">
                </div>
                <div style="padding:15px;">
                    <label>Opis</label>
                    <input style="color:black" type="text" name="description" placeholder="podaj opis produktu">
                </div>
                <div style="padding:15px;">
                    <label>Ilość</label>
                    <input style="color:black" type="text" name="quantity" placeholder="podaj dostępną ilość">
                </div>
                <div style="padding:15px;">
                    <label>Link do strony producenta</label>
                    <input style="color:black" type="text" name="link" placeholder="podaj adres URL">
                </div>
                <div style="padding:15px;">
                    <label>Link do zdjęcia produktu</label>
                    <input style="color:black" type="text" name="image" placeholder="podaj adres URL grafiki">
                </div>
                <div style="padding:15px;">
                    <input class="btn btn-success" type="submit" name="">
                </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
