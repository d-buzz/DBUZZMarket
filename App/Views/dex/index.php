<!doctype html>
<html lang="en" class="h-100">
<head>
<title>DLUX - DEX</title>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/header.php";
   include_once($path);
?>
<!--dmx App Connect-->
<script src="/dmxAppConnect/dmxAppConnect.js"></script>
<script src="/dmxAppConnect/dmxMoment.js"></script>
<script src="/dmxAppConnect/dmxFormatter.js"></script>
<script src="/dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js"></script>
<script src="/dmxAppConnect/dmxFormatter/dmxFormatter.js"></script>
	
<!--page specific-->
<script src="/js/dex.js"></script>
<script src="/js/ico.js"></script>

</head>
<body class="d-flex flex-column h-100 padme-t70 text-white" id="index" is="dmx-app">

<dmx-api-datasource id="dex" is="dmx-fetch" url="https://token.dlux.io/dex/"></dmx-api-datasource>
<dmx-data-view id="dexSellOrders" dmx-bind:data="dex.data.markets.hive.sellOrders" sorton="fee" sortdir="desc"></dmx-data-view>
	
<dmx-api-datasource id="sales" is="dmx-fetch" url="https://token.dlux.io/api/sales"></dmx-api-datasource>
<dmx-data-view id="salesToken" dmx-bind:data="sales.data.result" sorton="time" pagesize="4"></dmx-data-view>
<dmx-data-view id="salesMint" dmx-bind:data="sales.data.mint" sorton="price.amount" pagesize="3" ></dmx-data-view>
<dmx-api-datasource id="auctions" is="dmx-fetch" url="https://token.dlux.io/api/auctions"></dmx-api-datasource>
<dmx-data-view id="auctionsToken" dmx-bind:data="auctions.data.result" sorton="time" pagesize="4"></dmx-data-view>
<style>
.circle {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 25px;
  color: #fff;
  text-align: center;
  background: #000
}
	.circle2 {
  width: 75px;
  height: 75px;
  line-height: 75px;
  border-radius: 50%;
  font-size: 50px;
  color: crimson;
  text-align: center;
  background: #000;
		
}
	.arrow {
	position: absolute;
	background: #ffc107;
	border-radius: 50%;
	border: black thick solid;
	text-align: center;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 4rem;
    height: 4rem;
    z-index: 1;
	color: crimson;
	
	}
	.arrow2 {
		position: absolute;
		left: 50%;
    	transform: translate(-50%, -50%);
		z-index: 1;
	}
	</style>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/nav.php";
   include_once($path);
?>
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="container-fluid" style="padding: 0">
		
		
		<div class="d-none">
        
		<div dmx-repeat:repeat2="dexSellOrders.data">
			<a href="#" dmx-on:click="dexSellOrdersDetail.select($value.key)" dmx-bind:title="{{$value.key}}"> {{$index}} | {{$value.amount}} DLUX | {{$value.hive}} HIVE | {{$value.rate}} RATE | {{$value.fee}} FEE (2.5%) | {{$value.txid}} </a>
		</div>
			
        <dmx-data-detail id="dexSellOrdersDetail" dmx-bind:data="dexSellOrders.data" key="key" >
		  <h3>{{dexSellOrdersDetail.data.$value.amount}} DLUX | {{dexSellOrdersDetail.data.$value.hive}} HIVE | {{dexSellOrdersDetail.data.$value.rate}} RATE | {{dexSellOrdersDetail.data.$value.fee}} FEE (2.5%) | {{dexSellOrdersDetail.data.$value.txid}} </h3>
        </dmx-data-detail>

	  </div>
		
	  <div class="d-none">
		<div id="dexSellOrdersTable">
      	<div dmx-repeat:repeatdexsellordersview="dexSellOrders.data">
		  <a href="#" dmx-on:click="iteratedluxsellorders.select($index);dexSellOrdersDetail.select($value.txid)" dmx-bind:title="{{$value.txid}}">
			  {{$index}} | {{amount}} DLUX | {{$value.hive}} HIVE | {{$value.rate}} RATE | {{$value.fee}} FEE (2.5%) | {{$value.txid}}
		  </a>
		</div>
		</div>
			
		<dmx-data-detail id="dexSellOrdersDetail" dmx-bind:data="dexSellOrders.data" key="txid">
		  <h3>{{dexSellOrdersDetail.data.txid}}{{dexSellOrders.data.amount}}{{amount}}{{value}} | {{dexSellOrders.data.amount}} DLUX | {{$value.hive}} HIVE | {{data.rate}} RATE | {{value.fee}} FEE (2.5%)</h3>
        </dmx-data-detail>
		
		<div id="dexSellOrdersIterate" class="d-flex justify-content-between align-items-center">
			<a href="#" dmx-on:click="iteratedluxsellorders.prev()">&larr; Prev</a>
			<dmx-data-iterator id="iteratedluxsellorders" dmx-bind:data="dexSellOrders.data" loop="true"><h3>{{index}}</h3></dmx-data-iterator>
			<a href="#" dmx-on:click="iteratedluxsellorders.next()">Next &rarr;</a>
		</div>
	  </div>
		
      <div class="jumbotron text-white mt-5 pb-1 text-center" style="background: linear-gradient(217deg, rgba(251,0,255,.8), rgba(251,0,255,0) 70.71%),
            														  linear-gradient(127deg, rgba(33,255,181,.8), rgba(33,255,181,0) 70.71%),
            														  linear-gradient(336deg, rgba(3,62,253,.8), rgba(3,62,253,0) 70.71%);">
        <h1 class="display-4">DLUX Token</h1>
        <hr class="my-4" style="border: white 0.5px solid">
        <p class="lead">100% Decentralized Atomic Swap Marketplace</p>
        <p class="lead"> <a class="btn btn-outline-light btn-lg" href="/dex/dlux/" role="button">Order Book</a></p>
        <div class="d-flex">
          <p class="ml-auto mb-2">Balance<u class="ml-2 font-weight-bold" style="font-size:1.1em;">1,234.567 DLUX</u></p>
        </div>
      </div>
		<div class="my-4" style="border-bottom: #FFFFFF thick solid">
        <h1 class="text-white p-0 m-0">Fungible Coins</h1>
      </div>
		<div class="card-deck mb-2">
		  <div class="card" style="color:black;background:linear-gradient(orange,yellow)">
			<div class="d-flex m-2">
			  <div>DLUX</div>
			  <div class="ml-auto">0.54372&#37;</div>
			</div>
			<h4 class="text-center">&#36;0.2513</h4>
		  </div>
			
		<div class="card" style="color:black;background:linear-gradient(red,orangered)">
			<div class="d-flex m-2">
			  <div>HIVE</div>
			  <div class="ml-auto">0.54372&#37;</div>
			</div>
			<h4 class="text-center">&#36;1.05</h4>
		  </div>
		
		<div class="card" style="color:black;background:linear-gradient(lawngreen,greenyellow)">
			<div class="d-flex m-2">
			  <div>HBD</div>
			  <div class="ml-auto" dmx-class="">0.65898&#37;</div>
			</div>
			<h4 class="text-center">&#36;0.97089</h4>
		  </div>
		</div>
		
      <div class="mt-4" style="border-bottom: #FFFFFF thick solid">
        <h1 class="text-white p-0 m-0">Sealed NFTs</h1>
      </div>
      <div class="card-columns my-3" id="sales-mint-cards" >
        <div dmx-repeat:repeatsalesmint1="salesMint.data">
          <div class="card d-none" style="color:black; background:radial-gradient(yellow,darkorange)"> <a href="#buyDluxModal" class="a-1" data-toggle="modal">
            <div class="card-header text-center" style="color: black;background:linear-gradient(darkorange,yellow)">
              <h5 class="card-title lead">COIN</h5>
            </div>
            <div class="card-img-top" alt="dlux-coin">
              <h1 class="py-3 mb-0 text-center text-primary"><i class="fas fa-coins"></i></h1>
              <h3 class="text-center mb-0" style="color:  black;">DLUX Token</h3>
              <p class="card-text lead text-center pt-1" style="color: black">Powering the multiverse!</p>
            </div>
            <div class="card-body" style="color: black;">
              <div class="text-center"><u>0.254 HIVE</u></div>
            </div>
            <div class="card-footer text-center">
              <p class="lead">
                <button class="btn btn-primary btn-lg" href="#" role="button">Get DLUX</button>
              </p>
            </div>
          </a></div>
          <div class="card text-white bg-dark" style="color:black; background:radial-gradient(lawngreen,#43C45F)" dmx-repeat:repeatsalesmint2="$value"> <a href="#inventoryModal" class="a-1" data-toggle="modal" dmx-on:click="inventory_iterator.select($index);inventory_detail.select(uid)">
            <div class="card-header text-center" style="background: linear-gradient(#43C45F,lawngreen)">
              <h5 class="card-title lead" style="color: black">MINT</h5>
            </div>
            <div class="card-img-top" dmx-bind:id="image-{{set}}" dmx-bind:alt="image-{{set}}">
              <h1 class="py-3 mb-0 text-center text-primary" style="color: #43C45F"><i class="far fa-gem"></i></h1>
              <h3 class="text-center mb-0" style="color: black;">{{set}} NFT</h3>
              <p class="lead card-text text-center pt-1" style="color: black">Unwrap to see attributes.</p>
            </div>
            <div class="card-body" style="color: black;">
              <div class="text-center"><u>{{items[0].price.nai()}}</u></div>
            </div>
            </a>
            <div class="card-footer text-center">
              <p class="lead"> <a class="btn btn-primary btn-lg" href="/dex/dlux/" role="button">Buy NFT</a></p>
            </div>
          </div>
        </div>
      </div>
      <div style="border-bottom: #FFFFFF thick solid">
        <h1 class="text-white p-0 m-0">NFT Auctions</h1>
      </div>
      <div class="card-columns my-3" id="auctions-token-cards">
        <div class="card text-white bg-dark" dmx-repeat:repeatauctiontoken1="auctionsToken.data"> <a href="#inventoryModal" class="a-1" data-toggle="modal" dmx-on:click="inventory_iterator.select($index);inventory_detail.select(uid)">
          <div class="card-header d-flex" style="color:;background: linear-gradient(dodgerblue,cornflowerblue)">
            <div class="circle">{{uid}}</div>
            <h3 class="card-title lead border rounded p-2 ml-auto">{{set}} NFT</h3>
          </div>
          <div class="card-img-top p-1" dmx-bind:id="image-{{set}}-{{uid}}" dmx-bind:alt="image-{{set}}-{{uid}}">{{uid.nftImageWell(script, set)}}</div>
          <div class="text-center " style="background: crimson">
            <h5 dmx-bind:id="timer-{{set}}-{{uid}}" class="mb-0 lead">{{time.animateTime(set, uid)}}</h5>
          </div>
          <div class="card-body">
            <p class="card-text text-center">Auction: <u>{{price.nai()}}</u></p>
          </div>
          </a>
          <div class="card-footer text-center">
            <p class="lead"><a href="#inventoryModal" class="a-1" data-toggle="modal" dmx-on:click="inventory_iterator.select($index);inventory_detail.select(uid)"> </a><a class="btn btn-primary btn-lg" href="#" role="button">Bid NFT</a></p>
          </div>
        </div>
      </div>
      <div style="border-bottom: #FFFFFF thick solid">
        <h1 class="text-white p-0 m-0">NFT Sales</h1>
      </div>
      <div class="card-columns my-3" id="sales-token-cards">
        <div class="card text-white bg-dark" dmx-repeat:repeatsalestoken1="salesToken.data"> <a href="#inventoryModal" class="a-1" data-toggle="modal" dmx-on:click="inventory_iterator.select($index);inventory_detail.select(uid)">
          <div class="card-header d-flex" style="background: linear-gradient(blueviolet,darkorchid)">
            <div class="circle">{{uid}}</div>
            <h3 class="card-title lead border rounded p-2 ml-auto">{{set}} NFT</h3>
          </div>
          <div class="card-img-top" dmx-bind:id="image-{{set}}-{{uid}}" dmx-bind:alt="image-{{set}}-{{uid}}">{{uid.nftImageWell(script, set)}}</div>
          <div class="text-center " style="background: crimson">
            <h5 dmx-bind:id="timer-{{set}}-{{uid}}" class="mb-0 lead">{{time.animateTime(set, uid)}}</h5>
          </div>
          <div class="card-body">
            <p class="card-text text-center">Price: <u>{{price.nai()}}</u></p>
          </div>
          </a>
          <div class="card-footer text-center">
            <p class="lead"><a href="#inventoryModal" class="a-1" data-toggle="modal" dmx-on:click="inventory_iterator.select($index);inventory_detail.select(uid)"> </a><a class="btn btn-primary btn-lg" href="#" role="button">Buy NFT</a></p>
          </div>
        </div>
      </div>
      <!--<div class="modal fade" id="buyDluxModal" tabindex="-1" role="dialog" aria-labelledby="buyDluxModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" id="buy-modal">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header d-flex flex-fill justify-content-between" style="border-bottom-color: #333; background:radial-gradient(gold,orange)">
        <h3 class="ml-auto lead" id="buyDluxTitle" style="color: black">COIN TRADE</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">x</span></button>
      </div>
      <div class="modal-body">
      <div class="d-flex flex-column">
		<div class="d-flex flex-column flex-fill rounded-lg p-3 my-1 bg-darker" >
		  <div class="d-flex flex-row flex-fill align-items-center">
			<p style="font-size: 18px;" class="p-0 m-0 font-weight-light">From</p>
			<div class="d-flex ml-auto align-items-baseline">
				<div class="d-flex align-items-center"><p class="m-0 p-0">Available</p><span class="m-0 p-0 ml-2 text-primary" style="font-size: 20px;"> 1234 HIVE</span></div><button class="btn btn-sm btn-secondary ml-3 py-0">MAX</button>
			</div>
		</div>
			<div class="d-flex flex-row flex-fill mt-1">
			<div class="d-flex align-items-center">
				<div class="circle2"><i class="fab fa-hive"></i></div>
				<h2 class="p-0 m-0 ml-2 font-weight-bold">HIVE</h2>
			</div>
			<div class="d-flex ml-auto flex-column">
				<p class="ml-auto my-0 text-white-50 font-weight-bolder" style="font-size: 30px;">0</p>
				<p class="ml-auto my-0 text-muted font-weight-bold" style="font-size: 16px;">&asymp; &#36;0</p>
				</div>
			</div>
		  </div>
		  <div class"p-0 m-0 bg-dark"><h1 class="text-white-50 p-0 m-0 p-1"><p class="arrow bg-dark rounded text-center"  style="border: #333 1px solid;"><i class="fas fa-exchange-alt fa-rotate-90"></i></p></h1></div>
		  <div class="d-flex flex-column flex-fill rounded-lg p-3 my-1 bg-darker">
		  <div class="d-flex flex-row flex-fill align-items-center">
			<p style="font-size: 18px;" class="p-0 m-0 font-weight-light">To</p>
			</div>
			<div class="d-flex flex-row flex-fill mt-1 align-items-center">
			<div class="d-flex align-items-center">
				<div class="circle2 d-flex align-items-center justify-content-around"><img src="/img/dlux-hive-logo-alpha.svg" width="70%"></div>
				<h2 class="p-0 m-0 ml-2 font-weight-bold">DLUX</h2>
			</div>
			<div class="d-flex ml-auto">
				<p class="ml-auto my-0 text-white-50 font-weight-bolder" style="font-size: 30px;">&asymp; 0 DLUX</p>
				</div>
			</div>
		  </div>
		  
		  <div class="d-flex flex-column flex-fill rounded-lg p-3 my-1" style="background:linear-gradient(#191C1F,#272C31); border: #333 1px solid;">
				<div class="d-flex">
					<p style="font-size: 18px;" class="p-0 m-0 text-white-50 font-weight-light">Rate</p>
					<p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">1 HIVE = 4.111 DLUX</p>
				</div>
			  	<div class="d-flex">
			  		<p style="font-size: 12px;" class="p-0 m-0 text-muted ml-auto">1 DLUX = 0.251 HIVE</p>
			  	</div>
			  <hr width="100%" style="border: #333 thin solid">
			    <div class="d-flex">
					<p style="font-size: 18px;" class="p-0 m-0 text-white-50 font-weight-light">Swap Fee</p>
					<p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">0.25%</p>
				</div>
			</div>
		 
		  <div class="d-flex justify-content-around my-1 py-3"><button class="btn btn-lg btn-primary">Swap Tokens</button></div>
		  
	  </div>
      </div>
    </div>
  </div>
</div>-->
      <div class="modal fade" id="buyDluxModal" tabindex="-1" role="dialog" aria-labelledby="buyDluxModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" id="buy-modal">
          <div class="modal-content bg-dark text-white">
            <div class="modal-header d-flex flex-fill justify-content-between align-items-center" style="border-bottom-color: #333; background:linear-gradient(darkorange,yellow)">
              <div></div>
              <h3 class="ml-auto lead" id="buyDluxTitle" style="color: black">GET DLUX</h3>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">x</span></button>
            </div>
            <div class="modal-body">
              <div class="d-flex flex-column">
                <div class="d-flex justify-content-between">
                  <h2><a href="#" class="text-muted p-3" dmx-on:click="dexOrders.prev()"><i class="fas fa-caret-square-left"></i></a></h2>
                  <h2 style="color: greenyellow">{{value.amount}}{{$value}}<i class="fab fa-hive"></i></h2>
                  <h2 class=""><a href="#" class="text-muted p-3" dmx-on:click="dexOrders.next()"><i class="fas fa-caret-square-right"></i></a></h2>
                </div>
                <div class="d-flex flex-column flex-fill rounded-lg p-3 my-1 bg-darker" >
                  <div class="d-flex flex-row flex-fill align-items-center">
                    <p style="font-size: 18px;" class="p-0 m-0 font-weight-light">From</p>
                    <div class="d-flex ml-auto align-items-baseline">
                      <div class="d-flex small justify-content-between">
                        <p class="my-0 text-white-50" >Available<i class="fab fa-hive mx-1"></i></p>
                        <p class="my-0 text-primary">1,256.234{{value.hive}}</p>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex flex-row flex-fill mt-1">
                    <div class="d-flex align-items-center">
                      <div class="circle2"><i class="fab fa-hive"></i></div>
                      <h2 class="p-0 m-0 ml-2 font-weight-bold">HIVE</h2>
                    </div>
                    <div class="d-flex ml-auto flex-column">
                      <p class="ml-auto my-0 text-white-50 font-weight-bolder" style="font-size: 30px;">25.000{{value.hive}}</p>
                      <p class="ml-auto my-0 text-muted font-weight-bold" style="font-size: 16px;">&asymp; &#36;15.33</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div></div>
                    <div>
                      <button class="btn btn-outline-secondary btn-sm text-muted" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-info-circle"></i></button>
                    </div>
                  </div>
                  <div class="collapse" id="collapseExample">
                    <div class="d-flex">
                      <p style="font-size: 18px;" class="p-0 m-0 text-white-50 font-weight-light">Rate</p>
                      <p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">1 HIVE = 4.111 DLUX</p>
                    </div>
                    <div class="d-flex">
                      <p style="font-size: 12px;" class="p-0 m-0 text-muted ml-auto text-success">1 DLUX = 0.251 HIVE</p>
                    </div>
                    <hr width="100%" style="border: #333 thin solid">
                    <div class="d-flex">
                      <p style="font-size: 18px;" class="p-0 m-0 text-white-50 font-weight-light">Swap Fee<small class="rounded-pill border border-secondary p-1 ml-2">0.25&#37;</small></p>
                      <p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">2.5 DLUX</p>
                    </div>
                  </div>
                </div>
                <div class"p-0 m-0 bg-dark">
                  <div class="arrow2 rounded-circle border border-warning bg-darker text-warning">
                    <h1 class="m-2 px-3 py-1"><i class="fas fa-angle-double-down"></i></h1>
                  </div>
                </div>
                <div class="d-flex flex-column flex-fill rounded-lg p-3 my-1 border border-warning" style="background: radial-gradient(#222,#111);">
                  <div class="d-flex flex-row flex-fill align-items-center">
                    <p style="font-size: 18px;" class="p-0 m-0 font-weight-light">To</p>
                  </div>
                  <div class="d-flex flex-row flex-fill mt-1 align-items-center">
                    <div class="d-flex align-items-center">
                      <div class="circle2 d-flex align-items-center justify-content-around"><img src="/img/dlux-hive-logo-alpha.svg" width="70%"></div>
                      <h2 class="p-0 m-0 ml-2 font-weight-bold">DLUX</h2>
                    </div>
                    <div class="d-flex ml-auto">
                      <p class="ml-auto my-0 text-warning font-weight-bolder" style="font-size: 30px;">100.000</p>
                    </div>
                  </div>
                  <p class="pt-3">DLUX is your ticket to the metaverse. Purchase NFTs, power-up to vote on proposals, and use it across a variety of XR games and apps.</p>
                </div>
              </div>
              <div class="d-flex justify-content-around my-1 py-3">
                <button class="btn btn-lg btn-primary">Trade Tokens</button>
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
</body>
</html>
