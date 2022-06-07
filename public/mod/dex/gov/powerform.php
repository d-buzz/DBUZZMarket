<!-- power form -->
<div id="userdpwr" class="mx-4" v-if="features.powup_B || features.powdn_B">
    <div class="dropdown show d-flex align-items-center "><a class="text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{formatNumber(barpow,3,'.',',')}} {{TOKEN}}P</a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right" style="width: 300px">
            <h6 class="dropdown-header text-center">{{TOKEN}} POWER</h6>
            <form name="pwrlarynx" id="powForm" @submit.prevent="validateForm('powForm', 'powFormValid');power()" class=" needs-validation" novalidate>
                <div class="form-group text-center">
                    <div class="btn-group btn-group-toggle my-2" data-toggle="buttons">
                        <label class="btn btn-outline-primary active">
                            <input type="radio" name="pwrpair" id="pwrup" :checked="features.powsel_up" @click="setValue('features.powsel_up', true)">
                            PWR UP </label>
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="pwrpair" id="pwrdown" :checked="!features.powsel_up" @click="setValue('features.powsel_up', false)">
                            PWR DOWN </label>
                    </div>
                </div>
                <div class="form-group">
                    <label id="govuplarynxamountlab">Amount</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-primary" v-if="features.powsel_up" v-model="features.pow_val" required id="pwruplarynxamount" type="number" step="0.001" min="0.001" :max="parseFloat(bartoken)" placeholder="0.000">
                        <input class="form-control bg-dark border-dark text-primary" v-if="!features.powsel_up" v-model="features.pow_val" required id="pwrdownlarynxamount" type="number" step="0.001" min="0.001" :max="parseFloat(barpow)" placeholder="0.000">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dark border-dark text-white-50" v-if="features.powsel_up" id="govupformunits"> {{TOKEN}} </div>
                            <div class="input-group-text bg-dark border-dark text-white-50" v-if="!features.powsel_up" id="govdownformunits"> {{TOKEN}}P </div>
                        </div>
                    </div>
                    <div class="small py-2" v-if="features.powsel_up"><a href="#/" @click="setValue('features.pow_val',balance)" class="text-primary">{{formatNumber(bartoken,3,'.',',')}} {{TOKEN}}</a> Available</div>
                    <div class="small py-2" v-if="!features.powsel_up"><a href="#/" @click="setValue('features.pow_val',accountapi.poweredUp/1000)" class="text-primary">{{formatNumber(barpow,3,'.',',')}} {{TOKEN}}P</a> Available</div>
                </div>
                <div class="text-center mt-3">
                    <button id="pwruplarynxmodalsend" type="submit" class="btn btn-primary" v-if="features.powsel_up">Power Up<i class="fas fa-arrow-alt-circle-up ml-2"></i></button>
                    <button id="pwrdownlarynxmodalsend" type="submit" class="btn btn-primary" v-if="!features.powsel_up">Power Down<i class="fas fa-arrow-alt-circle-down ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
