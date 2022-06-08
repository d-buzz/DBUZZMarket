<dmx-data-detail id="auctions_detail" dmx-bind:data="auctionsview.data" key="uid">
    <div class="modal fade " id="auctionsModal" tabindex="11" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full modal-xl modal-dialog-centered" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="card border-0 text-white bg-dark ">
                    <div class="card-header border-0 d-flex align-items-center justify-content-between" dmx-bind:id="{{auctions_detail.data.script}}{{auctions_detail.data.uid}}-nftauctiondetailheader">{{auctions_detail.data.script.getSetDetailsColors(auctions_detail.data.uid+'-nftauctiondetailheader')}}
                        <div class="rounded-pill d-flex align-items-center p-2" style="background-color: black">
                            <h2 class="m-0 px-2">{{auctions_detail.data.uid}}</h2>
                        </div>
                        <h3 class="card-title lead border border-dark rounded mb-0 p-2"><a dmx-bind:href="/nfts/set/{{auctions_detail.data.set}}" style="color: black">{{auctions_detail.data.set}} NFT</a></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-img-top w-100" dmx-bind:id="detail-image-{{auctions_detail.data.set}}-{{auctions_detail.data.uid}}" dmx-bind:alt="{{auctions_detail.data.set}}-{{auctions_detail.data.uid}}">{{auctions_detail.data.uid.nftDetailWell(auctions_detail.data.script, auctions_detail.data.set)}}</div>
                        </div>
                        <div class="col-md-6">
                            <div dmx-bind:id="{{auctions_detail.data.script}}{{auctions_detail.data.uid}}-header"  style="-webkit-background-clip: text;color: transparent;">{{auctions_detail.data.script.getSetDetailsColorsTxt(auctions_detail.data.uid+'-header')}}
                                <div class="mt-3">
                                    <h1 class="text-center">{{auctions_detail.data.name_long}}<i dmx-bind:id="{{auctions_detail.data.script}}{{auctions_detail.data.uid}}icon" class="ml-3"></i></h1>
                                    {{auctions_detail.data.script.getSetDetailsIcon(auctions_detail.data.uid+'icon')}}</div>
                            </div>
                            <p dmx-bind:id="{{auctions_detail.data.script}}descriptionp"> {{auctions_detail.data.script.getSetDetails('Description', 'descriptionp', 'innerText')}} </p>

                            <div dmx-bind:id="{{auctions_detail.data.script}}-{{auctions_detail.data.uid}}-attributes" class="d-flex flex-wrap"> {{auctions_detail.data.script.getNFTDetails(auctions_detail.data.uid)}} </div>
                        </div>
                    </div>

                    <div class="text-center " style="background: crimson">
                        <h5 dmx-bind:id="detail-timer-{{auctions_detail.data.set}}-{{auctions_detail.data.uid}}" class="mb-0 lead">{{auctions_detail.data.time.animateTime(auctions_detail.data.set, auctions_detail.data.uid, 1)}}</h5>
                    </div>

                    <div class="card-body text-center">
                        <div class="d-flex justify-content-around">

                            <div><small><u>Seller</u></small>
                                <h6><a dmx-bind:href="/@{{auctions_detail.data.by}}#inventory">{{auctions_detail.data.by}}</a></h6>
                            </div>
                            <div><small><u>Starting Price</u></small>
                                <h6>{{auctions_detail.data.initial_price.nai()}}</h6>
                            </div>
                            <div><small><u>High Bidder</u></small>
                                <h6><a dmx-bind:href="/@{{auctions_detail.data.bidder}}#inventory">{{auctions_detail.data.bidder}}</a></h6>
                            </div>
                            <div><small><u>Current Bid</u></small>
                                <h6>{{auctions_detail.data.price.nai()}}</h6>
                            </div>
                        </div>
                        <form dmx-show="(auctions_detail.data.by != userCookie.value)">
                            <div class="form-group" for="buyQuantity" id="buy-qty" aria-labelledby="buy-qty-label" dmx-hide="buymarket.checked">
                                <div class="form-row col-lg-6 my-3 mx-auto">
                                    <legend tabindex="-1" class="col-sm-4 col-form-label" id="auctionNFTbid">Bid Amount:</legend>
                                    <div tabindex="-1" role="group" class="col">
                                        <div role="group" class="input-group">
                                            <input type="number" required class="form-control bg-dark border-black text-info" id="auctionNFTbid" dmx-bind:value="{{((auctions_detail.data.price.amount/1000)+1)}}" placeholder="0" min="0.001" step="0.001" aria-required="true" >
                                            <div class="input-group-append">
                                                <div class="input-group-text bg-dark border-black r-radius-hotfix text-white-50">{{auctions_detail.data.price.token}}</div>
                                            </div>
                                            <div class="invalid-feedback"> Minimum quantity is 0.001 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-info" dmx-on:click="bidNFT('{{auctions_detail.data.set}}','{{auctions_detail.data.uid}}','{{auctionNFTbid.value}}','{{auctions_detail.data.price.token}}', statusWaiter)">Place Bid</button>
                        </form>

                    </div>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <h2><a class="text-muted p-3" href="#" dmx-on:click="auctions_iterator.prev();auctions_detail.select(auctions_iterator.value.uid)"><i class="fas fa-caret-square-left"></i></a></h2>
                    <small class="ml-auto text-muted"><i>Item {{auctions_iterator.index + 1}} of {{auctionsview.data.count()}}</i></small>
                    <h2 class="ml-auto"><a class="text-muted p-3" href="#" dmx-on:click="auctions_iterator.next();auctions_detail.select(auctions_iterator.value.uid)"><i class="fas fa-caret-square-right"></i></a></h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</dmx-data-detail>