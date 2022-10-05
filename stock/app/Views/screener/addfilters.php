<style>
    nav{
        display: none !important;
    }
    .collapse{
        position:relative !important;
        top:0;
        z-index: 1;
    }
    .collapse form{
        max-height: 200px;
        overflow-y: auto;
    }
    .header{
        position: sticky;
        top:0;
        background-color:white;
        z-index:1;
    }
    .footer{
        z-index: 1;
    }
</style>
<div class="container-fluid header border-bottom text-center p-3">
 <div class="row no-gutter">
            <div class="col-4 col-md-4 col-xs-12 col-sm-12   border-secondary" >
                <a class="" href="/"><span style="color:slateblue">W A L L S T R E E T </span><span style="color:tomato"> Z E N  2022</span></a>
            </div>
            <div class="col-4 col-md-4 col-xs-12 col-sm-12" >
                <h3>Add Filters</h3>
            </div>
            <div class="col-4 col-md-4 col-xs-12 col-sm-12 " >
                <a href="/screener_stock" class="text-decoration-underline" style="font-weight:bold; font-size:20px;">Clear All</a>
            </div>
 </div>
</div>
<div class="container text-center w-50 p-3">
   <div class="container">
        <form>
        <div class="input-group mb-3 mt-2">
  <div class="input-group-prepend">
    <span class="input-group-text fa fa-search" id="basic-addon1"></span>
  </div>
  <input type="text" class="form-control" placeholder="Search Filters" aria-label="Username" aria-describedby="basic-addon1">
</div>
        </form>
    <div class="container p-3 text-left">
                <h3>Company</h3>
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h6>Ticker</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
</h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse2" >
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-search" id="basic-addon1"></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search Tickers" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                     <hr>
                     <div class="p-3 text-center">
                          <span class="fa fa-search m-2" style="font-size:300%;"></span>
                          <h4 class="">Search and Select in order to get started</h4>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Exchange</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
</h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse3" >
                      <div class="form p-4">
                        <form class="text-right">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">NASDAQ</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">NYSE</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">NYSEMKT</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">NYSEARCA</label>
                        </div>
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Sector</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse4" >
                      <div class="form p-4">
                        <form class="text-right">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Basic Materials</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Communication Services</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Consumer cyclical</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Consumer Defencive</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Energy</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Financial Services</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Healthcare</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Industrials</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Real Estate</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Technology</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label text-right" for="flexSwitchCheckDefault">Utilities</label>
                        </div>
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Industry</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse5" >
                      <div class="form p-4">
                        <form class="text-right">
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Country</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse5" >
                      <div class="form p-4">
                        <form class="text-right">
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Market CAP</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse5" >
                      <div class="form p-4">
                        <form class="text-right">
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Price</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse5" >
                      <div class="form p-4">
                        <form class="text-right">
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Volume</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    <div class="collapse position-relative border text-left bg-white" id="collapse5" >
                      <div class="form p-4">
                        <form class="text-right">
                        
                        </form>
                      </div>
                     <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-left">
                            <a href="#" class="m-2">Clear All</a>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                            <a href="#"  class="btn btn-primary m-2 text-white">Save</a>
                        </div>
                     </div>
                    </div>
                    </div>
                </div>
                <h3>Zen Score</h3>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>zen Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>valuation Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Forecast Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Performance Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Financials Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Dividence Score</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <h3>Zen Score: Valuation Checks</h3>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Below Fair Value</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Significantly Before Fair Value</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>Below Benjamin Graham Formula Value</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>P/E vs Market</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>P/E vs Industry</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>P/B vs Industry</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left bg-blue-100">
                        <h6>PEG Value</h6>
                    </div>
                    <div class="col-md-6 text-right">
                        <h6><a style="color:black;" class="text-black" data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapse2"> Choose <span class="fa fa-angle-down ml-2" style="color:black;"></span> </a>
                        </h6>
                    </div>
                </div>
    </div>
   </div>   
</div>
<div class="container-fluid  border-bottom border position-fixed footer p-2 bg-white footer" style="bottom:0;">
<center>
 <div class="row w-50 ">
           <div class="col-md-3 col-3 border m-1">
                <a href="/screener_stock" class="btn bg-white">Close </a>
           </div>
           <div class="col-md-8 col-8 bg-primary border m-1">
                <a href="/screener_stock" class="btn text-white w-100 m-0"> Show All Companies </a>
           </div>
 </div>
</center>
</div>