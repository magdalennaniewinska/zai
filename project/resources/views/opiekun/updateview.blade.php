<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style type="text/css">
            .title
            {
                color:white;
                padding-top:25px; 
                font-size: 25px;
            }
            label
            {
                display: inline-block;
                width: 200px;
            }
        </style>
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
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Edytuj produkt</h1>
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" data-dismiss="alert"></button>
                    {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div style="padding:15px;">
                    <label>Nazwa</label>
                    <input style="color:black" type="text" name="name" value="{{$data->name}}">
                </div>
                <div style="padding:15px;">
                    <label>Tag</label>
                    <input style="color:black" type="text" name="tag" value="{{$data->tag}}">
                </div>
                <div style="padding:15px;">
                    <label>Model</label>
                    <input style="color:black" type="text" name="model" value="{{$data->model}}">
                </div>
                <div style="padding:15px;">
                    <label>Opis</label>
                    <input style="color:black" type="text" name="description" value="{{$data->description}}">
                </div>
                <div style="padding:15px;">
                    <label>Ilość</label>
                    <input style="color:black" type="text" name="quantity" value="{{$data->quantity}}">
                </div>
                <div style="padding:15px;">
                    <label>Link do strony producenta</label>
                    <input style="color:black" type="text" name="link" value="{{$data->link}}">
                </div>
                <div style="padding:15px;">
                    <label>Link do zdjęcia produktu</label>
                    <input style="color:black" type="text" name="image" value="{{$data->image}}">
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
