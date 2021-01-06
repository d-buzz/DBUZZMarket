<!doctype html>
<html lang="en" class="h-100">
<head>
<title>DLUX - DEX</title>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/header.php";
   include_once($path);
?>
<!--page specific-->
<script src="/js/dex.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
</head>
<body class="d-flex flex-column h-100 text-white">
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/nav.php";
   include_once($path);
?>
<main role="main" class="flex-shrink-0">
<div class="container">
	<div class="alert alert-danger alert-dismissible">
  		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  		<a href="#" class="alert-link">The dlux DEX is under construction. Have a look around and let us know what you think.</a>
	</div>
  <div class="container-fluid" style="padding: 0">
	  <ul id="pagenav" class="nav nav-pills justify-content-center" role="tablist">
		  <li class="nav-item"><a class="nav-link" href="#info" id="infotab" role="tab" data-toggle="tab" aria-controls="info" aria-expanded="true">INFO</a></li>
	      <li class="nav-item"><a class="nav-link active" href="#trade" id="tradetab" role="tab" data-toggle="tab" aria-controls="trade" aria-expanded="true">TRADE</a></li>
		  <li class="nav-item"> <a class="nav-link" href="#ticker" role="tab" id="tickertab" data-toggle="tab" aria-controls="ticker">FEED</a></li>
		  <li class="nav-item"> <a class="nav-link" href="#ico" role="tab" id="icotab" data-toggle="tab" aria-controls="ico">ICO</a></li>
	  </ul>
	  <!-- Content Panel -->
	  <div id="pagecontent" class="tab-content">
		  <div role="tabpanel" class="tab-pane fade show" id="info" aria-labelledby="infotab">
               <div class="container my-5">	
				<div class="row">
					<div class="col-12 jumbotron bg-darker">
              			<h1 class="display-4">Goodbye Centralization, Hello DEX</h1>
                            <p class="lead ">The dlux DEX (Decentralized Exchange) offers no information asymetry or central control</p>
                            <hr class="my-4 bg-light">
						<p>DLUX has pioneered a method to cooperate via HIVE and provide liquidity while being decentralized in every sense of the word: Open source and self-incentivizing, holding it's own keys collectively between it's users.</p>
					</div>
						</div>
						
						<div class="row align-items-center pb-5">
							<div class="col-lg-6 order-lg-2">
								<img src="/img/dex1.jpeg" class="img-fluid rounded">
							</div>
							<div class="col-lg-6 order-lg-1">
						<p class="lead pt-3 text-uppercase">What to expect</p>
						<p>Trades are atomic swaps, meaning these are smart contracts holding crypto that you can buy for exactly the listed price. This exchange will over collateralize escrow transactions and pay for these transactions upon completion from an inflationary source.</p>
						<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Start Trading</a>
							</div>
							</div>
							
						</div>
						
						<div class="row align-items-center py-5">
							<div class="col-lg-6 order-lg-1"><img src="/img/dex2.jpeg" class="img-fluid rounded"></div>
							<div class="col-lg-6 order-lg-2">
								<p class="lead pt-3 text-uppercase">Preventing double spend</p>
				<p>The last irreversible block is used to verify transactions. That means your account may not be credited with Hive until 2-3 minutes from purchase time. Trust metrics will be maintained, fees and minimums may be enforced by some nodes depending on volume conditions. Choose which accounts you entrust with your escrow transactions.</p>
								<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Read FAQ</a>
							</div>
							</div></div>
						
							<div class="row align-items-center py-5">
								<div class="col-lg-6 order-lg-2"><img src="/img/dex3.jpeg" class="img-fluid rounded"></div>
								<div class="col-lg-6 order-lg-1">
									<p class="lead pt-3 text-uppercase">The DLUX node network</p>
				<p>Achieve consensus for more than just dlux token balances. Using nodes as oracles, concensus is maintained for any outside data as well. The most trusted nodes are elected to hold some owner authority over community controlled accounts, allowing them to provide services like Account Creation Tokens, or IPFS content pinning.</p>
				<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Run A Node</a>
							</div>
								</div>
								
								</div>
						
			    
                        </div>
                    </div>
		<div role="tabpanel" class="tab-pane fade show active" id="trade" aria-labelledby="tradetab">
			<div class="container-fluid px-0 py-4">
				<a id="pairmenustatus"class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DLUX:HIVE
    			<span class="sr-only">Toggle Dropdown</span>
  				</a>
  				<div class="dropdown-menu">
    				<a id="hivepairselect" class="dropdown-item">DLUX:HIVE</a>
    				<a id="hbdpairselect" class="dropdown-item">DLUX:HBD</a>
				</div>
				
	      <div class="row">
	    <div class="col-lg-8">
		<div class="price-info">
		<canvas id="historicPriceChart" height="250" class="price-chart"></canvas>
		<div class="d-flex justify-content-center">
		  <div class="btn-group btn-group-toggle set-timescale" data-toggle="buttons">
  				<label class="btn btn-primary active">
    				<input type="radio" name="options" id="hourBtn" autocomplete="off" checked> 1H
  				</label>
  				<label class="btn btn-primary">
    				<input type="radio" name="options" id="dayBtn" autocomplete="off"> 1D
  				</label>
  				<label class="btn btn-primary">
    			<input type="radio" name="options" id="weekBtn" autocomplete="off"> 1W
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="monthBtn" autocomplete="off"> 1M
  				</label>
			  	<label class="btn btn-primary">
    			<input type="radio" name="options" id="yearBtn" autocomplete="off"> 1Y
  				</label>
			</div>
			</div>
		<div class="d-flex justify-content-center">
			<div class="text-center market-info-item">
				<h3><span>$125.1K</span></h3>
				<div>
					<label>Market Cap</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>6M DLUX</span></h3>
				<div>
					<label>Supply</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>$1.3K</span></h3>
				<div>
					<label>Volume</label>
				</div>
			</div>
		  </div>
			<div id="jumbobal" class="balance"><h4>BAL: LOADING... DLUX</h4></div>
		  </div>
	
	<canvas id="marketOrdersChart" height="125" class="orderbook-chart"></canvas>
	<div class="container orderbook-table">
	  <div class="row text-center">
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">BUY ORDERS</h5>
		  <table width="100%">
  <tbody id="buyorderstable">
  </tbody>
</table>
		  </div>
		  <div class="col-lg-6">
			  <h5 style="padding-top: 10px">SELL ORDERS</h5>
		    <table width="100%">
  <tbody id="sellorderstable">
  </tbody>
</table>
		  </div>
		</div>
		  </div>
	    </div>
			  
	  <div class="col-lg-4">
		  <div>
			  <div class="widget">
			<ul id="orderwidget" class="nav nav-pills justify-content-center" role="tablist">
			  <li class="nav-item"> <a class="nav-link active" href="#" id="buyTab" role="tab" data-toggle="tab" aria-controls="buytab" aria-expanded="true" onClick="toggleListBtn()">Buy DLUX</a></li>
			  <li class="nav-item"> <a class="nav-link" href="#" role="tab" id="sellTab" data-toggle="tab" aria-controls="selltab" onClick="toggleListBtn()">Sell DLUX</a></li>
			</ul>
			  <!-- Order Form -->
		    <form>

	  <div class="form-group" id ="orderform">
	   <label for="buydluxfrom">Trader:</label>
		<div class="input-group">
			<div class="input-group-prepend">
      		  <div class="input-group-text">@</div>
    		</div>
        	<input class="form-control" id="senddluxfrom" type="text" readonly>
		  </div>
			 </div>
		  
		  <div class="form-group">
	   <label id="menudluxlab" for="buydluxquantity">This:</label>
		<div class="input-group">
			<input class="form-control" id="menudlux" type="number" step="0.001" min="0.001" placeholder="1.000">
			<div class="input-group-append">
      		  <div class="input-group-text">DLUX</div>
    		</div>
		  </div>
			 </div>
        <div class="form-group">
	   <label id="menupricelab" for="buydluxprice">Calculated Price (<a href="#" onClick="insertCalc(User.dex.markets[User.opts.type].tick, 'menuprice')">MP: 0.22 HIVE</a>):</label>
		<div class="input-group">
			<input class="form-control" id="menuprice" type="number" placeholder="1.000" readonly>
			<div class="input-group-append">
      		  <div class="input-group-text" id="menupairdiv">HIVE</div>
    		</div>
		  </div>
			 </div>
		  <div class="form-group">
	   <label id="menupairlab" for="buydluxtotal">For: (<a href="#" onClick="insertBal(parseFloat(User[User.opts.type].balance), 'menupair')">Balance: 486 HIVE</a>):</label>
		<div class="input-group">
			<input class="form-control" id="menupair" type="number" step="0.001" min="0.001" placeholder="1.000">
			<div class="input-group-append">
      		  <div class="input-group-text" id="paycoin">HIVE</div>
    		</div>
		  </div>
			 </div>
		 <p><a data-toggle="collapse" href="#buydluxadvanced" role="button" aria-expanded="false" aria-controls="collapseExample">Advanced Options<i class="fas fa-angle-double-down ml-2"></i></a></p>
	   <div class="collapse" id="buydluxadvanced">
	

 <div class="form-group">
	 <label for="custodialAgent">Custodial Agent:</label>
	 <div class="input-group">
	 	<div class="input-group-prepend">
      		  <label class="input-group-text">@</label>
    	</div>	
    	<button class="btn btn-light dropdown-toggle form-control text-left" type="button" id="custodialAgent" data-toggle="dropdown">Custodial Agent</button>
    	<ul class="dropdown-menu custodial-drop form-control agent-input-ul" id="custodialAgentUl">
      		<input class="form-control agent-input" id="custodialAgentSearch" type="text" placeholder="Search..">
      		<li><a href="#">disregardfiat - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">markegiles - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">dlux-io - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">heyhey - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">inconcievable - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">robotolux - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
		</ul>
	 	<div class="input-group-append">
			<button id="custodialAgentSort" type="button" class="btn btn-light append-radius" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sort-amount-down"></i></button>
			<div class="dropdown-menu dropdown-menu-right text-white">
    			<a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd mr-2"></i>Sort By Fee</a>
				<a class="dropdown-item" href="#"><i class="fas fa-award fa-fw mr-2"></i>Sort By Trust</a>
				<a class="dropdown-item" href="#"><i class="fas fa-fish fa-fw mr-2"></i>Sort By Liquidity</a>
    		</div>
  		</div>
	</div>
</div>
		
 <div class="form-group">
	 <label for="escrowAgent">Escrow Agent:</label>
	 <div class="input-group">
	 	<div class="input-group-prepend">
      		  <label class="input-group-text">@</label>
    	</div>	
    	<button class="btn btn-light dropdown-toggle form-control text-left" type="button" id="escrowAgent" data-toggle="dropdown">Escrow Agent</button>
    	<ul class="dropdown-menu escrow-drop form-control agent-input-ul mx-auto" id="escrowAgentUl">
      		<input class="form-control agent-input" id="escrowAgentSearch" type="text" placeholder="Search..">
      		<li><a href="#">disregardfiat - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">markegiles - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">dlux-io - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">heyhey - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">inconcievable - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
      		<li><a href="#">robotolux - Fee: .1DLUX - Trust: 99 - Liquid: 1000000000</a></li>
    	</ul>
	 	<div class="input-group-append">
			<button type="button" id="escrowAgentSort" class="btn btn-light append-radius" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sort-amount-down"></i></button>
			<div class="dropdown-menu dropdown-menu-right text-white">
    			<a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd mr-2"></i>Sort By Fee</a>
				<a class="dropdown-item" href="#"><i class="fas fa-award fa-fw mr-2"></i>Sort By Trust</a>
				<a class="dropdown-item" href="#"><i class="fas fa-fish fa-fw mr-2"></i>Sort By Liquidity</a>
    		</div>
  		</div>
	</div>
</div>
		   
<script>
$(document).ready(function(){
  $("#custodialAgentSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".custodial-drop li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
$(document).ready(function(){
  $("#escrowAgentSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".escrow-drop li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> 

<div class="form-group">
    <label for="escrowExpire">Expiration:</label>
    <select class="form-control" id="escrowExpire">
      <option value=1>1 hour</option>
      <option value=3>3 hours</option>
      <option value=6>6 hours</option>
      <option value=12>12 hours</option>
      <option value=24>1 day</option>
	  <option value=72>3 days</option>
	  <option value=120 selected>5 days</option>
    </select>
</div>
		  
      </div>
		<div class="text-center">
        <button id="listButton" type="button" class="btn btn-outline-success btn-75" onClick="dexsend(User.opts.type, User.opts.pair)">Buy</button>
				</div> 
		  </div>
	  </form>
			  
		 
		  </div>
  
	<div class="text-center pt-5">
		<h5>TRADE HISTORY</h5></div>
			  <div class="history">
			  
		    <table width="100%" class="history-table">
  <tbody id="tradeHist">
  </tbody>
</table>
	</div>
	</div>
			</div>
</div>
		  </div>
<div role="tabpanel" class="tab-pane fade" id="ticker" aria-labelledby="tickertab">
		<div class="container-fluid" style="padding:0">
		  <div class="col-lg-12 text-center" style="padding: 0">
			  <h5 style="padding-top: 40px">DLUX TRANSACTION FEED</h5>
			  <div id="dluxtxs" class="feed"></div>
		  </div>
		</div>
</div>
		  <div role="tabpanel" class="tab-pane fade show" id="ico" aria-labelledby="icotab">
               <div class="container my-5">	
				
				  <div class="col-12 jumbotron bg-darker">
              			<h1 class="display-4">DLUX Initial Coin Offering</h1>
                            <p class="lead ">Donate Hive to @robotolux to bid on the daily DLUX token auction.</p>
                            <hr class="my-4 bg-light">
					<p>Every 25 hours 100,000 DLUX Tokens are placed in a pool and priced according to the previous round. Donating funds to the @robotolux account automatically bids on those tokens for you, and at the end of the 25 hour period your tokens will be awarded.</p>
					  <div class="row py-4">
					<div class="col-lg-8 mx-auto">
					  <div class="alert alert-secondary text-center">
  						<span>Previous Round DLUX Valuation: <b>0.002 HIVE</b></span>
					  </div>
					  <h2 class="text-center">ROUND 567</h2>
						<hr class="bg-light">
					  <div class="d-flex justify-content-center">
			<div class="text-center market-info-item">
				<h3><span>13.2 HRS</span></h3>
				<div>
					<label>Time Remaining</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>45,000 DLUX</span></h3>
				<div>
					<label>Tokens Available</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>0.002 HIVE</span></h3>
				<div>
					<label>Current Price</label>
				</div>
			</div>
		  </div>
					  <hr class="bg-light">
					  <div class="row py-3">
					  <div class="mx-auto">
					<form>
					<div class="row align-items-center">
  					<div class="col-xs-4">
   					 <label for="hiveDonate" class="col-form-label"><h3>Donate:</h3></label>
 					 </div>
 						 <div class="col-xs-4 px-2">
   						 <input type="number" id="hiveDonate" class="form-control">
  						</div>
 					 <div class="col-xs-4 px-2">
 					   <button type="submit" class="btn btn-primary">Send</button>
  					</div>
						
					</div>
						<div>
							<center><small>Balance: <a href="#">12345 DLUX</a></small></center>
						</div>
				    </form>
						  </div>
						  </div>

					  <hr class="bg-light">
					  <div class="d-flex justify-content-center">
			<div class="text-center market-info-item">
				<h3><span>36 HIVE</span></h3>
				<div>
					<label>Donated</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>300 DLUX</span></h3>
				<div>
					<label>Pending Tokens</label>
				</div>
			</div>
			<div class="text-center market-info-item"><h1>|</h1></div>
			<div class="text-center market-info-item">
				<h3><span>0.002 HIVE</span></h3>
				<div>
					<label>Pending Value</label>
				</div>
			</div>
		  </div>
		<hr class="bg-light">
				
						</div>
				</div>	
					  <p class="lead ">Delegate Hive Power (HP) to @dlux-io and earn DLUX daily.</p>
                            <hr class="my-4 bg-light">
					<p>Some info about delegating.</p>
					  <div class="row py-3">
					  <div class="mx-auto">
					<form>
					<div class="row align-items-center">
  					<div class="col-xs-4">
   					 <label for="hiveDelegate" class="col-form-label"><h3>Delegate:</h3></label>
 					 </div>
 						 <div class="col-xs-4 px-2">
   						 <input type="number" id="hiveDelegate" class="form-control">
  						</div>
 					 <div class="col-xs-4 px-2">
 					   <button type="submit" class="btn btn-primary">Send</button>
  					</div>
					</div>
						<div>
							<center><small>Balance: <a href="#">12345 HP</a></small></center>
						</div>
				    </form>
						  </div>
						  </div>
                    </div>
			
						
						<div class="row align-items-center pb-5">
							<div class="col-lg-6 order-lg-2">
								<img src="/img/dex1.jpeg" class="img-fluid rounded">
							</div>
							<div class="col-lg-6 order-lg-1">
						<p class="lead pt-3 text-uppercase">What to expect</p>
						<p>Put some info here</p>
						<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Start Trading</a>
							</div>
							</div>
							
						</div>
						
						<div class="row align-items-center py-5">
							<div class="col-lg-6 order-lg-1"><img src="/img/dex2.jpeg" class="img-fluid rounded"></div>
							<div class="col-lg-6 order-lg-2">
								<p class="lead pt-3 text-uppercase">Preventing double spend</p>
				<p>Put some math here</p>
								<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Read FAQ</a>
							</div>
							</div></div>
						
							<div class="row align-items-center py-5">
								<div class="col-lg-6 order-lg-2"><img src="/img/dex3.jpeg" class="img-fluid rounded"></div>
								<div class="col-lg-6 order-lg-1">
									<p class="lead pt-3 text-uppercase">The DLUX node network</p>
				<p>Something else here</p>
				<div class="text-center">	
						<a class="btn btn-outline-light m-3" href="#">Run A Node</a>
							</div>
								</div>
								
								</div>
						
			    
                        </div>
                    </div>
	  </div>
</div>
	</div>
	</main>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/footer.php";
   include_once($path);
?>
	
<script>
// change list button color
function toggleListBtn(){
    $("#listButton").toggleClass("btn-outline-success btn-outline-danger");
  }
function pageSpecfic(user){dex(user)};
</script>
</body>
</html>
