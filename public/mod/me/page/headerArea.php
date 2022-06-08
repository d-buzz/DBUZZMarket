<div class="container-fluid bg-darker border-bottom">
    <div class="container">
        <!-- pfp and info -->
        <div class="row pt-3">
            <div class="col-md-8 text-white">
                <div class="d-flex flex-wrap">
                    <div class="d-flex"><img dmx-bind:src="https://images.hive.blog/u/{{dluxGetAccount.data.result[0].name}}/avatar" alt="" class="rounded-circle bg-light mr-4 cover profile-img"></div>
                    <div class="d-flex flex-column">
                        <div class="d-flex">
                            <p class="display-4 mb-0">{{dluxGetAccount.data.result[0].name}}</p>
                        </div>
                        <div class="d-flex"><small class="lead p-2">{{dluxGetAccount.data.result[0].posting_json_metadata.parseJSON().profile.about}}</small></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center m-auto">
                <button type="button" class="btn btn-outline-primary dropdown-toggle drop-no-arrow btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Actions<i class="fas fa-ellipsis-h ml-2"></i></button>
                <div class="dropdown-menu nav-item dropdown-menu-right"> <a class="dropdown-item" type="button">Follow</a> <a class="dropdown-item" type="button">Unfollow</a> <a class="dropdown-item" type="button">Send DLUX</a></div>
            </div>
        </div>
        <!-- nav tabs -->
        <ul id="usertabs" class="nav nav-tabs bg-darker mx-0 px-0 mt-5 border-bottom-0" role="tablist">
            <li class="nav-item"> <a class="nav-link" id="wallettab" role="tab" data-toggle="tab" aria-controls="wallet" aria-expanded="true" href="#wallet">Wallet</a></li>
            <li class="nav-item"> <a class="nav-link" id="inventorytab" role="tab" data-toggle="tab" aria-controls="inventory" aria-expanded="true" href="#inventory">Inventory</a></li>
            <li class="nav-item"> <a class="nav-link" id="nodestab" role="tab" data-toggle="tab" aria-controls="nodes" aria-expanded="true" href="#nodes">Nodes</a></li>
            <li class="nav-item"> <a class="nav-link" id="settingstab" role="tab" data-toggle="tab" aria-controls="settings" aria-expanded="true" href="#settings">Settings</a></li>
        </ul>
    </div>
</div>