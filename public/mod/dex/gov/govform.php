<!-- gov form -->
<div id="userdgov" class="mx-4" v-if="isnode && (features.govup_B || features.govdn_B)">
    <div class="dropdown show d-flex align-items-center "><a class="text-info" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{formatNumber(bargov,3,'.',',')}} {{TOKEN}}G</a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right" style="width: 300px">
            <h6 class="dropdown-header text-center">{{TOKEN}} GOVERNANCE</h6>
            <h4 class="dropdown-header text-center">Current Threshold: {{formatNumber(stats.gov_threshhold/1000,3,'.',',')}}</h4>
            <form name="govlarynx" id="govForm" @submit.prevent="validateForm('govForm', 'govFormValid');gov()" class="needs-validation" novalidate>
                <div class="form-group text-center">
                    <div class="btn-group btn-group-toggle my-2" data-toggle="buttons">
                        <label class="btn btn-outline-info active">
                            <input type="radio" name="govpair" id="govlock" :checked="features.govsel_up" @click="setValue('features.govsel_up', true)">
                            LOCK </label>
                        <label class="btn btn-outline-info">
                            <input type="radio" name="govpair" id="govunlock" :checked="!features.govsel_up" @click="setValue('features.govsel_up', false)">
                            UNLOCK </label>
                    </div>
                </div>
                <div class="form-group">
                    <label id="govuplarynxamountlab">Amount</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" v-if="features.govsel_up" v-model="features.gov_val" required id="govuplarynxamount" type="number" step="0.001" min="0.001" :max="parseFloat(bartoken)" placeholder="0.000">
                        <input class="form-control bg-dark border-dark text-info" v-if="!features.govsel_up" v-model="features.gov_val" required id="govdownlarynxamount" type="number" step="0.001" min="0.001" :max="parseFloat(bargov)" placeholder="0.000">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dark border-dark text-white-50" v-if="features.govsel_up" id="govupformunits"> {{TOKEN}} </div>
                            <div class="input-group-text bg-dark border-dark text-white-50" v-if="!features.govsel_up" id="govdownformunits"> {{TOKEN}}G </div>
                        </div>
                    </div>
                    <div class="small py-2" v-if="features.govsel_up"><a href="#/" @click="setValue('features.gov_val',balance)" class="text-info">{{formatNumber(bartoken,3,'.',',')}} {{TOKEN}}</a> Available</div>
                    <div class="small py-2" v-if="!features.govsel_up"><a href="#/" @click="setValue('features.gov_val',accountapi.gov/1000)" class="text-info">{{formatNumber(bargov,3,'.',',')}} {{TOKEN}}G</a> Locked</div>
                </div>
                <div class="text-center">
                    <button id="locklarynxmodalsend" type="submit" class="btn btn-info" v-if="features.govsel_up">Lock Gov<i class="fas fa-lock ml-2"></i></button>
                    <button id="unlocklarynxmodalsend" type="submit" class="btn btn-info" v-if="!features.govsel_up">Unlock Gov<i class="fas fa-lock-open ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>