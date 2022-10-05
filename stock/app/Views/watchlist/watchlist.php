<div class="container-fluid pt-3 bg">
    <div class="container-fluid" id="g123">
        <div class="row">
            <div class="col-8 col-md-8 col-sm-12 col-xs-12 pt-3 pb-5 pl-5 border">
                <p class="m-4 text-secondary">Watchlists > Mywatchlist</p>
                <h1 class="m-4">My Watchlist</h1>
            </div>
            <div class="col-4 col-md-4 col-sm-12 col-xs-12 pt-3 pb-5 text-black">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-6 col-md-6 col-sm-12 col-xs-12 p-0">
                        <a href=""type="button" class=" btn bg-white" data-toggle="collapse" data-target="#editwatchlist"><span class="fa fa-pen mr-3"></span>Edit Watchlist</a>
                        <div class="position-absolute p-3 border collapse" id="editwatchlist" style="background-color:white;">
                            <a href="" style="text-decoration:none; padding-top:15px;">Edit Watchlist Name</a>
                            <a href="" style="text-decoration:none; padding-top:15px;">Remove Watchlist </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-sm-12 col-xs-12 p-0">
                        <a class="btn bg-white" onclick="newwatchlist()"><span class="fa fa-plus mr-3"></span>New Watchlist</a>
                    </div>
                    <div class="col-6 col-md-6 col-sm-12 col-xs-12 p-0 mt-3">
                        <!-- <a href="#"class="btn bg-white"><span class="fa fa-pen mr-3"></span>Edit Watchlist</a> -->
                    </div>
                    <div class="col-6 col-md-6 col-sm-12 col-xs-12 p-0 mt-3">
                        <span class="">Watchlist Email:<span id="onoff" style="color:blue;" onclick="onoff()">off</span></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-5">
    <div class="container">
        <div class="row">
            <div class="col-3 col-md-3 col-sm-6 col-xs-6 p-4">
                    <div class="row border">
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-secondary">
                         <p>1 Day</p>
                         <h2>N/A</h2>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-right">
                            <p style="font-size:50px;" class="text-secondary">-</p>
                        </div>
                    </div>
            </div>
            <div class="col-3 col-md-3 col-sm-6 col-xs-6 p-4">
                    <div class="row border">
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-secondary">
                         <p>1 Week</p>
                         <h2>N/A</h2>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-right">
                            <p style="font-size:50px;" class="text-secondary">-</p>
                        </div>
                    </div>
            </div>
            <div class="col-3 col-md-3 col-sm-6 col-xs-6 p-4">
                    <div class="row border">
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-secondary">
                         <p>1 Month</p>
                         <h2>N/A</h2>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-right">
                            <p style="font-size:50px;" class="text-secondary">-</p>
                        </div>
                    </div>
            </div>
            <div class="col-3 col-md-3 col-sm-6 col-xs-6 p-4">
                    <div class="row border">
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-secondary">
                         <p>1 Year</p>
                         <h2>N/A</h2>
                        </div>
                        <div class="col-md-6 col-6 col-sm-12 col-xs-12 text-right">
                            <p style="font-size:50px;" class="text-secondary">-</p>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="p-5">
            <div class="row">
                <div class="col-md-7 col-7 col-sm-12 col-xs-12  p-2">
                    <div class="row">
                        <div class="col-md-8 col-8 col-sm-12 col-xs-12">
                            <h2 class="">Watchlist Stocks</h2>
                            <a href="" class="btn border text-secondary mt-3"><span class="fa fa-external-link mr-2"></span>Compare Screener</a>
                        </div>
                        <div class="col-md-4 col-4 col-sm-12 col-xs-12 text-right ">
                            <input type="checkbox"id="check" class="mr-2 form-check-input" ><label>Full Width</label> </br>
                            <a href="" class="btn border text-secondary">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2.667 2a.667.667 0 100 1.333.667.667 0 000-1.333zm2 0v1.333H14V2H4.667zm-2 2.667a.667.667 0 100 1.333.667.667 0 000-1.333zm2 0V6h8V4.667h-8zm-2 2.666a.667.667 0 100 1.334.667.667 0 000-1.334zm2 0v1.334h6.666V7.333H4.667zm-2 2.667a.666.666 0 100 1.333.666.666 0 000-1.333zm2 0v1.333H10V10H4.667zm-2 2.667a.667.667 0 100 1.333.667.667 0 000-1.333zm2 0V14h4v-1.333h-4z" fill="#0A0E3B"></path>
                            </svg><span class="ml-2">Edit</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                                <!--SVG-->
                                
                                <svg class="mt-4" width="64" height="64" viewBox="0 0 64 64" fill="none">
                                    <path d="M39 48.004l3 3 8-6-3-3-8 6z" fill="#ECEDED"></path>
                                    <path d="M54.768 48.558l-8.751-9.863c-.719-.811-1.994-.92-2.846-.242l-2.485 1.973-4.124-4.993C39.898 32.326 42 27.912 42 23.003c0-9.373-7.626-17-17-17-9.374 0-17 7.627-17 17 0 9.375 7.626 17 17 17 3.749 0 7.206-1.233 10.02-3.296l4.098 4.962-2.365 1.877a1.958 1.958 0 00-.746 1.373 1.942 1.942 0 00.49 1.47l8.752 9.864c1.021 1.15 2.488 1.744 3.964 1.744a5.31 5.31 0 003.307-1.137l1.606-1.273c1.08-
                                    .857 1.739-2.067 1.855-3.406a4.785 4.785 0 00-1.213-3.623zM25 38.004c-8.271 0-15-6.728-15-15 0-8.271 6.729-15 15-15s15 6.729 15 15c0 8.27-6.729 15-15 15zm12.996 7.109l6.419-5.094c.028-.025.088-.017.104.003l1.319 1.486-6.475 5.138-1.367-1.533zm2.701 3.029l6.471-5.135 1.472 1.659-6.467 5.132-1.476-1.656zm12.186 5.879l-1.605 1.273c-1.361 1.079-3.393.915-4.532-.37l-3.239-3.631 6.463-5.128 3.302 3.722c.53.597.785 1.35.718 2.122-.069.784-.463 1.499-1.107 2.012z" fill="#CFD1D2"></path><path d="M25 10.004c-7.168 0-13 5.832-13 13s5.832 13 13 13 13-5.832 13-13-5.832-13-13-13zm0 24c-6.065 0-11-4.935-11-11s4.935-11 11-11 11 4.935 11 11-4.935 11-11 11z" fill="#ECEDED"></path><path d="M55.812 9.065L50.634 10.5a.864.864 0 00-.38 1.445l1.693 1.693L41.12 24.465a2.972 2.972 0 01-2.292.86 3.02 3.02 0 01-1.95-.86l-1.953-1.953-4.391-4.391a5.005 5.005 0 00-7.07 0l-8.75 8.75c.25.665.564 1.298.933 1.895l9.23-9.231a3.002 3.002 0 014.243 0l6.344 6.344c.644.644 1.496 1.089 2.379 1.3 1.633.39 3.42-.03 4.69-1.3l10.827-10.826 1.693 1.693a.864.864 0 001.445-.381l1.436-5.178c.359-1.292-.83-2.481-2.123-2.122z" fill="#CFD1D2"></path>
                                </svg>
                                    
                                 <!--SVG end -->
                                 <h4 class="text-center">No Stocks</h4>
                                 <p>You don't have any stocks added to your watchlist. Add some stocks and they will appear here.</p>
                                 <div class="row p-4">
                                 <div class="dropdown col-md-8 col-8 ">
                                    <input type="text" class="w-100" onclick="myFunction()"  value="Search"id="myInput" onkeyup="filterFunction()">
                                    <div id="myDropdown" class="dropdown-content">
                                          <?php 
                                            foreach($result as $row){
                                          ?>
                                          <a class="text-start"><?=$row['ticker'];?></a>
                                          <?php  } ?>
                                    </div>
                                    </div>                   
                     <input type="submit" class="btn bg col-3 col-md-3 col-sm-6 col-xs-6 ml-3" value="Add" name="sub">
                                 </div>
                    </div>
                </div>
                <div class="col-md-5 col-5 col-sm-12 col-xs-12 p-2 pl-3">
                        <h2>Watchlist Feed</h2>
                        <nav class="navbar navbar-expand-lg navbar-light bg-white">
                                <ul class="navbar-nav">
                                <li class="nav-item btn bg-white">
                                    <a class="nav-link wfne" id="wfhome" onclick="view(this.id,'wfhcontent')">News</a>
                                </li>
                                <li class="nav-item btn bg-white">
                                    <a class="nav-link wfne" id="wffeatures" onclick="view(this.id,'wffcontent')">Insiders & Analysts</a>
                                </li>
                                <li class="nav-item btn bg-white">
                                    <a class="nav-link wfne" id="wfpricing" onclick="view(this.id,'wfpcontent')">Events</a>
                                </li>
                                </ul> 
                        </nav>
                        <div id="wfc">
                            <div class="container-fluid ">
                               <h2 class="text-center display-3" style="margin-top:50%;"> <span class="fa fa-newspaper-o text-secondary text-center"></span> </h2>
                                <h5 class="text-center">No News</h5>
                                <p class="text-center">There is no news on the companies in your watchlist or you don't have enough companies added to your list.</p>
                            </div>
                        </div>
                        <div id="wfhcontent" class="wf">
                        <div class="container-fluid ">
                               <h2 class="text-center display-3" style="margin-top:50%;"> <span class="fa fa-newspaper-o text-secondary text-center"></span> </h2>
                                <h5 class="text-center">No News</h5>
                                <p class="text-center">There is no news on the companies in your watchlist or you don't have enough companies added to your list.</p>
                            </div>
                        </div>
                        <div id="wffcontent" class="wf">
                        <div class="container-fluid ">
                               <h2 class="text-center display-3" style="margin-top:50%;"> <span class="fa fa-bullhorn text-secondary text-center"></span> </h2>
                                <h5 class="text-center">No Alerts</h5>
                                <p class="text-center">There are no insider or analyst alerts for the companies in your watchlist.</p>
                            </div>
                        </div>
                        <div id="wfpcontent" class="wf">
                        <div class="container-fluid ">
                               <h2 class="text-center display-3" style="margin-top:50%;"> <span class="fa fa-calendar text-secondary text-center"></span> </h2>
                                <h5 class="text-center">No Events</h5>
                                <p class="text-center">There are no events for the companies in your watchlist or you don't have enough companies added to your list.</p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="container-fluid" id="g1234">
    <a href="" onclick="newwatchlist()"> <span class="fa fa-times close position-absolute end-0 top-0 m-2 p-3 bg-white rounded-circle text-danger" ></span></a>
            <div class="p-3 bg-white w-25 m-auto rounded" id="g12345" style="height:100%;">
                    <div>
                    <a href="" onclick="newwatchlist()"> <span class="fa fa-times p-2 bg-white border rounded-circle" text-left></span></a>
                        <span class="text-right " style="font-size:20px !important;">Create New Watchlist</span>
                    </div>
                    <hr>
                    <div>
                        <input type="text" class="form-control " style="background-color:rgba(0,0,0,0.1);font-weight:bold;" placeholder="Your List Name">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input btn-lg btn position-absolute" style="left:50px;" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                       <span class="text-end position-absolute start-50"> Daily Watchlist Email</span>
                    </div>
                    <div class=" mt-5 ">
                        <a href="" class="btn btn-primary w-100">Create</a>
                    </div>
            </div>
</div>
<style>
    .bg{
        background-color: rgb(230, 230, 230);
    }
    .text-black a{
        color:black;
    }
    nav ul li {
        margin:0;
        padding: 0;
    }
    nav ul li a{
        font-size: 20px;
        margin: 0;
        padding: 0;
    }
    .wf{
        display: none !important;
    }
    #wfhome{
        border-bottom: 3px solid black;
    }
    #g1234{
        width:98.6vw;
        height: 100vh;
        padding: 10%;
        background-color: rgba(0,0,0,0.8);
        position: absolute;
        top:0;
        z-index: 1;
        display: none;
    }
    body{
        
    }
    .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 94%;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<script>
    function onoff(){
            if(document.getElementById('onoff').innerHTML=="off"){
                document.getElementById('onoff').innerHTML="on";
            }else{
                document.getElementById('onoff').innerHTML="off";
            }
    }
    function newwatchlist(){
        if(document.getElementById('g1234').style.display=="block"){
            document.getElementById('g1234').style.display="none";
        }
        else{
            document.getElementById('g1234').style.display="block";
        }
    }
    function view(clicked,show){
        wfne=document.getElementsByClassName('wfne');
        for (var i = 0; i < wfne.length; i++) {
            wfne[i].style.border="none";
            document.getElementById('wfc').innerHTML=document.getElementById(show).innerHTML;
        }
        document.getElementById(clicked).style.borderBottom = "3px solid black";
        //alert(show);
    }
    function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>