<!-- market stats -->
<div id="market" class="row text-center">
    <div class="mt-2 col-lg-3">
        <h5>Market</h5>
        <div class="container-fluid mt-3">
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-warning active">
                    <input name="buypair" type="radio" id="buyhive" checked @click="togglecoin('hive');setValue('buyHiveTotal', 0);setValue('sellHiveTotal', 0);setValue('buyHBDTotal', 0);setValue('sellHBDTotal', 0);getHistorical()">
                    HIVE </label>
                <label class="btn btn-outline-warning">
                    <input type="radio" name="buypair" id="buyhbd" @click="togglecoin('hbd');setValue('buyHBDTotal', 0);setValue('sellHBDTotal', 0);setValue('buyHiveTotal', 0);setValue('sellHiveTotal', 0);getHistorical()">
                    HBD </label>
            </div>
        </div>
    </div>
    <div class="col-lg-9" v-if="buyhive.checked">
        <div class="row">
            <div class="mt-2 col">
                <h5>Bid</h5>
                <i class="fab fa-hive mr-1"></i>{{hivebuys[0] ? hivebuys[0].rate : 0}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((hivebuys[0] ? hivebuys[0].rate : 0 ) * hiveprice.hive.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>Ask</h5>
                <i class="fab fa-hive mr-1"></i>{{hivesells[0] ? hivesells[0].rate : 0}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((hivesells[0] ? hivesells[0].rate : 0 ) * hiveprice.hive.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>Last</h5>
                <i class="fab fa-hive mr-1"></i>{{dexapi.markets ? dexapi.markets.hive.tick : 0}} <br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((dexapi.markets ? dexapi.markets.hive.tick : 0 ) * hiveprice.hive.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>24h Volume</h5>
                <i class="fab fa-hive mr-1"></i>{{volume.hive}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed(volume.hive * hiveprice.hive.usd, 2)}}
            </div>
        </div>
    </div>
    <div class="col-lg-9" v-if="buyhbd.checked">
        <div class="row">
            <div class="mt-2 col">
                <h5>Bid</h5>
                <i class="fab fa-hive mr-1"></i>{{hbdbuys[0] ? hbdbuys[0].rate : 0}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((hbdbuys[0] ? hbdbuys[0].rate : 0 ) * hbdprice.hive_dollar.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>Ask</h5>
                <i class="fab fa-hive mr-1"></i>{{hbdsells[0] ? hbdsells[0].rate : 0}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((hbdsells[0] ? hbdsells[0].rate : 0 ) * hbdprice.hive_dollar.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>Last</h5>
                <i class="fab fa-hive mr-1"></i>{{dexapi.markets ? dexapi.markets.hive.tick : 0}} <br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed((dexapi.markets ? dexapi.markets.hive.tick : 0 ) * hbdprice.hive_dollar.usd, 6)}}
            </div>
            <div class="mt-2 col">
                <h5>24h Volume</h5>
                <i class="fab fa-hive mr-1"></i>{{volume.hbd}}<br>
                <i class="fas fa-dollar-sign mx-1"></i>{{toFixed(volume.hbd * hbdprice.hive_dollar.usd, 2)}}
            </div>
        </div>
    </div>
</div>