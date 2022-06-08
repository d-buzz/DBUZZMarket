<div class="d-flex justify-content-between align-items-center" style="border-bottom: #FFFFFF thick solid">
    <h1 class="text-white p-0 m-0">NFT Auctions</h1>
    <div class="d-none d-xl-block">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="auctionNFTsizeXL" name="Max Columns" class="btn btn-secondary ml-2">
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
            <select id="auctionNFTsizeLG" name="Max Columns" class="btn btn-secondary ml-2">
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
            <select id="auctionNFTsizeMD" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="3" selected>3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
    <div class="d-none d-sm-block d-md-none">
        <div class="d-flex align-items-center">
            <h5 class="m-0">Columns:</h5>
            <select id="auctionNFTsizeSM" name="Max Columns" class="btn btn-secondary ml-2">
                <option value="2" selected>2</option>
                <option value="1">1</option>
            </select>
        </div>
    </div>
</div>
<div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1"
     dmx-bind:class="row row-cols-xl-{{auctionNFTsizeXL.value}} row-cols-lg-{{auctionNFTsizeLG.value}} row-cols-md-{{auctionNFTsizeMD.value}} row-cols-sm-{{auctionNFTsizeSM.value}} row-cols-1"

     style="margin-left: -8px; margin-right: -8px">