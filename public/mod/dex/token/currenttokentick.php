<!-- current token tick -->
<div class="row">
    <div class="col-4">
        <div class="jumbotron p-3 bg-dark" v-if="buyhive.checked">
            <div class="d-flex align-items-center" id="dluxhivequote">
                <div>
                    <h2 class="lead my-0"><b>{{TOKEN}}: ${{toFixed((dexapi.markets ? dexapi.markets.hive.tick : 0) * hiveprice.hive.usd, 6)}}</b></h2>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <div class="dropdown show d-flex align-items-center p-0 m-0"><a class="text-white py-0 px-2 m-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-info-circle mx-2"></i></a>
                        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right">
                            <h6 class="dropdown-header">{{TOKEN}} STATS</h6>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Supply:</p>
                            <p>{{formatNumber(stats.tokenSupply/1000,3,'.',',')}}</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Market Cap:</p>
                            <p>${{formatNumber(marketCap,2,'.',',')}}</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">DEX Fee:</p>
                            <p>{{formatNumber(stats.dex_fee*100,3,'.',',')}}%</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Clearing Time:</p>
                            <p class="mb-0">~10 Minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron p-3 bg-dark" v-if="buyhbd.checked">
            <div class="d-flex align-items-center" id="dluxhbdquote">
                <div>
                    <h2 class="lead my-0"><b>{{TOKEN}}: ${{toFixed((dexapi ? dexapi.markets.hbd.tick : 0 )* hbdprice.hive_dollar.usd, 6)}}</b></h2>
                </div>
                <div class="ml-auto d-flex align-items-center">
                    <div class="dropdown show d-flex align-items-center p-0 m-0"><a class="text-white py-0 px-2 m-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-info-circle mx-2"></i></a>
                        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right">
                            <h6 class="dropdown-header">{{TOKEN}} STATS</h6>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Supply:</p>
                            <p>{{formatNumber(stats.tokenSupply/1000,3,'.',',')}}</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Market Cap:</p>
                            <p>${{formatNumber(marketCap,2,'.',',')}}</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">DEX Fee:</p>
                            <p>{{formatNumber(stats.dex_fee*100,3,'.',',')}}%</p>
                            <div class="dropdown-divider bg-light"></div>
                            <p class="mb-0">Clearing Time:</p>
                            <p class="mb-0">~10 Minutes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="jumbotron p-3 bg-dark">
            <div id="hivequote">
                <h2 class="lead my-0"><b>HIVE: ${{hiveprice.hive.usd}}</b></h2>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="jumbotron p-3 bg-dark">
            <div id="hbdquote">
                <h2 class="lead my-0"><b>HBD: ${{hbdprice.hive_dollar.usd}}</b></h2>
            </div>
        </div>
    </div>
</div>