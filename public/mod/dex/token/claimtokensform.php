<!-- claim tokens form -->
<div v-if="hasDrop || accountapi.claim" id="userdlux" class="mx-4">
    <div class="dropdown show d-flex align-items-center "> <a class="btn btn-sm btn-rb" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Claim <i class="fas fa-gift"></i></a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-left" style="width: 300px">
            <h6 class="dropdown-header text-center">CLAIM {{TOKEN}}</h6>
            <form v-if="hasDrop" name="claimlarynxad">
                <div class="form-group">
                    <label>Airdrop:</label>
                    <div class="input-group">
                        <div class="form-control bg-black border-rb text-white text-center">{{dropnai}}</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center mt-3">
                        <button id="claimlarynxad" type="button" class="btn background-rb" @click="dropClaim()">Claim<i class="fas fa-coins ml-2"></i></button>
                    </div>
                </div>
            </form>
            <div class="d-none dropdown-divider dark-divider"></div>
            <form v-if="accountapi.claim" name="claimlarynxrewards">
                <div class="form-group">
                    <label>Rewards:</label>
                    <div class="input-group">
                        <div class="form-control bg-black border-rb text-white text-center">{{toFixed(accountapi.claim/1000,3)}} {{TOKEN}}</div>
                    </div>
                </div>
                <div class="custom-control custom-switch" v-if="isnode && features.rewardSel">
                    <input type="checkbox" class="custom-control-input" v-model="features.reward2Gov" id="claimToGov">
                    <label class="custom-control-label" for="claimToGov">Claim 1/2 to Gov</label>
                </div>
                <div class="form-group">
                    <div class="text-center mt-3">
                        <button id="claimlarynxrewards" type="button" class="btn background-rb" @click="rewardClaim()">Claim<i class="fas fa-coins ml-2"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>