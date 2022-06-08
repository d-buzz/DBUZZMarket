<div class="modal fade" id="sendHiveModal" tabindex="-1" role="dialog" aria-labelledby="sendHiveModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="sendHiveTitle">Send HIVE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="sendhive" dmx-bind:action="javascript:hivesend('{{sendhiveto.value}}','{{sendhiveamount.value}}','{{sendhivememo.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sendhivefrom">From:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendhivefrom" type="text" dmx-bind:placeholder="{{dluxGetAccount.data.result[0].name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sendhiveto">To:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input class="form-control" id="sendhiveto" type="text" placeholder="Recipient">
                        </div>
                    </div>
                    <div class="form-group">
                        <label id="sendhiveamountlab" for="sendhiveamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{accountapi.data.result[0].balance.parseFloat()}}', 'sendhiveamount')">{{((accountapi.data.result[0].balance.parseFloat())).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="sendhiveamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text" id="sendformunits">HIVE</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="sendhivememogroup">
                        <label for="sendhivememo">Memo:</label>
                        <div class="input-group">
                            <input class="form-control" id="sendhivememo" type="text" placeholder="Include a memo (optional)">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="sendhivemodalsend" type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
