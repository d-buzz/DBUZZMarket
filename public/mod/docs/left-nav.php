<div class="col-md-3 col-xl-2 bd-sidebar">
    <form role="search" class="bd-search d-flex align-items-center">
              <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                  <input type="search" class="form-control ds-input" id="search-input" placeholder="Search..." aria-label="Search for..." autocomplete="off" data-docs-version="4.4" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;">
                  <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                  <span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;">
                  <div class="ds-dataset-1"></div>
                  </span>
              </span>
        <button class="btn btn-link bd-search-docs-toggle d-md-none p-0 ml-3" type="button" data-toggle="collapse" data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg></button>
    </form>

    <nav class="collapse bd-links mx-1" id="bd-docs-nav" aria-label="Main navigation">
        <div class="d-flex">
            <div class="btn-group flex-fill my-1" role="group" aria-label="Expand / Collapse">
                <button type="button" id="expand" class="btn btn-secondary">Expand</button>
                <button type="button" id="collapse" class="btn btn-secondary">Collapse</button>
            </div>
        </div>
        <div id="accordion">
            <div class="card bg-dark ">
                <div class="card-header" id="headingAbout">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="false" aria-controls="collapseAbout"><i class="fas fa-info-circle fa-fw mr-2"></i>About<i class="fas fa-angle-down fa-fw ml-1"></i></button>
                    </h5>
                </div>
                <div id="collapseAbout" class="collapse show" aria-labelledby="headingAbout">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link scrollto text-white" href="#introduction">Introduction</a></li>
                            <li class="nav-item"><a class="nav-link scrollto text-white" href="#faq">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link scrollto text-white" href="#whitepaper">Whitepaper</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header" id="headingCreate">
                    <h5 class="mb-0 d-inline">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseCreate" aria-expanded="true" aria-controls="collapseCreate"><i class="fas fa-drafting-compass fa-fw mr-2"></i>Create<i class="fas fa-angle-down fa-fw ml-1"></i></button>
                    </h5>
                </div>
                <div id="collapseCreate" class="collapse" aria-labelledby="headingCreate">
                    <div class="card-body p-2" id="createContainer">
                        <div class="card bg-dark">
                            <div class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapseCreateSDK"><i class="fas fa-layer-group fa-fw mr-2"></i>SDK<i class="fas fa-angle-down fa-fw ml-1"></i></a>
                            </div>
                            <div class="card-body collapse" id="collapseCreateSDK">
                                <ul class="nav flex-column">
                                    <li class="nav-item scrollto"><a class="nav-link text-white" href="#blockchain-ops">Blockchain Operations</a></li>
                                    <li class="nav-item scrollto"><a class="nav-link text-white" href="#second-layer">Second Layer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header" id="headingExchange">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseExchange" aria-expanded="false" aria-controls="collapseThree"><i class="fas fa-store fa-fw mr-2"></i>Market<i class="fas fa-angle-down fa-fw ml-1"></i></button>
                    </h5>
                </div>
                <div id="collapseExchange" class="collapse" aria-labelledby="headingExchange">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link text-white" href="#token">Token</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#nft">NFT</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#dex">DEX</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#accounts">Account Creation</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#pinning">Asset Pinning</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header" id="headingBlockchain">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseBlockchain" aria-expanded="false" aria-controls="collapseBlockchain"><i class="fas fa-link fa-fw mr-2"></i>Blockchain<i class="fas fa-angle-down fa-fw ml-1"></i></button>
                    </h5>
                </div>
                <div id="collapseBlockchain" class="collapse" aria-labelledby="headingBlockchain">
                    <div class="card-body">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link text-white" href="#nodes">Nodes</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#api">APIs</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#ipfs">IPFS</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#hive">HIVE</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>