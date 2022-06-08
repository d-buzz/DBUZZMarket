<div class="modal fade" id="sendHbdModal" tabindex="-1" role="dialog" aria-labelledby="sendHbdModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="sendHbdTitle">Send HBD</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="sendhbd" dmx-bind:action="javascript:hbdsend('{{sendhbdto.value}}','{{sendhbdamount.value}}','{{sendhbdmemo.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sendhbdfrom">From:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendhbdfrom" type="text" dmx-bind:placeholder="{{dluxGetAccount.data.result[0].name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sendhbdto">To:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendhbdto" type="text" placeholder="Recipient">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="sendhbdamountlab" for="sendhbdamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{accountapi.data.result[0].hbd_balance.parseFloat()}}', 'sendhbdamount')">{{((accountapi.data.result[0].hbd_balance.parseFloat())).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="sendhbdamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text" id="sendhbdformunits">HBD</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="sendhbdmemogroup">
                        <label for="sendhbdmemo">Memo:</label>
                        <div class="input-group">
                            <input class="form-control" id="sendhbdmemo" type="text" placeholder="Include a memo (optional)">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="sendhbdmodalsend" type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
