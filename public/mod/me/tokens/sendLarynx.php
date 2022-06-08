<div class="modal fade" id="sendLarynxModal" tabindex="-1" role="dialog" aria-labelledby="sendLarynxModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="sendLarynxTitle">Send LARYNX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="sendlarynx" dmx-bind:action="javascript:dluxsend('{{sendlarynxto.value}}','{{sendlarynxamount.value}}','{{sendlarynxmemo.value}}','spkcc_')">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="senddluxfrom">From:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendlarynxfrom" type="text" dmx-bind:placeholder="{{dluxGetAccount.data.result[0].name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sendlarynxto">To:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendlarynxto" type="text" placeholder="Recipient">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="sendlarynxamountlab" for="sendlarynxamount">Amount (Balance <a href="#"  dmx-on:click="javascript:insertBal('{{larynxtoken.data.balance/1000}}', 'sendlarynxamount')">{{((larynxtoken.data.balance)/1000).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="sendlarynxamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text" id="sendformunits">LARYNX</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="sendlarynxmemogroup">
                        <label for="sendlarynxmemo">Memo:</label>
                        <div class="input-group">
                            <input class="form-control" id="sendlarynxmemo" type="text" placeholder="Include a memo (optional)">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="sendlarynxmodalsend" type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
