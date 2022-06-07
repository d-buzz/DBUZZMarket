<!-- send token form -->
<div id="userdlux" class="mx-4" v-if="features.send_B">
    <div class="dropdown show d-flex align-items-center "><a class="text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{formatNumber(bartoken,3,'.',',')}} {{TOKEN}}</a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right" style="width: 300px">
            <h6 class="dropdown-header text-center">SEND {{TOKEN}}</h6>
            <form id="sendForm" @submit.prevent="validateForm('sendForm', 'sendFormValid');tokenSend()" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="sendlarynxto">To:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-dark border-dark text-white-50">@</div>
                        </div>
                        <input class="form-control bg-dark border-dark text-info" v-model="sendTo" @blur="checkAccount('sendTo', 'sendAllowed')" required id="sendlarynxto" type="text" placeholder="Recipient">
                    </div>
                </div>
                <div class="form-group">
                    <label id="sendlarynxamountlab" for="sendlarynxamount">Amount:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" v-model="sendAmount" required id="sendlarynxamount" type="number" step="0.001" min="0.001" :max="parseFloat(bartoken)" placeholder="0.000">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dark border-dark text-white-50" id="sendformunits"> {{TOKEN}} </div>
                        </div>
                    </div>
                    <div class="small pt-2"><a href="#/" @click="setValue('sendAmount', parseFloat(bartoken))" class="text-warning">{{formatNumber(bartoken,3,'.',',')}} {{TOKEN}}</a> Available</div>
                </div>
                <div class="form-group" id="sendlarynxmemogroup">
                    <label for="sendlarynxmemo">Memo:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" v-model="sendMemo" id="sendlarynxmemo" type="text" placeholder="Include a memo (optional)">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button id="sendlarynxmodalsend" type="submit" class="btn btn-warning">Send<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
