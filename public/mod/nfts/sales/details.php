<dmx-data-detail id="sales_detail" dmx-bind:data="salesview.data" key="uid">
    <div class="modal fade " id="salesModal" tabindex="11" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full modal-xl modal-dialog-centered" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="card border-0 text-white bg-dark ">
                    <div class="card-header border-0 d-flex align-items-center justify-content-between" dmx-bind:id="{{sales_detail.data.script}}{{sales_detail.data.uid}}-nftsalesdetailheader">{{sales_detail.data.script.getSetDetailsColors(sales_detail.data.uid+'-nftsalesdetailheader')}}
                        <div class="rounded-pill d-flex align-items-center p-2" style="background-color: black">
                            <h2 class="m-0 px-2">{{sales_detail.data.uid}}</h2>
                        </div>
                        <h3 class="card-title lead border border-dark rounded mb-0 p-2"><a dmx-bind:href="/nfts/set/{{sales_detail.data.set}}" style="color: black">{{sales_detail.data.set}} NFT</a></h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-img-top w-100" dmx-bind:id="detail-image-{{sales_detail.data.set}}-{{sales_detail.data.uid}}" dmx-bind:alt="{{sales_detail.data.set}}-{{sales_detail.data.uid}}">{{sales_detail.data.uid.nftDetailWell(sales_detail.data.script, sales_detail.data.set)}}</div>
                        </div>
                        <div class="col-md-6">
                            <div dmx-bind:id="{{sales_detail.data.script}}{{sales_detail.data.uid}}-header"  style="-webkit-background-clip: text;color: transparent;">{{sales_detail.data.script.getSetDetailsColorsTxt(sales_detail.data.uid+'-header')}}
                                <div class="mt-3">
                                    <h1 class="text-center">{{sales_detail.data.name_long}}<i dmx-bind:id="{{sales_detail.data.script}}{{sales_detail.data.uid}}-icon" class="ml-3"></i></h1>
                                    {{sales_detail.data.script.getSetDetailsIcon(sales_detail.data.uid+'-icon')}}</div>
                            </div>
                            <p dmx-bind:id="{{sales_detail.data.script}}descriptionp"> {{sales_detail.data.script.getSetDetails('Description', 'descriptionp', 'innerText')}} </p>

                            <div dmx-bind:id="{{sales_detail.data.script}}-{{sales_detail.data.uid}}-attributes" class="d-flex flex-wrap"> {{sales_detail.data.script.getNFTDetails(sales_detail.data.uid)}} </div>
                        </div>
                    </div>

                    <div class="text-center " style="background: crimson">
                        <h5 dmx-bind:id="detail-timer-{{sales_detail.data.set}}-{{sales_detail.data.uid}}" class="mb-0 lead">{{sales_detail.data.time.animateTime(sales_detail.data.set, sales_detail.data.uid, 1)}}</h5>
                    </div>

                    <div class="card-body text-center">
                        <div class="d-flex justify-content-around">

                            <div><small><u>Seller</u></small>
                                <h6><a dmx-bind:href="/@{{sales_detail.data.by}}#inventory">{{sales_detail.data.by}}</a></h6>
                            </div>

                            <div><small><u>Price</u></small>
                                <h6>{{sales_detail.data.price.nai()}}</h6>
                            </div>
                        </div>

                        <button id="cancelNFTbtn1" class="btn btn-warning btn-lg" dmx-show="(sales_detail.data.by == userCookie.value)" dmx-on:click="sellNFTcancel('{{sales_detail.data.set}}','{{sales_detail.data.uid}}')">Cancel</button>
                        <button class="btn btn-lg btn-info" dmx-show="(sales_detail.data.by != userCookie.value)" dmx-on:click="buyNFT('{{sales_detail.data.set}}','{{sales_detail.data.uid}}','{{sales_detail.data.price.amount}}','{{sales_detail.data.price.token}}')">Buy</button>


                    </div>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <h2><a class="text-muted p-3" href="#" dmx-on:click="sales_iterator.prev();sales_detail.select(sales_iterator.value.uid)"><i class="fas fa-caret-square-left"></i></a></h2>
                    <small class="ml-auto text-muted"><i>Item {{sales_iterator.index + 1}} of {{salesview.data.count()}}</i></small>
                    <h2 class="ml-auto"><a class="text-muted p-3" href="#" dmx-on:click="sales_iterator.next();sales_detail.select(sales_iterator.value.uid)"><i class="fas fa-caret-square-right"></i></a></h2>
                </div>
            </div>
        </div>
    </div>
    </div>
</dmx-data-detail>