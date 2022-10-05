<div class="container-fluid p-5" id="bg">
<div class="container row pt-3">
    <div class="col-7 col-sm-12 col-md-7">
        <p> Stock Screener </p>
        <h1 class="pt-3">
            Best Stock Screener (Free)
        </h1>
        <p class="lead pt-3">
        Use our free stock screener to find investing opportunities based on your personalized filters. Contact us with feature suggestions, bug reports, and questions.
        </p>
        <a href="/addf" class="btn btn-primary mt-5 btn-lg" ><span class="fa fa-plus mr-3" id="af"></span>Add Filters</a>
    </div>
    <div class="col-5 col-md-5 col-sm-12">
        <div class="row">
         <div class="row col-5 m-3 border bg-white p-0">
            <button class="btn bg-white  btn-lg col-8"><span class="fa fa-download mr-2"></span>SAVE</button>
            <button class="btn bg-white  btn-lg col-4" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-down"></span></button>
             
          </div>
         
         <div class="row col-5 m-3 border bg-white  p-0">
            <button class="btn bg-white  btn-lg col-12" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><span class="fa fa-share mr-2"></span>EXPORT</button>
            <!-- 3 Dots Verticle button-->
            <!-- <button class="btn bg-white  btn-lg col-4 border-left"><span class="fa fa-ellipsis-v ml-1"></span></button> -->
         </div>
        </div>
        <ul type="none" class="collapse bg-white border position-fixed" id="collapseExample">
              <li class="bg-white p-3"><a href="" class="bg-white">Save</a></li>
             </ul>
       
    </div>
</div>
        <div class="collapse container p-3" id="collapseExample1">
                <p class="w-75 p-1 rounded text-center" style="background-color:rgb(240,240,255);"><span class="fa fa-star " style="color:#6368C9;"></span>
                <span class="mr-1 font-weight-bold " style="color:#6368C9;">Upgrade To Premium</span>
              </p>
              <h4>Take Your Data Further</h4>
              <p class="pt-2 pb-1">Upgrade to Premium to export screeners and dive deeper into stocks that match your investment criteria
              </p><center>
              <a href="" class="text-decoration-none btn  p-3 rounded btn-lg mt-1 mb-1 font-weight-bold" style="background-color:#6368C9; color:white;">Try it for just $1</a>

              <p class="text-small text-secondary text-center">$1 for 14 Days , then $150/year</p>
              <a href="/pricing" class="text-center">See all premium plans here</a>
              </center>
        </div>
    <div class="mt-5">
    <?php 
      $uri = service('uri');
      ?>
    <ul class="nav list-group-horizontal flex-fill" style="overflow-x: auto">
  <li class="nav-item <?=($uri->getSegment(2)=='1'||$uri->getSegment(2)==''?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/1">Oveview</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='2'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/2">Zen Score</a>
</li>
  <li class="nav-item <?=($uri->getSegment(2)=='3'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/3">Price</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='4'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/4">Valuation</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='5'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/5">Financials</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='6'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/6">Forecast</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='7'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/7">Earning & Revenue</a>
  </li>
  <li class="nav-item <?=($uri->getSegment(2)=='8'?'active':null) ?>">
    <a class="nav-link" href="/screener_stock/8">Dividends</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=($uri->getSegment(2)=='9'?'active':null) ?>" href="/screener_stock/9">Ownership</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?=($uri->getSegment(2)=='10'?'active':null) ?>" href="/screener_stock/10">Technicals</a>
  </li>
  
</ul>
    </div>
</div>
<div class="container" style="overflow-x: auto">

    <table class="table table-bordered text-secondary text-start rounded w-75" id="mydatatable" cellspacing="0" style="width:auto; min-width:100%;">
      
        <thead>
            <tr>
            <th nowrap>Ticker</th>
            <th >Company</th>
             <?php if($uri->getSegment(2)=='1'||$uri->getSegment(2)==''): ?>
                <th nowrap>Exchange</th>
                <th nowrap>Industry</th>
                <th nowrap>Zen Score</th>
                <th nowrap>Market cap</th>
                <th nowrap>Price</th>
                <th nowrap>1D%</th>
                <th nowrap>EBITDA</th>
                <th nowrap>P/E</th>
                <th nowrap>D/E</th>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='2'): ?>
                <th nowrap width="115px">Zen Score</th>
                <th nowrap>Valuation Score</th>
                <th nowrap>Financial Score</th>
                <th nowrap>Forecast Score</th>
                <th nowrap>Performance Score</th>
                <th nowrap>Dividence Score</th>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='3'): ?>
                <th nowrap>price</th>
                <th nowrap>1d%</th>
                <th nowrap>1w%</th>
                <th nowrap>1m%</th>
                <th nowrap>3m%</th>
                <th nowrap>6m%</th>
                <th nowrap>1y%</th>
                <th nowrap>3y%</th>
                <th nowrap>5y%</th>
                <th nowrap>10y%</th>
                <th nowrap>52-week High</th>
                <th nowrap>52-week Low</th>
                <th nowrap>% off 52-week High</th>
                <th nowrap>% off 52-week Low</th>
                <th nowrap>Beta</th>
                <th nowrap>Volume</th>
                <th nowrap>Vol 1D%</th>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='4'): ?>
                <th nowrap>Price</th>
                <th nowrap>Valuation Score</th>
                <th nowrap>Graham Fair Value</th>
                <th nowrap>Graham Fair Value %</th>
                <th nowrap>P/E</th>
                <th nowrap>Forwarded P/E</th>
                <th nowrap>P/S</th>
                <th nowrap>P/B</th>
                <th nowrap>PEG</th>
                <th nowrap>Free Cash Flow</th>
                <th nowrap>Free Cash Flow Yeild</th>
                <th nowrap>Book Value</th>
                <th nowrap>BVPS</th>
                <th nowrap>EV</th>
                <th nowrap>EV/EBITDA</th>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='5'): ?>
                <th nowrap>Financial Score</th>
                <th nowrap>Market Cap</th>
                <th nowrap>ROE</th>
                <th nowrap>ROA</th>
                <th nowrap>ROCE</th>
                <th nowrap>ROIC</th>
                <th nowrap>D/E</th>
                <th nowrap>Current Ratio</th>
                <th nowrap>Cross Margin</th>
                <th nowrap>Profit Margin</th>
                <th nowrap>Operating Margin</th>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='6'): ?>
                <th nowrap>Forecast Score</th>
                <th nowrap>Market Cap</th>
                <th nowrap>Price</th>
                <th nowrap>Price Target</th>
                <th nowrap>Upside/Downside</th>
                <th nowrap>Consensus</th>
                <th nowrap>Analysts</th>
                <th nowrap>Fore Revenue Gro..</th>
                <th nowrap>Fore Earnings gro..</th>
                <th nowrap>Forecast ROE</th>
                <th nowrap>Forecasr ROA</th>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='7'): ?>
                <th nowrap>Performance Score</th>
                <th nowrap>Market Cap</th>
                <th nowrap>Revenue</th>
                <th nowrap>EBITDA</th>
                <th nowrap>Earnings</th>
                <th nowrap>EPS</th>
                <th nowrap>Revenue Growth Y/Y</th>
                <th nowrap>Revenue Growth 5Y</th>
                <th nowrap>Earnings Growth Y/Y</th>
                <th nowrap>Earnings Growth 5Y</th>
                <th nowrap>Earnings Date</th>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='8'): ?>
                <th nowrap>Dividends Score</th>
                <th nowrap>Market Cap</th>
                <th nowrap>Dividend Yeild</th>
                <th nowrap>Payout Ratio</th>
                <th nowrap>Last Dividend</th>
                <th nowrap>Annual Dividend</th>
                <th nowrap>Dividend Percentile</th>
                <th nowrap>Dividend Dropped ...</th>
                <th nowrap>Ex Dividend Date</th>
                <th nowrap>Div. Payment Date</th> 
            <?php endif ?>
            <?php if($uri->getSegment(2)=='9'): ?>
            <th nowrap>Country</th>
            <th nowrap>Market Cap</th>
            <th nowrap>Shares</th>
            <th nowrap>Institutional %</th>
            <th nowrap>Insider %</th>
            <th nowrap>Net Insider(L12M)</th>
            <th nowrap>Net Insider(L3M)</th>
           
            <?php endif ?>
            <?php if($uri->getSegment(2)=='10'): ?>
                <th nowrap>Price</th>
                <th nowrap>Volume</th>
                <th nowrap>Vol 1d%</th>
                <th nowrap>SMA 10</th>
                <th nowrap>SMA 20</th>
                <th nowrap>SMA 50</th>
                <th nowrap>SMA 100</th>
                <th nowrap>SMA 200</th>
                <th nowrap>RSI</th>
                <th nowrap>Stochastic %k</th>
                <th nowrap>Stochastic %D</th>
                <th nowrap>StochRSI %k</th>
                <th nowrap>StochRSI %D</th>
                <th nowrap>MACD</th>
                <th nowrap>MACD Signal</th>
                <th nowrap>MACD Histogram</th>
                <th nowrap>Beta</th>
            <?php endif ?>
        </thead>
        <tbody class="">
          <?php foreach($result as $row){ ?>
            <tr>
            <td nowrap><a href="screener_stock/<?=  $row['ticker']; ?>"><?=  $row['ticker']; ?></a></td>
            <td ><?=  $row['company']; ?></td>
             <?php if($uri->getSegment(2)=='1'||$uri->getSegment(2)==''): ?>
                <td nowrap><?=  $row['exchange']; ?></td>
                <td nowrap><?=  $row['industry']; ?></td>
                <td nowrap >
                  <div class="row p-0">
                    <div class="col-md-3 len m-0" id="<?=  $row['zenscore']; ?>" onclick="change_color_width(this.innerHTML,this.id)"><?=  $row['zenscore']; ?></div>
                    <div class="col-md-9 m-0">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['zenscore']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td nowrap><?=  $row['marketcap']; ?></td>
                <td nowrap><?=  $row['price']; ?></td>
                <td nowrap><?=  $row['D1']; ?></td>
                <td nowrap><?=  $row['EBITDA']; ?></td>
                <td nowrap><?=  $row['PE']; ?></td>
                <td nowrap>4.79</td> 
            <?php  endif; ?>
            <?php if($uri->getSegment(2)=='2'): ?>
                <td nowrap><div class="row">
                    <div class="col-md-3 len "   id="<?=  $row['zenscore']; ?>" onclick="change_color_width(this.innerHTML,this.id)"><?=  $row['zenscore']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['zenscore']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?=  $row['valuation_score']; ?>" onclick="change_color_width(this.innerHTML,'vs')"><?=  $row['valuation_score']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['valuation_score']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?=  $row['financials_score']; ?>1" onclick="change_color_width(this.innerHTML,'fis')"><?=  $row['financials_score']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['financials_score']; ?>" id="" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?=  $row['forecast_score']; ?>" onclick="change_color_width(this.innerHTML,'fos')"><?=  $row['forecast_score']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['forecast_score']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?=  $row['performance_score']; ?>" onclick="change_color_width(this.innerHTML,'ps')"><?=  $row['performance_score']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['performance_score']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?=  $row['dividence_score']; ?>" onclick="change_color_width(this.innerHTML,'ds')"><?=  $row['dividence_score']; ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?=  $row['dividence_score']; ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='3'): ?>
                <td nowrap class="len1 " id="<?=  $row['dividence_score']; ?>"><?=  $row['price']; ?></td>
                <td nowrap class="len1 " id="<?=  $row['D1']; ?>"><?=  $row['D1']; ?></td>
                <td nowrap class="len1 <?= $row['w1']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['w1']; ?>"><?=  $row['w1']; ?></td>
                <td nowrap class="len1  <?= $row['m1']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['m1']; ?>"><?=  $row['m1']; ?></td>
                <td nowrap class="len1  <?= $row['m3']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['m3']; ?>"><?=  $row['m3']; ?></td>
                <td nowrap class="len1  <?= $row['m6']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['m6']; ?>"><?=  $row['m6']; ?></td>
                <td nowrap class="len1  <?= $row['y1']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['y1']; ?>"><?=  $row['y1']; ?></td>
                <td nowrap class="len1  <?= $row['y3']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['y3']; ?>"><?=  $row['y3']; ?></td>
                <td nowrap class="len1  <?= $row['y5']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['y5']; ?>"><?=  $row['y5']; ?></td>
                <td nowrap class="len1  <?= $row['y10']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['y10']; ?>"><?=  $row['y10']; ?></td>
                
                <td nowrap class="len1  <?= $row['H52']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['H52']; ?>"><?=  $row['H52']; ?></td>
                <td nowrap class="len1  <?= $row['L52']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['L52']; ?>"><?=  $row['L52']; ?></td>
                <td nowrap class="len1  <?= $row['H52P']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['H52P']; ?>"><?=  $row['H52P']; ?></td>
                <td nowrap class="len1  <?= $row['L52P']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['L52P']; ?>"><?=  $row['L52P']; ?></td>
                <td nowrap class="len1  <?= $row['beta']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['beta']; ?>"><?=  $row['beta']; ?></td>
                <td nowrap class="len1 <?= $row['vol']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['vol']; ?>"><?=  $row['vol']; ?></td>
                <td nowrap class="len1 <?= $row['vol1d']<0?  'text-danger' :  'text-success';?>" id="<?=  $row['vol1d']; ?>"><?=  $row['vol1d']; ?></td>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='4'): ?>
                <td nowrap><?= $row['price'] ?></td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="<?= $row['valuation_score'] ?>" onclick="change_color_width(this.innerHTML,'<?= $row['valuation_score'] ?>')"><?= $row['valuation_score'] ?></div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="<?= $row['valuation_score'] ?>" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap><?= $row['gfv'] ?></td>
                <td nowrap <?= $row['gfvp']<0?  'text-danger' :  'text-success';?>><?= $row['gfvp'] ?></td>
                <td nowrap><?= $row['PE'] ?></td>
                <td nowrap><?= $row['fpe'] ?></td>
                <td nowrap><?= $row['ps'] ?></td>
                <td nowrap><?= $row['pb'] ?></td>
                <td nowrap><?= $row['peg'] ?></td>
                <td nowrap><?= $row['fcf'] ?></td>
                <td nowrap><?= $row['fcfy'] ?></td>
                <td nowrap><?= $row['bookvalue'] ?></td>
                <td nowrap><?= $row['bvps'] ?></td>
                <td nowrap><?= $row['ev'] ?></td>
                <td nowrap><?= $row['EBITDA'] ?></td>
            <?php endif ; } ?>
            <?php if($uri->getSegment(2)=='5'): ?>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="fins" onclick="change_color_width(this.innerHTML,'fins')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="fins" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap>$2.42T</td>
                <td nowrap>153.00%</td>
                <td nowrap>28.10%</td>
                <td nowrap>58.36%</td>
                <td nowrap>38.60%</td>
                <td nowrap>4.79</td>
                <td nowrap>0.87</td>
                <td nowrap>43.30%</td>
                <td nowrap>25.70%</td>
                <td nowrap>31.09%</td>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='6'): ?>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="fores" onclick="change_color_width(this.innerHTML,'fores')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="fores" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap>$2.42T</td>
                <td nowrap>$150.77</td>
                <td nowrap>$187.46</td>
                <td nowrap>24.33</td>
                <td nowrap>Strong Buy</td>
                <td nowrap>22</td>
                <td nowrap>3.08%</td>
                <td nowrap>3.23%</td>
                <td nowrap>190.83%</td>
                <td nowrap>32.97%</td>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='7'): ?>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="ps" onclick="change_color_width(this.innerHTML,'ps')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="ps" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap>$2.42T</td>
                <td nowrap>$387.54B</td>
                <td nowrap>$131.70B</td>
                <td nowrap>$99.63B</td>
                <td nowrap>$6.10</td>
                <td nowrap>11.63%</td>
                <td nowrap>11.64%</td>
                <td nowrap>17.99%</td>
                <td nowrap>22.46%</td>
                <td nowrap>2022-10-26</td>
            
            <?php endif ?>
            <?php if($uri->getSegment(2)=='8'): ?>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="ds" onclick="change_color_width(this.innerHTML,'ds')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="ds" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap>$2.42T</td>
                <td nowrap>0.60%</td>
                <td nowrap>14.60%</td>
                <td nowrap>$0.2300</td>
                <td nowrap>$0.90</td>
                <td nowrap>7%</td>
                <td nowrap>0</td>
                <td nowrap></td>
                <td nowrap></td> 
            <?php endif ?>
            <?php if($uri->getSegment(2)=='9'): ?>
            <td nowrap>United States</td>
            <td nowrap>$2.42T</td>
            <td nowrap>16,070,752,000</td>
            <td nowrap>57.26%</td>
            <td nowrap>0.11%</td>
            <td nowrap>Net Selling</td>
            <td nowrap>Net Selling</td>
           
            <?php endif ?>
            <?php if($uri->getSegment(2)=='10'): ?>
                <td nowrap>$150.77</td>
                <td nowrap>92,780,453</td>
                <td nowrap>-3.02%</td>
                <td nowrap>153.13</td>
                <td nowrap>155.41</td>
                <td nowrap>160.22</td>
                <td nowrap>151.98</td>
                <td nowrap>160.47</td>
                <td nowrap>40.66</td>
                <td nowrap>18.52</td>
                <td nowrap>27.17</td>
                <td nowrap>26.01</td>
                <td nowrap>35.90</td>
                <td nowrap>-2.60</td>
                <td nowrap>-2.08	</td>
                <td nowrap>-0.52</td>
                <td nowrap>1.21</td>
            <?php endif ?>
            </tbody>
    </table>
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-12 col-xs-12">
        <?= $pager->links() ?>
        </div>
      </div>
    </div>
</div>
<div class="container-fluid p-5">
  <div class="row">
       <div class="col-4 col-md-4 col-sm-12 col-xs-12 p-3">
              <h5 class="mb-3 mt-3 ul">How to Use a Stock Screener to Find Undervalued Stocks</h5>
              <ul>
                <li>
                  <p>What Is a Stock Screener?</p>
                </li>
                <li>
                  <p>Stock Screening Is Just the First Step</p>
                </li>
              </ul>
              <h5 class="mb-3 mt-3">How Warren Buffett Uses Numbers to Uncover Companies With a Long Term Competitive Advantage</h5>
              <ul>
                <li>
                  <p>Start Your Research With the Best Stock Screener of 2022</p>
                </li>
                
              </ul>
       </div>
       <div class="col-8 col-md-8 col-sm-12 col-xs-12 p-3">
              <h5 class="mb-3 mt-3 ">How to Use a Stock Screener to Find Undervalued Stocks</h5>
              <p>It's not easy finding quality companies to invest in at a fair price.</p>
              <p>With thousands of stocks just in the US market alone, thousands more globally, and hundreds of quantitative data points for each stock - there's no way for any individual to manually process all of that data. So how do you narrow down this vast universe of stocks to find companies that fit your investing criteria and strategy?</p>
              <p>Fortunately, screening for stocks is a lot easier when you use the best stock screening software. A good stock screener can help you quickly hone in on companies that meet your criteria and suit your investing strategy.</p>
              <p>We're building what we believe is the best stock screener for part-time investors looking for undervalued companies with strong underlying fundamentals.</p>

              <h5 class="mb-3 mt-3">What Is a Stock Screener? </h5>
              <p>Stock screeners (also known as stock scanners, or share screeners) are a database of stocks that let you apply
                 filters to view lists of stocks that meet your investing criteria.</p>
              <p>While the quality of stock screeners can vary greatly, the best stock screeners allow you to screen for stocks
                 based on pretty much any metric or quantitative criteria you care about.</p>
              <p>Stock screeners work best when you have a specific idea of the kinds of companies you are looking for e.g. 
                companies with low P/E ratio, high return on equity and low debt,<a href=""> consistent long-term dividends </a>, optimistic 
               <a href=""> stock forecast and predictions </a>,<a href=""> high earnings growth</a>, or technology companies with high growth that are approaching profitability.</p>
              <p> Even if you don't have a specific idea of the kinds of companies you are looking for, WallStreetZen's stock screener comes with pre-set filters that match a variety
                 of investing philosophies to get your research started (coming soon).</p>
              
                 <h5 class="mb-3 mt-3">Stock Screening Is Just the First Step</h5>
                 <p>Stock screeners are a first step in your research, but screeners for stocks can't 
                  do all the work for you.</p>
                 <p>Even the best stock screener apps only let you filter stocks based on the measurable, quantitative factors that affect
                   a stock's long-term value.</p>
                  <p>For example, our free stock screener app helps you narrow down the universe of stocks based on tangible 
                    variables such as market capitalization, revenue, earnings, profit margins, operating income, as well as
                     important financial ratios such as pric e-to-earnings ratio (P/E ratio), debt-to-equity ratio (D/E), return on equity (ROE), and many more important ratios.</p>
                  <p>However, qualitative factors like the quality of the company's product, the company's long term business strategy, 
                    customer satisfaction levels, pending lawsuits, labor issues, or disruptive technologies that could affect the company's
                     core business aren't something you can easily screen for 
                    in a stock screener - it's something you need to learn about as part of your overall research process.</p>
                  <p> While there are limits to what you can learn about companies just with the numbers, numbers can often give you 
                    hints to the qualitative nature of a company's business. Warren Buffett's unique value investing approach 
                    is a perfect example of how quantitative analysis can lead to insights about the nature of a company's business.</p>
                  

                    <h5 class="mb-3 mt-3">What Is a Stock Screener? </h5>
                    <p>
                    Quantitative analysis can help you understand the fundamental economics of a company's 
                    business. As Warren Buffett would say, "accounting is the language of business."
                    </p>
                    <p>
                    Warren Buffett's strategy has been to invest in companies with a long-term "durable" competitive advantage. 
                    He is looking for companies that have a unique "moat" over its competitors which leads to superior economics and returns 
                    over the long-term. In other words, Warren Buffett looks
                     for companies with a consistent product that leads to consistent profits.
                    </p>
                    <p>
                    Because Warren is looking for companies with a long-term advantage, there are certain quantitative rules that he
                     follows. For example, a company with a product that has a long-term durable advantage typically wouldn't have to 
                     constantly re-invest into their product. A company like Coca Cola (NYSE: KO), one of Warren's favorite stocks,
                      hasn't changed its core product in over a hundred years. As new colas and flavors of the month come and go, the 
                      power of the Coca Cola brand keeps the company on top.
                    </p>
              </div>
  </div>
</div>
            <script>
              
                    function change_color_width(inner,cname)
                    {
                        elements =document.getElementsByClassName(cname);
                        for (var i = 0; i < elements.length; i++) {
                          elements[i].style.width=inner+"%";
                          if(inner<40){
                          elements[i].style.backgroundColor="red";
                          elements[i].style.borderColor="red"
                        }
                          else  if(inner<70 && inner>=40){
                          elements[i].style.backgroundColor="orange";
                          elements[i].style.borderColor="orange"
                        }
                          if(inner<=100 && inner>=70){
                          elements[i].style.backgroundColor="green";
                          elements[i].style.borderColor="Green"
                        }
                      }
                    }
                   
                    window.onload = function() {
                     
                          
                                  table = new DataTable('#mydatatable', {
                                    paging: false,
                                    select:true,
                                    searching:true,
                                    ordering:true
    
                      });
                      ele=document.getElementsByClassName('len');
                          for (var i = 0; i < ele.length; i++) {
                          change_color_width(ele[i].innerHTML,ele[i].id);
                          doc=ele[i];
                          doc.onload=function(){
                            alert('hii');
                            
                          }
                                  } 
                                
                                
                                 
                      }

                   
            </script>
            <style>
              .ul{
                text-decoration: underline;
              }
              .table * {
                padding: 0;
                margin:0;
              }
              .table th,td{
                
                width: 150px !important;
              }
              #collapseExample1{
                width: 300px;
                position: absolute;
                justify-content: center;
                top: 50%;
                left: 50%;
                transform:translate(-50%,-50%);
                background-color: white;
                border-radius: 15px;
                
              }
              .pagination li{
                background-color: white;
                
               
              }
            </style>

