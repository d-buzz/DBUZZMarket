<!-- Page header area -->
<div class="container" style="max-width: 1800px !important">
    <div class="container-fluid" style="padding: 0">
        <!-- jumbo -->
        <div class="jumbotron text-white mt-5"
             style="background: linear-gradient(217deg, rgba(33,255,181,.8), rgba(33,255,181,0) 70.71%),
          linear-gradient(127deg, rgba(251,0,255,.8), rgba(251,0,255,0) 70.71%),
                              linear-gradient(336deg, rgba(3,62,253,.8), rgba(3,62,253,0) 70.71%);">
            <div class="d-flex flex-fill flex-wrap justify-content-around">
                <div class="d-flex justify-content-around align-items-center mx-3">
                    <div class="d-flex p-2 rounded flex-column mx-3" style="max-width:400px;">
                        <div class="mb-5">
                            <h1 class="display-4 text-left">Discover, collect, and sell NFTs</h1>
                            <p class="lead">All with no gas fees at near cost</p>
                            <div class="my-2 text-left"> <a id="nftexplore" class="btn btn-lg btn-primary px-4 mr-3" href="/nfts/explore">Explore</a> <a id="nftcreate" class="btn btn-lg btn-secondary px-4 ml-3 disabled" href="#">Create</a> </div>
                        </div>
                        <div class="my-0 py-1 px-4 d-flex flex-column flex-wrap" style="background-color: rgba(0,0,0,1); border-radius: 15px 15px 0px 0px;">
                            <div class="d-flex flex-row flex-fill align-items-center mt-2 mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="circle2 d-flex align-items-center justify-content-around"><img src="/img/Dbuzz_Logo_Bee_xdot_LogoShape.svg" width="70%"></div>
                                    <h2 class="p-0 m-0 ml-2 font-weight-bold" >DLUX</h2>
                                </div>
                                <div class="ml-auto"><a href="/about/" style="color:silver">About<i class="fas fa-info-circle ml-2"></i></a></div>
                            </div>
                            <div class="d-flex justify-content-around my-0">
                                <div class="d-flex align-items-center p-3">
                                    <p class="small my-0 py-0 mr-2 text-white-50">BALANCE:</p>
                                    <h3 class="my-0 py-0 font-weight-bolder" style="color:#21FFB5"><u>{{(openordersapi.data.balance/1000).formatNumber(3,'.',',')}}</u></h3>
                                </div>
                            </div>
                            <div class="mt-4 text-right">
                                <button class="btn btn-outline-primary" href="#buyDluxModal" class="a-1" data-toggle="modal">
                                    Get DLUX
                                </button>
                            </div>
                        </div>
                        <div style="border-radius: 0px 0px 0px 0px; background-color: black">
                            <div class="" style="background-color: rgba(227, 19, 55, 0.6 ); border-radius: 0px 0px 0px 0px; border-left: 2px solid black; border-right: 2px solid black; color:#e7e7f1">
                                <div style="border-radius: 0px 0px 15px 15px; background-color: black">&nbsp;</div>
                                <div class="mx-5 mt-2 d-flex">
                                    <p class="m-0"><b><i class="fab fa-hive"></i> HIVE</b></p>
                                    <p class="ml-auto small my-0 py-0 mr-2 text-white-50">BALANCE: {{accountapi.data.result[0].balance}}</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="" style="background-color: rgba(0, 150, 15, 1); border-radius: 0px 0px 15px 15px;  border-left: 2px solid black; border-right: 2px solid black; border-bottom: 2px solid black;">
                            <div style="border-radius: 0px 0px 15px 15px; background-color: black">
                                <div style="border-radius: 0px 0px 15px 15px; background-color: rgba(227, 19, 55, 0.6 ); border-left: 2px solid black; border-right: 2px solid black; border-bottom: 2px solid black; color:#e7e7f1; line-height: 10px;">&nbsp;</div>
                            </div>
                            <div class="my-2 mx-5 d-flex">
                                <p class="m-0"><b><i class="fab fa-hive"></i> HBD</b></p>
                                <p class="ml-auto small my-0 py-0 mr-2 text-white-50">BALANCE: {{accountapi.data.result[0].hbd_balance}}</span></p>
                            </div>
                        </div>
                        <div class="modal fade" id="buyDluxModal" tabindex="-1" role="dialog" aria-labelledby="buyDluxModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" id="buy-modal">
                                <div class="modal-content bg-dark text-white">
                                    <form class="needs-validation" validate id="marketorderform" dmx-bind:action="javascript:buyDEX('{{markethive.value}}','{{markethbd.value}}','{{marketqty.value}}','{{markettime.value}}')" >
                                        <input id="markethbd" value="0" class="d-none">
                                        <input id="marketqty" value="0" class="d-none">
                                        <input id="markettime" value="0" class="d-none">
                                        <div class="card-header d-flex flex-fill justify-content-between align-items-center">
                                            <div>&nbsp;</div>
                                            <h3 class="lead m-0">MARKET ORDER</h3>
                                            <button type="button" class="close m-0 p-0" data-dismiss="modal" aria-label="Close"> <span class="close text-white m-0 p-0"><i class="fas fa-times"></i></span></button>
                                        </div>
                                        <div class="card-body">
                                            <p class="small text-white-50">Market Orders utilize multisig to complete partial fills of open orders on the DEX, starting with the lowest rate to ensure you're getting the best price.</p>
                                            <p class="small text-white-50"> If no orders are available, the ICO price of 1 HIVE per 1 DLUX is in effect.</p>
                                            <div class="d-flex flex-column">
                                                <div class="d-flex flex-column flex-fill rounded-lg p-3 my-1 bg-darker" >
                                                    <div class="d-flex flex-row flex-fill align-items-center">
                                                        <p style="font-size: 18px;" class="p-0 m-0 font-weight-light">From</p>
                                                        <div class="d-flex ml-auto align-items-baseline">
                                                            <div class="d-flex small justify-content-between">
                                                                <p class="my-0 text-white-50" >Available<i class="fab fa-hive mx-1"></i></p>
                                                                <p class="my-0 text-primary">{{accountapi.data.result[0].balance}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row flex-fill mt-1">
                                                        <div class="d-flex align-items-center">
                                                            <div class="circle2"><i class="fab fa-hive"></i></div>
                                                            <h2 class="p-0 m-0 ml-2 font-weight-bold">HIVE</h2>
                                                        </div>
                                                        <div class="d-flex ml-auto flex-column">
                                                            <p class="ml-auto my-0 text-white-50 font-weight-bolder" style="font-size: 30px;">
                                                                <input class="form-control text-white" style="background-color: rgba(0,0,0,0.5); max-width: 150px" id="markethive" value="1" placeholder="0" type="number" min="0.004" step="0.001" required dmx-bind:max="{{accountapi.data.result[0].balance.split(' ')[0]}}">
                                                            </p>
                                                            <p class="ml-auto my-0 text-muted font-weight-bold" style="font-size: 16px;">&asymp; {{(markethive.value*hiveprice.data.hive.usd).formatCurrency()}}</p>
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
                                                            <p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">1 HIVE &asymp; {{1/dexview1.data[0].rate}} DLUX</p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <p style="font-size: 12px;" class="p-0 m-0 text-muted ml-auto text-success">1 DLUX &asymp; {{dexview1.data[0].rate}} HIVE</p>
                                                        </div>
                                                        <hr width="100%" style="border: #333 thin solid">
                                                        <div class="d-flex">
                                                            <p style="font-size: 18px;" class="p-0 m-0 text-white-50 font-weight-light">Swap Fee<small class="rounded-pill border border-secondary p-1 ml-2">0.1%</small></p>
                                                            <p style="font-size: 16px;" class="p-0 m-0 text-white-50 ml-auto">&asymp;
                                                                <input id="marketfee" class="d-none" dmx-bind:value="{{((markethive.value/dexview1.data[0].rate)*0.001).formatNumber(3,'.',',')}}">
                                                                {{marketfee.value}} DLUX</p>
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
                                                        <div class="circle2 d-flex align-items-center justify-content-around"><img src="/img/Dbuzz_Logo_Bee_xdot_LogoShape.svg" width="70%"></div>
                                                        <h2 class="p-0 m-0 ml-2 font-weight-bold">DLUX</h2>
                                                    </div>
                                                    <div class="d-flex ml-auto">
                                                        <p class="ml-auto my-0 text-warning font-weight-bolder" style="font-size: 30px;">&asymp; {{((markethive.value/dexview1.data[0].rate)-(marketfee.value.toNumber())).formatNumber(3,'.',',')}}</p>
                                                    </div>
                                                </div>
                                                <p class="pt-3">DLUX is your ticket to the metaverse. Purchase NFTs, power-up to vote on proposals, and use it across a variety of XR games and apps.</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-lg btn-primary">Convert</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column">
                <div class="jumbotron px-5 py-4" style="background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0)); border: none;">
                    <div class="d-flex justify-content-between align-items-center"></div>
                    <div class="" id="sales-mint">
                        <div id="buymintcards" is="dmx-repeat" dmx-bind:repeat="mintsupplyapi.data.result.sort('set')" class="row">
                            <div dmx-bind:id="{{script}}-card" class="card card-ft text-white m-2 " style="border: none;"> {{script.getSetDetailsColors('-card')}}
                                <div id="hidden-detail-inputs" class="d-none">
                                    <input dmx-bind:id="{{script}}-color1-text" type="text">
                                    {{script.getSetDetails('Color1', '-color1-text', 'value')}}
                                    <input dmx-bind:id="{{script}}-color2-text" type="text">
                                    {{script.getSetDetails('Color2', '-color2-text', 'value')}}
                                    <input dmx-bind:id="{{script}}-description-text" type="text">
                                    {{script.getSetDetails('Description', '-description-text', 'value')}}
                                    <input dmx-bind:id="{{script}}-icon-text" type="text">
                                    {{script.getSetDetails('faicon', '-icon-text', 'value')}} </div>
                                <div class="card-header d-flex align-items-center justify-content-between" >
                                    <div class="rounded-pill d-flex align-items-center p-2" style="background-color: black">
                                        <div class="pr-2"><small>SUPPLY: </small></div>
                                        <div class="px-2">
                                            <h2 dmx-bind:id="{{set}}-inventory" class="m-0">
                                                <div>{{qty}}</div>
                                            </h2>
                                        </div>
                                    </div>
                                    <div> <a dmx-bind:href="/nfts/set/{{set}}">
                                            <h3 class="card-title lead shimmer rounded p-2 m-0 ml-auto" style="color: black"><b>{{set}} NFT</b></h3>
                                        </a></div>
                                </div>
                                <div class="card-body text-center d-flex flex-column p-2">
                                    <div class="card panel-group h-100" dmx-bind:id="{{set}}-panel" style="background-color: rgba(0,0,0,0.8)">
                                        <div class="panel panel-default">
                                            <div class="card-heading mint-panel-heading-top">
                                                <p class="card-title mb-0 p-1"> <a class="collapsed accordion-toggle" data-toggle="collapse" dmx-bind:data-parent="#{{set}}-panel" dmx-bind:href="#{{set}}-description-collapse" dmx-on:click="toggleMintDescription('{{set}}')"><i class="far fa-list-alt mr-3"></i>Description</a></p>
                                            </div>
                                            <div class="panel-collapse collapse" dmx-bind:id="{{set}}-description-collapse">
                                                <div class="card-body">
                                                    <p dmx-bind:id="{{script}}-description-p"> {{script.getSetDetails('Description', '-description-p', 'innerText')}} </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="card-heading d-none">
                                                <h4 class="card-title"> <a class="accordion-toggle" data-toggle="collapse" dmx-bind:data-parent="#{{set}}-panel" dmx-bind:href="#{{set}}-info-collapse">Info</a></h4>
                                            </div>
                                            <div class="panel-collapse collapse show" dmx-bind:id="{{set}}-info-collapse">
                                                <div class="card-body">
                                                    <div dmx-bind:id="{{script}}wrapped"> {{script.getSetPhotos('','wrapped','rounded max-160')}}</div>
                                                    <div dmx-bind:id="{{script}}header"  style="background-image: linear-gradient(magenta,aqua);-webkit-background-clip: text;color: transparent;">{{script.getSetDetailsColorsTxt('header')}}
                                                        <div class="mt-3">
                                                            <h1 class="text-center">sealed NFT<i dmx-bind:id="{{script}}icon" class="ml-3"></i></h1>
                                                            {{script.getSetDetailsIcon('icon')}}</div>
                                                    </div>
                                                    <h5>Unwrap to see what's inside</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="card-heading mint-panel-heading-bottom d-none">
                                                <p class="card-title mb-0 p-1"> <a class="collapsed accordion-toggle" data-toggle="collapse" dmx-bind:data-parent="#{{set}}-panel" dmx-bind:href="#{{set}}-market-collapse" dmx-on:click="toggleMintMarket('{{set}}')"><i class="fas fa-store mr-3"></i>Market ({{qty}})</a></p>
                                            </div>
                                            <div class="panel-collapse collapse show" dmx-bind:id="{{set}}-market-collapse">
                                                <div class="card-body p-0">
                                                    <div>
                                                        <ul id="{{set}}-mint-tabnav" class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item p-0"> <a class="nav-link active" dmx-bind:href="#{{set}}-mint-salestab" dmx-bind:id="{{set}}-mint-saleslink" role="tab" data-toggle="tab" aria-controls="mintsalestab" aria-expanded="true">
                                                                    <div class="d-flex align-items-center">
                                                                        <div dmx-on:click="">SALES</div>
                                                                        <div class="mb-3"><span class=" badge badge-pill badge-danger" style="font-size: .7em">{{qty_sales}}</span></div>
                                                                    </div>
                                                                </a></li>
                                                            <li class="nav-item p-0"> <a class="nav-link" dmx-bind:href="#{{set}}-mint-auctionstab" role="tab" dmx-bind:id="{{set}}-mint-auctionslink" data-toggle="tab" aria-controls="mintauctionstab">
                                                                    <div class="d-flex align-items-center">
                                                                        <div>AUCTIONS</div>
                                                                        <div class="mb-3"><span class=" badge badge-pill badge-danger" style="font-size: .7em">{{qty_auctions}}</span></div>
                                                                    </div>
                                                                </a></li>
                                                        </ul>
                                                        <!-- Content Panel -->
                                                        <div dmx-bind:id="{{set}}-mint-tabs" class="tab-content">
                                                            <div dmx-bind:id="{{set}}-mint-salestab" role="tabpanel" class="tab-pane fade show active" aria-labelledby="mintsalestab">
                                                                <table class="table table-sm table-dark bg-none">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col" class="small">SUPPLY</th>
                                                                        <th scope="col" class="small">PRICE</th>
                                                                        <th scope="col" class="small">QTY</th>
                                                                        <th scope="col"></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody id="salesrepeat" is="dmx-repeat" dmx-bind:repeat="sales.reverse()" >
                                                                    <tr dmx-show="pb.length > 0">
                                                                        <th scope="row" class="" colspan="4"> <p class="my-2"><span class="small bg-warning text-dark rounded px-2 py-1">ACCOUNT COMMENT OR POST BETWEEN</span></p>
                                                                            <p>{{pb}}</p>
                                                                        </th>
                                                                    </tr>
                                                                    <tr>
                                                                        <form dmx-bind:id="{{set}}{{uid}}form" class="needs-validation" novalidate>
                                                                            <th scope="row" style="vertical-align: middle">{{qty}} </th>
                                                                            <td style="vertical-align: middle">{{pricenai.nai()}}</td>
                                                                            <td><span dmx-show="(pricenai.token != 'DLUX')">
                                          <center>
                                            <input value="1" required dmx-bind:max="{{max}}" dmx-bind:id="{{set}}{{uid}}buyftqty" class="bg-none border-light rounded text-white text-center form-control" style="max-width: 50px">
                                          </center>
                                          </span> <span dmx-show="(pricenai.token == 'DLUX')">{{qty}} </span></td>
                                                                            <td><div>
                                                                                    <button type="submit" class="btn btn-primary" dmx-bind:id="{{set}}-{{uid}}-buyfthivebtn" dmx-show="(pricenai.token != 'DLUX') && (by != userCookie.value)" dmx-on:click="buyFTHive('{{set}}','{{uid}}',{{price}},'{{pricenai.token}}','{{set}}{{uid}}buyftqty')">Buy</button>
                                                                                    <button class="btn btn-primary" dmx-bind:id="{{set}}-{{uid}}-buyftbtn" dmx-show="(pricenai.token == 'DLUX') && (by != userCookie.value)" dmx-on:click="buyFT('{{set}}','{{uid}}',{{price}})">Buy</button>
                                                                                    <button class="btn btn-warning" dmx-bind:id="{{set}}-{{uid}}-sellftcancelbtn" dmx-show="(by == userCookie.value)" dmx-on:click="sellFTcancel('{{set}}','{{uid}}','{{pricenai.token}}')">Cancel</button>
                                                                                </div></td>
                                                                        </form>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div role="tabpanel" class="tab-pane fade show" dmx-bind:id="{{set}}-mint-auctionstab" aria-labelledby="mintauctionstab">
                                                                <table class="table table-sm table-dark bg-none">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col" class="small">QTY</th>
                                                                        <th scope="col" class="small">BID</th>
                                                                        <th scope="col" class="small">TOTAL</th>
                                                                        <th scope="col" class="small">HIGH BIDDER</th>
                                                                    <tbody is="dmx-repeat" dmx-bind:repeat="auctions" id="mintauctionsorders">
                                                                    <tr>
                                                                        <th scope="row" colspan="4" style="background-color: crimson"><span dmx-bind:id="timer-{{set}}-{{uid}}">{{time.animateTime(set, uid)}}</span></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">1</th>
                                                                        <td>{{pricenai.nai()}}</td>
                                                                        <td>&asymp; {{((price/1000)*dluxperdollar.value).formatCurrency())}}</td>
                                                                        <td>{{bidder}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" colspan="2"></th>
                                                                        <td><input dmx-bind:id="{{set}}-{{uid}}-bid" class="form-control " type="number" dmx-bind:placeholder="{{(price/1000+1).formatNumber('3','.',',')}}"></td>
                                                                        <td><button class="btn btn-secondary" dmx-show="(by == userCookie.value)">Bid</button>
                                                                            <button dmx-bind:id="{{set}}-{{uid}}-buyFTbtn" class="btn btn-primary" dmx-show="(by != userCookie.value)" dmx-on:click="bidFT('{{set}}','{{uid}}')">Bid</button>
                                                            </div>
                                                            </td>

                                                            </tr>

                                                            </tbody>

                                                            <th scope="col" class="small"></th>
                                                            <th scope="col" class="small"></th>
                                                            </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-2">
                                <div class="rounded p-2" style="background-color: rgba(0,0,0,0.8)">
                                    <div class="d-flex justify-content-around">
                                        <div class="d-flex align-items-center">
                                            <div class="pr-2"> <small>OWNED: </small> </div>
                                            <div class="px-2">
                                                <h2 dmx-bind:id="{{set}}-inventory" class="m-0">
                                                    <div dmx-bind:id="{{set}}-inventory-none" dmx-class:d-none="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()"><span style="color: aqua">0</span></div>
                                                    <div dmx-bind:id="{{set}}-inventory-any" is="dmx-repeat" dmx-bind:repeat="inventoryapi.data.mint_tokens.where('set', set, '==')" dmx-show="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()"><span style="color: aqua">{{qty}}</span></div>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3 justify-content-between align-items-center">
                                        <div class="col-5 px-0">
                                            <div dmx-bind:id="{{set}}-open-none" dmx-class:d-none="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()">
                                                <button type="button" class="btn btn-outline-light w-100 disabled">Open<i class="fas fa-box-open ml-3"></i></button>
                                            </div>
                                            <div dmx-bind:id="{{set}}-open-some" is="dmx-repeat" dmx-bind:repeat="inventoryapi.data.mint_tokens.where('set', set, '==')" dmx-show="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()">
                                                <button type="button" class="btn btn-outline-light w-100" dmx-on:click="openFT('{{set}}')">Open<i class="fas fa-box-open ml-3"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-5 px-0">
                                            <div dmx-bind:id="{{set}}-transfer-none" dmx-class:d-none="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()">
                                                <button type="button" class="btn btn-outline-light w-100 disabled">Transfer<i class="fas fa-exchange-alt ml-3"></i></button>
                                            </div>
                                            <div dmx-bind:id="{{set}}-transfer-some" is="dmx-repeat" dmx-bind:repeat="inventoryapi.data.mint_tokens.where('set', set, '==')" dmx-show="inventoryapi.data.mint_tokens.where('set',set,'==').hasItems()">
                                                <button type="button" class="btn btn-outline-light w-100" data-toggle="modal" href="#mintTransferModal" dmx-on:click="mint_detail.select(set)">Transfer<i class="fas fa-exchange-alt ml-3"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>