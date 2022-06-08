<div class="modal fade" id="unlockgovDluxModal" tabindex="-1" role="dialog" aria-labelledby="unlockgovDluxModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="unlockgovDluxTitle">Unlock Gov DLUX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="unlockdlux" dmx-bind:action="javascript:govDown('{{unlockgovdluxamount.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label id="unlockgovdluxamountlab" for="unlockgovdluxamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{usertoken.data.gov/1000}}','unlockgovdluxamount')">{{((usertoken.data.gov)/1000).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="unlockgovdluxamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text">DLUX</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="unlockgovdluxsubmit" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
