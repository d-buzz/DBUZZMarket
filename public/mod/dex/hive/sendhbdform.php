<!-- send hbd form -->
<div id="userhbd" class="mx-4">
    <div class="dropdown show d-flex align-items-center "><a class="text-success" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{formatNumber(barhbd,3,'.',',')}} HBD</a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right" style="width: 300px">
            <h6 class="dropdown-header text-center">SEND HBD</h6>
            <form name="sendhbd" id="hbdForm" @submit.prevent="validateForm('hbdForm', 'hbdFormValid');sendhbd()" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="sendhbdto">To:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-dark border-dark text-white-50">@</div>
                        </div>
                        <input class="form-control bg-dark border-dark text-info" @blur="checkAccount('sendHBDTo', 'sendHBDAllowed')" required v-model="sendHBDTo" type="text" placeholder="Recipient">
                    </div>
                </div>
                <div class="form-group">
                    <label id="sendhbdamountlab" for="sendhbdamount">Amount:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" required v-model="sendHBDAmount" type="number" step="0.001" min="0.001" :max="parseFloat(barhbd)" placeholder="0.000">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dark border-dark text-white-50" id="sendhbdformunits"> HBD </div>
                        </div>
                    </div>
                    <div class="small pt-2"><a href="#/" @click="setValue('sendHBDAmount',parseFloat(barhbd))" class="text-success">{{formatNumber(barhbd,3,'.',',')}} HBD</a> Available</div>
                </div>
                <div class="form-group" id="sendhbdmemogroup">
                    <label for="sendhbdmemo">Memo:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" v-model="sendHBDMemo" type="text" placeholder="Include a memo (optional)">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button id="sendhbdmodalsend" type="submit" class="btn btn-success">Send<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>