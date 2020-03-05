<html>

<head>
  <!-- Import Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Import custom css -->
  <link rel="stylesheet" href="parentreg.css">
</head>

<body>

  <!-- Navugation bar -->
  <div class="d-flex flex-row mb-3">
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top py-3 bg-white txt-blue border ">
        <div class="container">
          <a href="#" class="navbar-brand text-uppercase font-weight-bold">DayCare </a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler navbar-toggler-right"><span class="navbar-toggler-icon"></span></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/home" class="nav-link text-uppercase font-weight-bold txt-blue">Home
                  <span class="sr-only">(current)</span></a></li>
              <li class="nav-item "><a href="#" class="nav-link text-uppercase font-weight-bold txt-blue">About</a></li>
              <li class="nav-item "><a href="#" class="nav-link text-uppercase font-weight-bold txt-blue">Gallery </a>
              </li>
              <li class="nav-item "><a href="/login" class="nav-link text-uppercase font-weight-bold txt-blue"><i class="fas fa-user-tie mx-2 "></i>   Nimal Perera</a>
              <!-- </li>
              <li class="nav-item "><a href="/signup"
                  class="nav-link text-uppercase font-weight-bold txt-blue">SignUp</a></li> -->
            </ul>
          </div>
        </div>
      </nav>

    </header>
  </div>


  
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="mt-5 border">
        <ul class="sidebar-nav">
          
            <li class="sidebar-brand mx-auto mt-3">
                <a href="#">
                  <i class="fas fa-user-tie mx-2 "></i>   Nimal Perera
                </a>
            </li>
            <hr>
            <li>
                <a href="#" >Student Registration</a>
            </li>
            <li>
                <a href="#">Meal Plan</a>
            </li>
            <li>
                <a href="#" class="active">Parent Registration</a>
            </li>
            <li>
                <a href="#">Teacher Registration</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container mt-5 ">
          <form>
            <p class="pt-5">Parent Registration</p>
            <hr>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">First Name </label>
                  <input type="text" class="form-control" id="firstname" placeholder="Enter First name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname"> Last Name </label>
                  <input type="text" class="form-control" id="lastname" placeholder="Enter Last name">
                </div>
              </div>
              
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter Email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address">Address </label>
                  <input type="text" class="form-control" id="address1" placeholder="Enter Address 1">
                </div>
              </div>
              
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mobileno">Mobile no </label>
                  <input type="text" class="form-control" id="mobileno" placeholder="Enter Mobile no">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nic">NIC </label>
                  <input type="text" class="form-control" id="nic" placeholder="Enter NIC">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">Password </label>
                  <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="repassword">Re-Enter Password </label>
                  <input type="password" class="form-control" id="repassword" placeholder="Re-Enter Password">
                </div>
              </div>
            </div>
              
            <div class="row">
              <button type="button" class="btn btn-primary btn-lg mt-5 mx-3">Submit</button>
            </div>
            
          </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
 <!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>



  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/75dbf31c78.js" crossorigin="anonymous"></script>


  <!-- Import JQurey in bootstrap -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <!-- import custom java script -->
  <script src="home.js" type="text/javascript"></script>

</body>

</html>