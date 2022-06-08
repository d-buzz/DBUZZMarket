<dmx-data-detail id="mint_detail" dmx-bind:data="inventoryapi.data.mint_tokens" key="set">
    <div class="modal fade show" id="mintTransferModal" tabindex="11" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-full modal-dialog-centered" role="document">
            <div class="modal-content bg-dark text-white">
                <div class="border border-info bg-darker mx-auto px-5 py-3 rounded col-12">
                    <div class="container-fluid">
                        <h3 class="text-center">Transfer {{mint_detail.data.set}} FT</h3>
                        <ul class="nav nav-pills bg-darker justify-content-center" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" id="giveFTlink" role="tab" data-toggle="tab" aria-controls="giveFT" aria-expanded="true" href="#giveFTtab">Give</a></li>
                            <li class="nav-item"> <a class="nav-link" id="tradeFTlink" role="tab" data-toggle="tab" aria-controls="tradeFT" aria-expanded="true" href="#tradeFTtab">Trade</a></li>
                            <li class="nav-item"> <a class="nav-link" id="sellFTlink" role="tab" data-toggle="tab" aria-controls="sellFT" aria-expanded="true" href="#sellFTtab">Sell</a></li>
                            <li class="nav-item"> <a class="nav-link" id="auctionFTlink" role="tab" data-toggle="tab" aria-controls="auctionFT" aria-expanded="true" href="#auctionFTtab">Auction</a></li>
                            <li class="nav-item"> <a class="nav-link" id="airdropFTlink" role="tab" data-toggle="tab" aria-controls="airdropFT" aria-expanded="true" href="#airdropFTtab">Airdrop</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="giveFTtab" aria-labelledby="giveFT">
                                <form class="needs-validation mt-4" validate dmx-bind:action="javascript:giveFT('{{mint_detail.data.set}}','{{giveFTusername.value}}','{{giveFTqty.value}}')">
                                    <div class="form-row my-2">
                                        <div class="col-12">
                                            <label for="giveFTusername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text" id="giveFTuserprep">@</span></div>
                                                <input type="text" class="form-control r-radius-hotfix" id="giveFTusername" aria-describedby="giveFTuserprep" required>
                                                <div class="invalid-feedback"> Please enter the username you'd like to give to. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-12">
                                            <label for="giveFTqty">Quantity</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="giveFTqty" aria-describedby="giveFTqtyappend" value="1" step="1" min="1" required>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="giveFTqtyappend">{{mint_detail.data.set}} FT</span> </div>
                                                <div class="invalid-feedback"> Please enter the number of FTs to send. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button id="giveFTbutton" class="btn btn-info my-2" type="submit">Give</button>
                                    </center>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade show " id="tradeFTtab" aria-labelledby="tradeFT">
                                <form class="needs-validation mt-4" validate dmx-bind:action="javascript:tradeFT('{{mint_detail.data.set}}','{{tradeFTusername.value}}','{{tradeFTamount.value}}')">
                                    <div class="form-row my-2">
                                        <div class="col-12">
                                            <label for="tradeFTusername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"> <span class="input-group-text" id="tradeFTuserprep">@</span></div>
                                                <input type="text" class="form-control r-radius-hotfix" id="tradeFTusername" aria-describedby="tradeFTuserprep" required>
                                                <div class="invalid-feedback"> Please enter the username you'd like to trade with. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-6">
                                            <label for="tradeFTqty">Quantity</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="tradeFTqty" aria-describedby="tradeFTqtyappend" placeholder="1" step="1" min="1" required readonly>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="tradeFTqtyappend">{{mint_detail.data.set}} FT</span> </div>
                                                <div class="invalid-feedback"> Please enter the number of FTs to trade. </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="tradeFTamount">Amount</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="tradeFTamount" aria-describedby="tradeFTamountappend" placeholder="0.000" step="0.001" min="0.001" required  dmx-class:readonly="">
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="tradeFTamountappend">DLUX</span> </div>
                                                <div class="invalid-feedback"> Please enter the amount of DLUX you'd like to receive. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button id="tradeFTbutton" class="btn btn-info my-2" type="submit">Propose Trade</button>
                                    </center>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade show " id="sellFTtab" aria-labelledby="sellFT">
                                <form class="needs-validation mt-4" validate dmx-bind:action="javascript:sellFT('{{mint_detail.data.set}}','{{sellFTprice.value}}')">
                                    <div class="form-row my-2">
                                        <div class="col-6">
                                            <label for="sellFTqty">Quantity</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="sellFTqty" aria-describedby="sellFTqtyappend" placeholder="1" step="1" min="1" required readonly>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="sellFTqtyappend">{{mint_detail.data.set}} FT</span> </div>
                                                <div class="invalid-feedback"> Please enter the number of FTs to sell. </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="sellFTprice">Sale Price</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="sellFTprice" aria-describedby="sellFTpriceappend" placeholder="0.000" step="0.001" min="0.001" required>
                                                <div class="input-group-append">
                                                    <div class="input-group-text r-radius-hotfix" id="sellFTpriceappend">DLUX</div>
                                                </div>
                                                <div class="invalid-feedback"> Please enter the amount of DLUX you'd like to receive. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <p class="text-white-50 small">Ownership will be transferred to the DAO listing service and sold publicly. Cancel anytime to return immediately.</p>
                                    </div>
                                    <center>
                                        <button id="sellFTbutton" class="btn btn-info my-2" type="submit" >List Item</button>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade show " id="auctionFTtab" aria-labelledby="auctionFT">
                                <form class="needs-validation mt-4" validate dmx-bind:action="javascript:auctionFT('{{mint_detail.data.set}}','{{auctionFTprice.value}}','{{Date.now()}}','{{auctionFTdays.value}}'),'{{auctionFTpriceType.value}}'">
                                    <div class="form-row my-2">
                                        <div class="col-6">
                                            <label for="auctionFTqty">Quantity</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="auctionFTqty" aria-describedby="auctionFTqtyappend" placeholder="1" step="1" min="1" required readonly>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="auctionFTqtyappend">{{mint_detail.data.set}} FT</span> </div>
                                                <div class="invalid-feedback"> Please enter the number of FTs to auction. </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="auctionFTprice">Starting Bid</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="auctionFTprice" aria-describedby="auctionFTpriceappend" placeholder="0.000" step="0.001" min="0.001" required>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="auctionFTqtyappend">DLUX</span> </div>
                                                <div class="invalid-feedback"> Please enter the amount of DLUX you'd like to start the bidding. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="form-row my-2 d-flex align-items-center">
                                            <label for="auctionFTdays" class="m-0">Duration: </label>
                                            <select class="mx-2 btn btn-lg btn-secondary" class="form-control" id="auctionFTdays" required >
                                                <option value="1">1 Day</option>
                                                <option value="2">2 Days</option>
                                                <option value="3">3 Days</option>
                                                <option value="4">4 Days</option>
                                                <option value="5">5 Days</option>
                                                <option value="6">6 Days</option>
                                                <option value="7" selected>7 Days</option>
                                                <option value="8">8 Days</option>
                                                <option value="9">9 Days</option>
                                                <option value="10">10 Days</option>
                                                <option value="11">11 Days</option>
                                                <option value="12">12 Days</option>
                                                <option value="13">13 Days</option>
                                                <option value="14">14 Days</option>
                                                <option value="15">15 Days</option>
                                                <option value="16">16 Days</option>
                                                <option value="17">17 Days</option>
                                                <option value="18">18 Days</option>
                                                <option value="19">19 Days</option>
                                                <option value="20">20 Days</option>
                                                <option value="21">21 Days</option>
                                                <option value="22">22 Days</option>
                                                <option value="23">23 Days</option>
                                                <option value="24">24 Days</option>
                                                <option value="25">25 Days</option>
                                                <option value="26">26 Days</option>
                                                <option value="27">27 Days</option>
                                                <option value="28">28 Days</option>
                                                <option value="29">29 Days</option>
                                                <option value="30">30 Days</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <p class="text-white-50 small">Ownership will be transferred to the DAO listing service and auctioned publicly. Once submitted this cannot be cancelled. If there are no bids at the end of the auction period, it will be returned to you immediately.</p>
                                    </div>
                                    <center>
                                        <button class="btn btn-info my-2" type="submit">List Item</button>
                                    </center>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade show " id="airdropFTtab" aria-labelledby="airdropFT">
                                <form class="needs-validation mt-4" validate dmx-bind:action="javascript:airdropFT('{{mint_detail.data.set}}','{{airdropFTusers.value}}')">
                                    <div class="form-row my-2">
                                        <div class="col-12">
                                            <label for="airdropFTusers">Airdrop to:</label>
                                            <div class="input-group">
                                                <textarea name="paragraph_text" cols="50" rows="2" class="form-control r-radius-hotfix" id="airdropFTusers" aria-describedby="airdropFT" required placeholder="name user-name"></textarea>
                                                <div class="invalid-feedback"> Please enter at least one user name to airdrop tokens to. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col-12">
                                            <label for="airdropFTqty">Quantity sent to each:</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="airdropFTqty" aria-describedby="airdropFTqtyappend" placeholder="1" step="1" min="1" required readonly>
                                                <div class="input-group-append"> <span class="input-group-text r-radius-hotfix" id="airdropFTqtyappend">{{mint_detail.data.set}} FT</span> </div>
                                                <div class="invalid-feedback"> Please enter the number of FTs to send to each account. </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <button class="btn btn-info my-2" type="submit">Airdrop Tokens</button>
                                    </center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dmx-data-detail>