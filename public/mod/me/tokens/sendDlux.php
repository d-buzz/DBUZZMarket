<div class="modal fade" id="sendDluxModal" tabindex="-1" role="dialog" aria-labelledby="sendDluxModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="sendDluxTitle">Send DLUX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="senddlux" dmx-bind:action="javascript:dluxsend('{{senddluxto.value}}','{{senddluxamount.value}}','{{senddluxmemo.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="senddluxfrom">From:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="senddluxfrom" type="text" dmx-bind:placeholder="{{dluxGetAccount.data.result[0].name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senddluxto">To:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="senddluxto" type="text" placeholder="Recipient">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="senddluxamountlab" for="senddluxamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{usertoken.data.balance/1000}}', 'senddluxamount')">{{((usertoken.data.balance)/1000).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="senddluxamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text" id="sendformunits">DLUX</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="senddluxmemogroup">
                        <label for="senddluxmemo">Memo:</label>
                        <div class="input-group">
                            <input class="form-control" id="senddluxmemo" type="text" placeholder="Include a memo (optional)">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="sendmodalsend" type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>

