<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Sixteen Clothing HTML Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="/">
          <h2>Lab <em>Track</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('showallproduct')}}">Our Products</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
              @auth
            <li class="nav-item">
              <a class="nav-link" href="{{url('showcart')}}">Koszyk</a>
            </li>
            <x-app-layout>
            </x-app-layout>
            @else
            <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>

            @if (Route::has('register'))
            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @endif
            @endauth
            @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">

    </div>
  </div>
  <!-- Banner Ends Here -->
  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" data-dismiss="alert"></button>
    {{session()->get('message')}}
  </div>
  @endif

  <style>
    table,
    th,
    td {
      border: 2px solid black;
    }
  </style>
  <div class="container" align="center" style="padding:20px;">
  <table>
    <tr align="center" style="background-color: gray;" >
      <td style="padding:10px; font-size:20px">Nazwa Produktu</td>
      <td style="padding:10px; font-size:20px">Ilość</td>
      <td style="padding:10px; font-size:20px">Student</td>
      <td style="padding:10px; font-size:20px">Akcje</td>
    </tr>
    <form action="{{url('order')}}" method="post">
    @csrf
    @foreach($cart as $carts)
    <tr align="center">
      <td><input type="text" name="product_name[]" value="{{$carts->product_name}}" hidden="">{{$carts->product_name}}</td>
      <td><input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden="">{{$carts->quantity}}</td>
      <td><input type="text" name="student_name[]" value="{{$carts->student_name}}" hidden="">{{$carts->student_name}}</td>
      <td>
          <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Usuń</a>
          <a class="btn btn-primary" href="{{url('updatestudentcartview',$carts->id)}}">Wybierz studenta</a>
      </td>
    </tr>
    @endforeach
  </table>
  <br>
  <button class="btn btn-success">Potwierdz wypozyczenie</button>
  </form>
  </div>





  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

              - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>


</body>

</html>