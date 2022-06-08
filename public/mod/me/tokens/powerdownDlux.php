<div class="modal fade" id="powerdownDluxModal" tabindex="-1" role="dialog" aria-labelledby="powerdownDluxModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="powerdownDluxTitle">Power Down DLUX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="powerdowndlux" dmx-bind:action="javascript:powerDown('{{powerdowndluxamount.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label id="dluxamountlab" for="powerdowndluxamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{usertoken.data.poweredUp/1000}}','powerdowndluxamount')">{{((usertoken.data.poweredUp)/1000).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="powerdowndluxamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text">DLUX</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="powerdowndluxsubmit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
