<!-- node collapse region -->
<div id="nodedrawer" class="collapse">
    <div class="py-5">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-3">
                <div class="mr-2">
                    <div role="group" class="input-group">
                        <div class="input-group-prepend l-radius-hotfix"><span class="input-group-text bg-dark border-dark text-secondary" @click="focus('filteraccount')"><i class="fas fa-search"></i></span></div>
                        <input type="text" v-on:keyup="searchRunners()" class="form-control bg-dark border-dark text-info" id="filteraccount" v-model="filteraccount.value" @ aria-required="true" placeholder="Search">
                        <div class="input-group-append p-0 m-0">
                            <div class="input-group-text bg-dark border-dark text-white-50 r-radius-hotfix" style="width: 42px"> <span v-if="filteraccount.value"> <a href="#" class="badge badge-secondary" @click="setValue('filteraccount.value','')"><i class="fas fa-times"></i></a> </span> </div>
                        </div>
                    </div>
                </div>
                <div class=""> <span class="text-muted">{{lapi}} - {{behind}} block(s) behind HIVE</span> </div>
            </div>
            <div class="table-responsive">
                <table role="table" aria-busy="false" aria-colcount="3" class="table table-dark bg-darker text-white-50 table-striped table-hover table-borderless mb-0" id="larynxnodes">
                    <thead role="rowgroup" class="">
                    <tr role="row" class="">
                        <th role="columnheader" v-bind:class="{'col-sort':filteraccount.usera || filteraccount.userd}" class="" aria-colindex="1">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">USER NAME</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.usera}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','account','asc');toggleAPI('usera')"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.userd}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','account','desc');toggleAPI('userd')"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" v-bind:class="{'col-sort':filteraccount.gova || filteraccount.govd}" class="" aria-colindex="2">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">GOV BAL</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.gova}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','g','asc');toggleAPI('gova')"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.govd}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','g','desc');toggleAPI('govd')"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                        <th role="columnheader" v-bind:class="{'col-sort':filteraccount.apia || filteraccount.apid}" class="" aria-colindex="3">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">API (Click to load)</div>
                                <button title="Sort Ascending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.apia}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','api','asc');toggleAPI('apia')"> <i class="fas fa-caret-up"></i></button>
                                <button title="Sort Descending" type="button" class="mx-1 btn btn-sm btn-dark" v-bind:class="{'bg-primary':filteraccount.apid}" @click="sort(!filteraccount.value ? 'runners' : 'runnersSearch','api','desc');toggleAPI('apid')"> <i class="fas fa-caret-down"></i></button>
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody role="rowgroup" class="tbody-scroll-nodes">
                    <tr class="" role="row" v-for="node in runners" v-if="!filteraccount.value">
                        <td role="cell" class="" aria-colindex="1"><a :href="atref(node.account)">@{{node.account}}</a></td>
                        <td role="cell" class="" aria-colindex="2">{{formatNumber(node.g/1000,3,'.',',')}}</td>
                        <td role="cell" class="" aria-colindex="3"><a href="#" @click="setApi(node.api)">{{node.api}}</a></td>
                    </tr>
                    <tr class="" role="row" v-for="node in runnersSearch" v-if="filteraccount.value">
                        <td role="cell" class="" aria-colindex="1"><a :href="atref(node.account)">@{{node.account}}</a></td>
                        <td role="cell" class="" aria-colindex="2">{{formatNumber(node.g/1000,3,'.',',')}}</td>
                        <td role="cell" class="" aria-colindex="3"><a href="#" @click="setApi(node.api)">{{node.api}}</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>