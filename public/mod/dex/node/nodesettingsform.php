<!-- node settings form -->
<div id="usernode" class="ml-3" v-if="isnode">
    <div class="dropdown show d-flex align-items-center "><a class="btn btn-sm btn-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cog"></i></a>
        <div class="dropdown-menu p-4 text-white-50 text-left bg-black dropdown-menu-left" style="width: 300px">
            <h6 class="dropdown-header text-center">{{TOKEN}} NODE SETTINGS</h6>
            <h4 class="text-center text-white-50">@{{account}}</h4>
            <form name="nodesettings" class="needs-validation" novalidate>
                <div class="form-group" v-for="opt in features.node.opts">
                    <label :for="opt.json">{{opt.S}}:</label>
                    <div class="input-group">
                        <!-- <div class="input-group-prepend">
                          <div class="input-group-text bg-dark border-dark text-white-50">https://</div>
                        </div> -->
                        <input v-if="opt.type == 'text'" :type="opt.type" v-model="opt.val" class="form-control bg-dark border-dark text-info" :id="opt.json" :placeholder="opt.info">
                        <input v-if="opt.type == 'number'" :type="opt.type" v-model="opt.val" class="form-control bg-dark border-dark text-info" :id="opt.json" :placeholder="opt.info" :max="opt.max" :min="opt.min">
                    </div>
                </div>
                <!-- <div class="form-group"> <br>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="escrowCheck" checked disabled>
                    <label class="custom-control-label" for="escrowCheck">Escrow Agent</label>
                  </div>
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="mirrorCheck" disabled>
                    <label class="custom-control-label" for="mirrorCheck">Mirror Leader</label>
                  </div>
                </div> -->
                <div class="text-center mt-3">
                    <button id="savenodesettings" type="button" class="btn btn-secondary" @click="saveNodeSettings()">Save<i class="far fa-save ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
