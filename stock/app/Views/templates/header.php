<!doctype html>
<?php 
      $uri = service('uri');
      ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="/assets/css/style.css">
     <script src="https://kit.fontawesome.com/1565c9f77e.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
 <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>


    <title>Stock Screener</title>
    <style>nav li
{
    margin:10px 25px;
    font-size: large;
}
#ucon {
     color:grey;
     font-size: 25px;
     border:1px solid black;
     padding: 6px;
     border-radius: 50%;
     background-color: white;
}

#bg{
    background-color: rgb(250, 250, 250);
}
#af {
    color:#007BFF;
    font-size: 25px;
    
    padding: 6px;
    border-radius: 50%;
    background-color: white;
}
.list-group-horizontal a{
    background:none;
    border:none;
    text-decoration: none;
    color:rgb(100,100,100);
    font-size: 20px;
}
.list-group-horizontal .active{
    background:white;
    border-bottom:#007BFF solid 4px;
    text-decoration: none;
    color:black;
    font-size: 20px;
}</style>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <!-- Navbar Starts-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item pt-1">
        <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><span class="fa fa-search"></span></div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
      </div>
        </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Watchlist  <span class="fa fa-angle-down"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/watchlist">My Watchlist</a>
       
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Screener <span class="fa fa-angle-down"></span>   
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/screener_saved">Saved Screener</a>
          <a class="dropdown-item" href="/screener_stock">Stock Screener</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/stock_ideas">Stock Ideas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/top_analysts">Top Analyst</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/pricing">Pricing</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <a href="#"><span class="fa fa-user" id="ucon"></span></a>
</div>
  </div>
</nav>
 <!-- Navbar Ends -->
