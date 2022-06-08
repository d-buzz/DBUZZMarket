<div dmx-repeat:repeatauctiontoken1="auctionsview.data">
    <div class="m-2 bg-dark card text-white">
        <div class="card-header d-flex align-items-center border-0" dmx-bind:id="{{script}}{{uid}}-nftauctionheader">{{script.getSetDetailsColors(uid+'-nftauctionheader')}}
            <div class="rounded-pill d-flex align-items-center p-2" style="background-color: black">
                <h2 class="m-0 px-2">{{uid}}</h2>
            </div>
            <h3 class="card-title lead border rounded border-dark p-2 ml-auto mb-0 "><a dmx-bind:href="/nfts/set/{{set}}" class="lead" style="color: black">{{set}} NFT</a></h3>
        </div>
        <a href="#auctionsModal" class="a-1" data-toggle="modal" dmx-on:click="auctions_iterator.select($index);auctions_detail.select(uid)">
            <div class="card-img-top" dmx-bind:id="image-{{set}}-{{uid}}" dmx-bind:alt="image-{{set}}-{{uid}}">{{uid.nftImageWell(script, set)}}</div>
            <div class="text-center " style="background: crimson">
                <h5 dmx-bind:id="timer-{{set}}-{{uid}}" class="mb-0 lead">{{time.animateTime(set, uid)}}</h5>
            </div>
            <div class="card-body d-flex flex-column text-center"><span>Bid: <u>{{price.nai()}}</u></span></div>
        </a>
        <div class="card-footer text-center d-flex justify-content-between align-items-center"> <span>{{bids}} Bids</span>
            <button href="#auctionsModal" class="btn btn-primary btn-lg" style="min-width:100px" data-toggle="modal" dmx-show="(by != userCookie.value)" dmx-on:click="auctions_iterator.select($index);auctions_detail.select(uid)" role="button">Bid</button>
            <button href="#auctionsModal" class="btn btn-secondary btn-lg" style="min-width:100px" data-toggle="modal" dmx-show="(by == userCookie.value)" dmx-on:click="auctions_iterator.select($index);auctions_detail.select(uid)" role="button">Auctioned</button>
        </div>
    </div>
</div>