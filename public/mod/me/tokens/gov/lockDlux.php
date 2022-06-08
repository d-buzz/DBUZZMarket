<div class="modal fade" id="lockgovDluxModal" tabindex="-1" role="dialog" aria-labelledby="lockgovDluxModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content bg-darker text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="powerDluxTitle">Lock Gov DLUX</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="close text-white">×</span></button>
            </div>
            <form name="lockdlux" dmx-bind:action="javascript:dluxgovup('{{lockgovdluxamount.value}}')">
                <div class="modal-body">
                    <div class="form-group">
                        <label id="lockgovdluxamountlab" for="lockgovdluxamount">Amount (Balance <a href="#" dmx-on:click="javascript:insertBal('{{usertoken.data.balance/1000}}','lockgovdluxamount')">{{((usertoken.data.balance)/1000).formatNumber(3,'.',',')}}</a>):</label>
                        <div class="input-group">
                            <input class="form-control" id="lockgovdluxamount" type="number" step="0.001" min="0.001" placeholder="1.000">
                            <div class="input-group-append">
                                <div class="input-group-text">DLUX</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="lockgovdluxsubmitbutton">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>
