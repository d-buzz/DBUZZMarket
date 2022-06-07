<!-- HIVE orders -->
<div id="hiveData" v-if="buyhive.checked">
    <div id="hiveMarketOrders">
        <div class="row">
            <div class="mt-3 col-md-6">
                <h4>Buy Orders</h4>
                <div class="table-responsive">
                    <table role="table" aria-busy="false" aria-colcount="4" class="table table-dark bg-darker text-white table-striped table-hover table-borderless" id="hivebuyordertable">
                        <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader" scope="col" aria-colindex="1" class="">TOTAL HIVE</th>
                            <th role="columnheader" scope="col" aria-colindex="2" class="">
                                <div>HIVE</div>
                            </th>
                            <th role="columnheader" scope="col" aria-colindex="3" class="">{{TOKEN}}</th>
                            <th role="columnheader" scope="col" aria-colindex="4" class="">
                                <div>BID</div>
                            </th>
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="tbody-scroll-orders">
                        <tr role="row" v-for="item in hivebuys">
                            <td aria-colindex="1" role="cell" class="">{{formatNumber(item.total/1000,3,'.',',')}}</td>
                            <td aria-colindex="2" role="cell" class="">{{formatNumber(item.hive/1000,3,'.',',')}}</td>
                            <td aria-colindex="3" role="cell" class="">{{formatNumber(item.amount/1000,3,'.',',')}}</td>
                            <td aria-colindex="4" role="cell" class="text-primary"><a href="#/" @click="setValue('buyPrice', item.rate);setValue('sellPrice', item.rate);suggestValue('sellQuantity', item.at > balance ? balance : item.at/1000);suggestValue('sellHiveTotal', item.at > balance ? (balance/item.total)/1000 : item.total/1000 )">{{formatNumber(item.rate,6,'.',',')}}</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-3 col-md-6">
                <h4>Sell Orders</h4>
                <div class="table-responsive">
                    <table role="table" aria-busy="false" aria-colcount="4" class="table table-dark bg-darker text-white table-striped table-hover table-borderless" id="hivesellorderstable">
                        <thead role="rowgroup" class="">
                        <tr role="row" class="">
                            <th role="columnheader" scope="col" aria-colindex="1" class="">
                                <div>ASK</div>
                            </th>
                            <th role="columnheader" scope="col" aria-colindex="2" class="">{{TOKEN}}</th>
                            <th role="columnheader" scope="col" aria-colindex="3" class="">
                                <div>HIVE</div>
                            </th>
                            <th role="columnheader" scope="col" aria-colindex="4" class="">TOTAL HIVE</th>
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="tbody-scroll-orders">
                        <tr class="" role="row" v-for="item in hivesells">
                            <td aria-colindex="1" role="cell" class="text-primary"><a href="#/" @click="setValue('buyPrice', item.rate);setValue('sellPrice', item.rate);suggestValue('buyHiveTotal', item.total/1000 );suggestValue('buyQuantity', item.at/1000 )">{{formatNumber(item.rate,6,'.',',')}}</a></td>
                            <td aria-colindex="2" role="cell" class="">{{formatNumber(item.amount/1000,3,'.',',')}}</td>
                            <td aria-colindex="3" role="cell" class="">{{formatNumber(item.hive/1000,3,'.',',')}}</td>
                            <td aria-colindex="4" role="cell" class="">{{formatNumber(item.total/1000,3,'.',',')}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="hiveTradeHistory" ref="chartContainer">
        <div class="row">
            <div class="mt-3 col-12">
                <h4>Trade History</h4>
                <div class="table-responsive">
                    <table role="table" aria-busy="false" aria-colcount="4" class="table table-dark bg-darker text-white table-striped table-hover table-borderless" id="hivetradehistorytable">
                        <thead role="rowgroup" class="">
                        <tr role="row">
                            <th role="columnheader" scope="col" aria-colindex="1" class="">PRICE</th>
                            <th role="columnheader" scope="col" aria-colindex="2" class="">QTY</th>
                            <th role="columnheader" scope="col" aria-colindex="3" class="">TIME</th>
                        </tr>
                        </thead>
                        <tbody role="rowgroup" class="tbody-scroll-history">
                        <tr class="" role="row" v-for="item in recenthive">
                            <td aria-colindex="1" role="cell" class="" v-bind:class="{'text-danger': (item.type == 'sell'), 'text-success': (item.type == 'buy')}">{{formatNumber(item.price,6,'.',',')}}</td>
                            <td aria-colindex="2" role="cell" class="">{{formatNumber(item.target_volume,3,'.',',')}}</td>
                            <td aria-colindex="3" role="cell" class="">{{new Date(item.trade_timestamp).toLocaleTimeString()}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>