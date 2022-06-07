<!-- trade forms -->
<div id="tradeForms">
    <div class="row">
        <div class="mt-3 col-md-6">
            <h4>Buy {{TOKEN}}</h4>
            <form name="buy" id="buyForm" @submit.prevent="validateForm('buyForm', 'buyFormValid');buyDEX()" class="form-horizontal needs-validation" novalidate>
                <div class="form-group" id="buy-type" aria-labelledby="buy-type-label">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 bv-no-focus-ring col-form-label" id="buy-type-label">Order Type</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-warning active">
                                        <input type="radio" name="buyType" id="buylimit" checked @click="togglebuylimit('limit');setValue('buyQuantity', 0);setValue('buyHours','720');setValue('buyPrice', buyhive.checked ? hivesells[0]?.rate || '0' : hbdsells[0]?.rate || '0');block()">
                                        LIMIT </label>
                                    <label class="btn btn-outline-warning">
                                        <input type="radio" name="buyType" id="buymarket" @click="togglebuylimit('market');setValue('buyQuantity','0');setValue('buyHours','0');setValue('buyHiveTotal',0);setValue('buyPrice', 0);setValue('buyHBDTotal',0);block()">
                                        MARKET </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="small text-muted" v-if="buyhive.checked">BALANCE<br>
                                <a href="#/" @click="setValue('buyHiveTotal',parseFloat(barhive) < maxhbuy? parseFloat(barhive) : maxhbuy)">{{formatNumber(barhive,3,'.',',')}} HIVE</a>
                            </div>
                            <div class="small text-muted" v-if="buyhbd.checked">BALANCE<br>
                                <a href="#/" @click="setValue('buyHBDTotal',parseFloat(barhbd) < maxhbuy? parseFloat(barhbd) : maxhbuy)">{{formatNumber(barhbd,3,'.',',')}} HBD</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="buyQuantity" id="buy-qty" aria-labelledby="buy-qty-label" v-if="buylimit.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="buy-qty-label">Quantity</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" v-on:keyup="bcalc('t')" ref="buyQty" required class="form-control bg-dark border-dark text-info" v-model="buyQuantity" id="buyQuantity" placeholder="0" :min="minbuy" step="0.001" aria-required="true" :readonly="bform.tl">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix"> {{TOKEN}} <a href="#/" class="ml-3 text-secondary" @click="block('t')"><i class="fas" :class="{'fa-lock':bform.tl, 'fa-unlock-alt':!bform.tl}"></i></a> </div>
                                </div>
                                <div class="invalid-feedback"> Minimum quantity is {{minbuy}} </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="buyPrice" id="buy-price" aria-labelledby="buy-price-label" v-if="buylimit.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="buy-total-label">Price</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input id="buyPrice" type="number" v-on:keyup="bcalc('p')" v-model="buyPrice" placeholder="0" required step="0.000001" min="0.000001" aria-required="true" class="form-control bg-dark border-dark text-info" :readonly="bform.pl">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix"> <span v-if="buyhive.checked">HIVE</span> <span v-if="buyhbd.checked">HBD</span> /{{TOKEN}} <a href="#/" class="ml-3 text-secondary" @click="block('p')"><i class="fas" :class="{'fa-lock':bform.pl, 'fa-unlock-alt':!bform.pl}"></i></a> </div>
                                </div>
                                <div class="invalid-feedback"> Minimum price is 0.000001 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="buyHiveTotal" id="buy-hive-total" aria-labelledby="buy-hive-total-label" v-if="buyhive.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="buy-hive-total-label">Total</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" class="form-control bg-dark text-info border-dark" :readonly="bform.cl" v-model="buyHiveTotal" id="buyHiveTotal" required v-on:keyup="bcalc('c')" placeholder="0" :min="minbuy" step="0.001" :max="parseFloat(barhive) < parseFloat(maxhbuy) ? toFixed(parseFloat(barhive),3) : maxhbuy" aria-required="true">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HIVE <a href="#/" class="ml-3 text-secondary" @click="block('c')" v-if="buylimit.checked"><i class="fas" :class="{'fa-lock':bform.cl, 'fa-unlock-alt':!bform.cl}"></i></a> </div>
                                </div>
                                <div class="invalid-feedback"> Your balance is {{barhive}} - minimum: {{minbuy}} - max: {{parseFloat(barhive) < parseFloat(maxhbuy) ? toFixed(parseFloat(barhive),3) : maxhbuy}}{{parseFloat(barhive) < parseFloat(maxhbuy) ? '' : '(Liquidity)'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="buyHBDTotal" id="buy-hbd-total" aria-labelledby="buy-hbd-total-label" v-if="buyhbd.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="buy-hbd-total-label">Total</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" class="form-control bg-dark text-info border-dark" :readonly="bform.cl" v-model="buyHBDTotal" id="buyHBDTotal" required v-on:keyup="bcalc('c')" placeholder="0" :min="minbuy" step="0.001" :max="parseFloat(barhbd) < parseFloat(maxdbuy) ? toFixed(parseFloat(barhbd),3) : maxdbuy" aria-required="true">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HBD <a href="#/" class="ml-3 text-secondary" @click="block('c')" v-if="buylimit.checked"><i class="fas" :class="{'fa-lock':bform.cl, 'fa-unlock-alt':!bform.cl}"></i></a> </div>
                                </div>
                                <div class="invalid-feedback"> Your balance is {{barhbd}} - minimum: {{minbuy}} - max: {{parseFloat(barhbd) < parseFloat(maxdbuy) ? toFixed(parseFloat(barhbd),3) : maxdbuy}}{{parseFloat(barhbd) < parseFloat(maxdbuy) ? '' : '(Liquidity)'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="buyHours" id="buy-hours" aria-labelledby="buy-hours-label" v-if="buylimit.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="buy-total-label">Expiration</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input id="buyHours" v-model="buyHours" type="number" required step="1" min="1" max="720" aria-required="true" class="form-control bg-dark border-dark text-info" :readonly="buymarket.checked">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HOURS</div>
                                </div>
                                <div class="invalid-feedback"> Expiration must be between 1 and 720 hours </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">Buy</button>
                </div>
            </form>
        </div>
        <div class="mt-3 col-md-6">
            <h4>Sell {{TOKEN}}</h4>
            <form id="sellForm" @submit.prevent="validateForm('sellForm', 'sellFormValid');sellDEX()" name="sell" class="form-horizontal needs-validation" novalidate>
                <div class="form-group" id="sell-type" aria-labelledby="sell-type-label">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 bv-no-focus-ring col-form-label" id="sell-type-label">Order Type</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-warning active">
                                        <input type="radio" name="sellType" id="selllimit" checked @click="toggleselllimit('limit');setValue('sellHours', 720);setValue('sellPrice', buyhive.checked ? hivebuys[0]?.rate || 0 : hbdbuys[0]?.rate || 0 );slock()">
                                        LIMIT </label>
                                    <label class="btn btn-outline-warning">
                                        <input type="radio" name="sellType" id="sellmarket" @click="toggleselllimit('market');setValue('sellHours', 0);setValue('sellPrice', 0);setValue('sellHiveTotal', 0);setValue('sellHBDTotal', 0);slock()">
                                        MARKET </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="small text-muted">BALANCE<br>
                                <a href="#/" @click="setValue('sellQuantity',balance)">{{formatNumber(bartoken,3,'.',',')}} {{TOKEN}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="sellQuantity" id="sell-qty" aria-labelledby="sell-qty-label">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="sell-qty-label">Quantity</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" v-on:keyup="scalc('t')" required class="form-control bg-dark border-dark text-info" v-model="sellQuantity" id="sellQuantity" placeholder="0" :min="minsell" step="0.001" :readonly="sform.tl" aria-required="true" :max="parseFloat(bartoken)">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">{{TOKEN}}<a href="#/" class="ml-3 text-secondary" @click="slock('t')" v-if="selllimit.checked"><i class="fas" :class="{'fa-lock':sform.tl, 'fa-unlock-alt':!sform.tl}"></i></a></div>
                                </div>
                                <div class="invalid-feedback"> Your balance is {{(accountapi.balance/1000)}} - minimum quantity is {{minsell}} </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="sellPrice" id="sell-price" aria-labelledby="sell-price-label" v-if="!sellmarket.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="sell-total-label">Price</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input id="sellPrice" v-on:keyup="scalc('p')" v-model="sellPrice" type="number" placeholder="0" required step="0.000001" min="0.000001" aria-required="true" class="form-control bg-dark border-dark text-info" :readonly="sform.pl">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix"><span v-if="buyhive.checked">HIVE</span><span v-if="buyhbd.checked">HBD</span>/{{TOKEN}}<a href="#/" class="ml-3 text-secondary" @click="slock('p')" v-if="selllimit.checked"><i class="fas" :class="{'fa-lock':sform.pl, 'fa-unlock-alt':!sform.pl}"></i></a></div>
                                </div>
                                <div class="invalid-feedback"> Minimum price is 0.000001 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="sellHiveTotal" id="sell-hive-total" aria-labelledby="sell-hive-total-label" v-if="buyhive.checked && selllimit.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="sell-hive-total-label">Total</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" class="form-control bg-dark border-dark text-info" :readonly="sform.cl" id="sellHiveTotal" required v-model="sellHiveTotal" v-on:keyup="scalc('c')" placeholder="0" min="0.001" step="0.001" aria-required="true">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HIVE<a href="#/" class="ml-3 text-secondary" @click="slock('c')" v-if="selllimit.checked"><i class="fas" :class="{'fa-lock':sform.cl, 'fa-unlock-alt':!sform.cl}"></i></a></div>
                                </div>
                                <div class="invalid-feedback"> Minimum total is 0.001 - increase the Price or use Market Type. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="sellHBDTotal" id="sell-hbd-total" aria-labelledby="sell-hbd-total-label" v-if="buyhbd.checked && selllimit.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="sell-hbd-total-label">Total</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input type="number" class="form-control bg-dark border-dark text-info" :readonly="sform.cl" id="sellHBDTotal" v-model="sellHBDTotal" required placeholder="0" min="0.001" step="0.001" aria-required="true">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HBD<a href="#/" class="ml-3 text-secondary" @click="slock('c')" v-if="selllimit.checked"><i class="fas" :class="{'fa-lock':sform.cl, 'fa-unlock-alt':!sform.cl}"></i></a></div>
                                </div>
                                <div class="invalid-feedback"> Minimum total is 0.001 - increase the Price or use Market Type. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" for="sellHours" id="sell-hours" aria-labelledby="sell-hours-label" v-if="!sellmarket.checked">
                    <div class="form-row">
                        <legend tabindex="-1" class="col-sm-4 col-form-label" id="sell-total-label">Expiration</legend>
                        <div tabindex="-1" role="group" class="col">
                            <div role="group" class="input-group">
                                <input id="sellHours" v-on:keyup="scalc('c')" v-model="sellHours" type="number" required step="1" min="1" max="720" aria-required="true" class="form-control bg-dark border-dark text-info" :readonly="sellmarket.checked">
                                <div class="input-group-append">
                                    <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix">HOURS</div>
                                </div>
                                <div class="invalid-feedback"> Expiration must be between 1 and 720 hours </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-danger">Sell</button>
                </div>
            </form>
        </div>
    </div>
</div>