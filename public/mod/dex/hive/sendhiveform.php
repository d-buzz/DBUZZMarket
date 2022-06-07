<!-- send hive form -->
<div id="userhive" class="mx-4">
    <div class="dropdown show d-flex align-items-center "><a class="text-danger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{formatNumber(barhive,3,'.',',')}} HIVE</a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-right" style="width: 300px">
            <h6 class="dropdown-header text-center">SEND HIVE</h6>
            <form name="sendhive" id="hiveForm" @submit.prevent="validateForm('hiveForm', 'hiveFormValid');sendhive()" class=" needs-validation" novalidate>
                <div class="form-group">
                    <label for="sendhiveto">To:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text bg-dark border-dark text-white-50">@</div>
                        </div>
                        <input class="form-control bg-dark border-dark text-info" @blur="checkAccount('sendHiveTo', 'sendHiveAllowed')" required v-model="sendHiveTo" type="text" placeholder="Recipient">
                    </div>
                </div>
                <div class="form-group">
                    <label id="sendhiveamountlab" for="sendhiveamount">Amount:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" required v-model="sendHiveAmount" type="number" step="0.001" min="0.001" :max="parseFloat(barhive)" placeholder="0.000">
                        <div class="input-group-append">
                            <div class="input-group-text bg-dark border-dark text-white-50"> HIVE </div>
                        </div>
                    </div>
                    <div class="small pt-2"><a href="#/" @click="setValue('sendHiveAmount',parseFloat(barhive))" class="text-danger">{{formatNumber(barhive,3,'.',',')}} HIVE</a> Available</div>
                </div>
                <div class="form-group" id="sendhivememogroup">
                    <label for="sendhivememo">Memo:</label>
                    <div class="input-group">
                        <input class="form-control bg-dark border-dark text-info" id="sendhivememo" type="text" v-model="sendHiveMemo" placeholder="Include a memo (optional)">
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button id="sendhivemodalsend" type="submit" class="btn btn-danger">Send<i class="fas fa-paper-plane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>