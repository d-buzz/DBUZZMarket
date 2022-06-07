<!-- market chart -->
<div class="marketChart mt-3 mb-3">
    <div id="chartContainer" ref="dumbo">
        <trading-vue :data="this.$data" ref="tvjs" :id="chart.id" :width="chart.width" :height="chart.height" :title-txt="chartTitle" :color-back="chart.bg" />
        <!-- Trading Vue 2 -->
    </div>
    <div class="mt-2 text-center d-flex justify-content-between">
        <div>
            <!-- <script type="text/javascript">
$('#time-scale').multiselect();
</script>  -->
            <select id="time-scale" class="custom-select bg-darker border-dark text-muted" v-model="barwidth" @change="getHistorical()">
                <option value="60000">1m</option>
                <option value="300000">5m</option>
                <option value="900000">15m</option>
                <option value="3600000">1h</option>
                <option value="21600000" selected>6h</option>
                <option value="86400000">1d</option>
            </select>
        </div>
        <div></div>
        <div>
            <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#openordersdrawer" aria-expanded="false" aria-controls="openordersdrawer">OPEN ORDERS ({{openorders.length}}) <i class="fas fa-book-reader ml-2"></i></button>
        </div>
    </div>
    <div id="openordersdrawer" class="collapse ">
        <div class="py-5">
            <div v-if="openorders.length == 0" class="text-center text-white-50">
                <h5>No open orders</h5>
            </div>
            <div class="table-responsive" v-if="openorders.length > 0">
                <table role="table" aria-busy="false" aria-colcount="7" class="table table-dark bg-darker text-white-50 table-striped table-hover table-borderless mb-0" id="useropenorders">
                    <thead role="rowgroup" class="">
                    <tr role="row" class="">
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.blocka || orders.blockd}" aria-colindex="1">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">BLOCK</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','block','asc');toggleOrders('blocka')" v-bind:class="{'bg-primary':orders.blocka}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','block','desc');toggleOrders('blockd')" v-bind:class="{'bg-primary':orders.blockd}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.tokena || orders.tokend}" aria-colindex="2">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">{{TOKEN}}</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','amount','asc');toggleOrders('tokena')" v-bind:class="{'bg-primary':orders.tokena}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','amount','desc');toggleOrders('tokend')" v-bind:class="{'bg-primary':orders.tokend}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.coina || orders.coind}" aria-colindex="3">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">HIVE/HBD</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','nai','asc');toggleOrders('coina')" v-bind:class="{'bg-primary':orders.coina}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','nai','desc');toggleOrders('coind')" v-bind:class="{'bg-primary':orders.coind}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.filleda || orders.filledd}" aria-colindex="4">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">FILLED</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','percentFilled','asc');toggleOrders('filleda')" v-bind:class="{'bg-primary':orders.filleda}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','percentFilled','desc');toggleOrders('filledd')" v-bind:class="{'bg-primary':orders.filledd}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.ratea || orders.rated}" aria-colindex="5">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">RATE</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','rate','asc');toggleOrders('ratea')" v-bind:class="{'bg-primary':orders.ratea}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','rate','desc');toggleOrders('rated')" v-bind:class="{'bg-primary':orders.rated}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" v-bind:class="{'col-sort':orders.typea || orders.typed}" aria-colindex="6">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">TYPE</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','type','asc');toggleOrders('typea')" v-bind:class="{'bg-primary':orders.typea}"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" @click="sort('openorders','type','desc');toggleOrders('typed')" v-bind:class="{'bg-primary':orders.typed}"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" class="" aria-colindex="7">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">&nbsp;</div>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody role="rowgroup">
                    <tr role="row" class="" v-for="order in openorders" v-if="!orders.value">
                        <td role="cell" class="" aria-colindex="1">{{order.block}}</td>
                        <td role="cell" class="" aria-colindex="2">{{formatNumber(order.amount/1000,3,'.',',')}}</td>
                        <td role="cell" class="" aria-colindex="3">{{order.nai}}</td>
                        <td role="cell" class="" aria-colindex="4">{{formatNumber(order.percentFilled,3,'.',',')}}%</td>
                        <td role="cell" class="" aria-colindex="5" v-bind:class="{'text-danger':(order.type == 'hive:sell' || order.type == 'hbd:sell'), 'text-success':(order.type == 'hive:buy' || order.type == 'hbd:buy')}">{{formatNumber(order.rate,6,'.',',')}}</td>
                        <td role="cell" class="" aria-colindex="6" v-bind:class="{'text-danger':(order.type == 'hive:sell' || order.type == 'hbd:sell'), 'text-success':(order.type == 'hive:buy' || order.type == 'hbd:buy')}">{{toUpperCase(order.type)}}</td>
                        <td role="cell" class="" aria-colindex="7"><button class="btn btn-sm btn-outline-warning" id="cancelbtn" @click="cancelDEX(order.txid,prefix)">CANCEL</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>