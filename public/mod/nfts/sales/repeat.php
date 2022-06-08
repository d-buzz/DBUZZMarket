<div class="d-flex justify-content-between align-items-center" style="border-bottom: #FFFFFF thick solid">
    <h1 class="text-white p-0 m-0">NFT Sales</h1>
    <div class="d-none d-xl-block">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="sellNFTsizeXL" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="5" selected>5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="d-none d-lg-block d-xl-none">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="sellNFTsizeLG" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="4" selected>4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="d-none d-md-block d-lg-none">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="sellNFTsizeMD" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="3" selected>3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="d-none d-sm-block d-md-none">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="sellNFTsizeSM" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="2" selected>2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
</div>
<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1"
     dmx-bind:class="row row-cols-xl-{{sellNFTsizeXL.value}} row-cols-lg-{{sellNFTsizeLG.value}} row-cols-md-{{sellNFTsizeMD.value}} row-cols-sm-{{sellNFTsizeSM.value}} row-cols-1"

     style="margin-left: -8px; margin-right: -8px">

    <div dmx-repeat:repeatsalesview1="salesview.data">
        <div class="card text-white bg-dark m-2" >
            <div class="card-header border-0 d-flex align-items-center" dmx-bind:id="{{script}}{{uid}}-nftauctionheader">{{script.getSetDetailsColors(uid+'-nftauctionheader')}}
                <div class="rounded-pill d-flex align-items-center p-2" style="background-color: black">
                    <h2 class="m-0 px-2">{{uid}}</h2>
                </div>
                <h3 class="card-title lead border rounded border-dark p-2 ml-auto mb-0 "><a dmx-bind:href="/nfts/set/{{set}}" class="lead" style="color: black">{{set}} NFT</a></h3>
            </div>
            <a href="#salesModal" class="a-1" data-toggle="modal" dmx-on:click="sales_iterator.select($index);sales_detail.select(uid)">
                <div class="card-img-top" dmx-bind:id="image-{{set}}-{{uid}}" dmx-bind:alt="image-{{set}}-{{uid}}">{{uid.nftImageWell(script, set)}}</div>
                <div class="card-body">
                    <p class="card-text text-center">Price: <u>{{price.nai()}}</u></p>
                </div>
            </a>
            <div class="card-footer text-center">
                <p class="lead">
                    <button id="cancelNFTbtn1" class="btn btn-warning btn-lg" dmx-show="(by == userCookie.value)" dmx-on:click="sellNFTcancel('{{set}}','{{uid}}')">Cancel</button>
                    <button id="buyNFTbtn1" class="btn btn-primary btn-lg" dmx-show="(by != userCookie.value)" href="#salesModal" data-toggle="modal" dmx-on:click="sales_iterator.select($index);sales_detail.select(uid)">Buy NFT</button>
                </p>
            </div>
        </div>
    </div>