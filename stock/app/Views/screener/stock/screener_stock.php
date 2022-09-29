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
        <button class="btn btn-primary mt-5 btn-lg" ><span class="fa fa-plus mr-3" id="af"></span>Add Filters</button>
    </div>
    <div class="col-5 col-md-5 col-sm-12">
        <div class="row">
         <div class="row col-5 m-3 border bg-white p-0">
            <button class="btn bg-white  btn-lg col-8"><span class="fa fa-download mr-2"></span>SAVE</button>
            <button class="btn bg-white  btn-lg col-4" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-angle-down"></span></button>
             
          </div>
         
         <div class="row col-5 m-3 border bg-white  p-0">
            <button class="btn bg-white  btn-lg col-12"><span class="fa fa-share mr-2"></span>EXPORT</button>
            <!-- 3 Dots Verticle button-->
            <!-- <button class="btn bg-white  btn-lg col-4 border-left"><span class="fa fa-ellipsis-v ml-1"></span></button> -->
         </div>
        </div>
        <ul type="none" class="collapse bg-white border position-fixed" id="collapseExample">
              <li class="bg-white p-3"><a href="" class="bg-white">Save</a></li>
             </ul>
    </div>
</div>
    <div class="mt-5">
    <?php 
      $uri = service('uri');
      ?>
    <ul class="nav list-group-horizontal flex-fill" style="overflow-x: auto">
  <li class="nav-item <?=($uri->getSegment(2)=='1'?'active':null) ?>">
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
    <table class="table  table-bordered text-secondary text-center rounded" id="mydatatable" cellspacing="0" style="width:auto; min-width:100%;">
      
        <thead>
            <tr>
            <th nowrap>Ticker</th>
            <th nowrap>Company</th>
             <?php if($uri->getSegment(2)=='1'): ?>
                <th nowrap>Exchange</th>
                <th nowrap>Industry</th>
                <th nowrap width="115px;">Zen Score</th>
                <th nowrap>Market cap</th>
                <th nowrap>Price</th>
                <th nowrap>1D%</th>
                <th nowrap>EBITDA</th>
                <th nowrap>P/E</th>
                <th nowrap>D/E</th>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='2'): ?>
                <th nowrap  width="115px;">Zen Score</th>
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
        <tbody>
            <tr>
            <td><a href="">AAPL</a></td>
            <td>AAPL INC</td>
             <?php if($uri->getSegment(2)=='1'): ?>
                <td>NASDAQ</td>
                <td>Consumer Electronics</td>
                <td>
                <div class="row">
                    <div class="col-md-3 len "   id="zs" onclick="change_color_width(this.innerHTML,this.id)">100</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="zs" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div>
                </td>
                <td>$2.42T	</td>
                <td>$150.77	</td>
                <td>0.23%	</td>
                <td>$131.70B	</td>
                <td>24.72x</td>
                <td>4.79</td>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='2'): ?>
                <td><div class="row">
                    <div class="col-md-3 len "   id="zs" onclick="change_color_width(this.innerHTML,this.id)">38</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="zs" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td><div class="row">
                    <div class="col-md-3 len" id="vs" onclick="change_color_width(this.innerHTML,'vs')">29</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="vs" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td><div class="row">
                    <div class="col-md-3 len" id="fis" onclick="change_color_width(this.innerHTML,'fis')">43</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="fis" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td><div class="row">
                    <div class="col-md-3 len" id="fos" onclick="change_color_width(this.innerHTML,'fos')">22</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="fos" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td><div class="row">
                    <div class="col-md-3 len" id="ps" onclick="change_color_width(this.innerHTML,'ps')">50</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="ps" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td><div class="row">
                    <div class="col-md-3 len" id="ds" onclick="change_color_width(this.innerHTML,'ds')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="ds" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='3'): ?>
                <td>$150.77	</td>
                <td>0.23%</td>
                <td>-2.40%	</td>
                <td>7.85%</td>
                <td>6.43%</td>
                <td>14.14%</td>
                <td>3.71%</td>
                <td>174.27%</td>
                <td>293.81%</td>
                <td>534.66%</td>
                
                <td nowrap>$182.94	</td>
                <td nowrap>$129.04	</td>
                <td nowrap>17.59%	</td>
                <td nowrap>16.84%	</td>
                <td nowrap>1.21</td>
                <td nowrap>92,780,453	</td>
                <td nowrap>-3.02%</td>
            <?php endif ?>
            <?php if($uri->getSegment(2)=='4'): ?>
                <td nowrap>$150.77</td>
                <td nowrap><div class="row">
                    <div class="col-md-3 len" id="vs" onclick="change_color_width(this.innerHTML,'vs')">60</div>
                    <div class="col-md-9">
                       <div class="mt-2" style="width:100%; height:10px; border:1px solid grey; border-radius:15%;">
                          <div class="vs" id="z2" style="height:100%;   border:1px solid orangered;"></div>
                      </div>
                    </div>
                  </div></td>
                <td nowrap>$128.96</td>
                <td nowrap>16.91%</td>
                <td nowrap>24.72x</td>
                <td nowrap>24.72x</td>
                <td nowrap>6.29x</td>
                <td nowrap>41.70x</td>
                <td nowrap>8.51x</td>
                <td nowrap>$107.58B</td>
                <td nowrap>4.41%</td>
                <td nowrap>$58.11B</td>
                <td nowrap>3.60</td>
                <td nowrap>$2.52T</td>
                <td nowrap>19.10</td>
            <?php endif ?>
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
                          ele=document.getElementsByClassName('len');
                          for (var i = 0; i < ele.length; i++) {
                                      // ele[i].style.backgroundColor="red";
                                      change_color_width(ele[i].innerHTML,ele[i].id);
                                  }
                      }
            </script>
            <style>
              .ul{
                text-decoration: underline;
              }
              table tbody td{
                width:100px!important;             }
            </style>

