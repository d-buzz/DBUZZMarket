<main class="col-md-9 col-xl-10 py-md-3 pl-md-5 bd-content" role="main">
    <article class="docs-article" id="introduction">
        <h1 class="bd-title" id="content">Welcome to DBUZZ market dlux! Start building anything.</h1>
        <h3 class="bd-lead">This page is technical documentation for creating on or with dlux decentralized infrastructure.</h3>
        <center><h5 class="col-8">Looking for a more general overview of the project? Check out the About page!</h5><br><a href="/about/" class="btn btn-outline-info">About Page</a></center>
        <h2>Quickstart</h2>
        <p class="bd-lead">We've made it easy to get up and running by integrating all the technical stuff so you can start creating right away!</p>
        <p>To fully utilize our platform, you must have a <a href="https://signup.hive.io/" target="_blank">HIVE account</a>. It can take some time for your account to activate, but you can start building apps immediately.</p>
    </article>
    <article class="docs-article" id="faq">
        <h1 class="bd-title">FAQ</h1>
        <p class="bd-lead">Find answers to Frequently Asked Questions</p>
        <div id="accordion1" role="tablist">
            <div class="card bg-dark">
                <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1"> What is HIVE? </a> </h5>
                </div>
                <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
                    <div class="card-body">Hive is a delegated-proof-of-stake social media blockchain. Users have a wallet that holds Hive crypto, and by staking some of their crypto in a process called powering up they get vote power. There is built-in inflation that funds a reward pool, which is paid out to content creators that earn it via upvotes from users with Hive Power.</div>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header" role="tab" id="headingTwo1">
                    <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo1" role="button" aria-expanded="false" aria-controls="collapseTwo1"> What are dApps? </a> </h5>
                </div>
                <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordion1">
                    <div class="card-body">Decentralized Applications are pieces of software that can run outside of centralized servers and app stores. They are resiliant in their ability to be distributed peer-to-peer, and their minimization on external dependencies.</div>
                </div>
            </div>
            <div class="card bg-dark">
                <div class="card-header" role="tab" id="headingThree1">
                    <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseThree1" role="button" aria-expanded="false" aria-controls="collapseThree1"> What is a DEX? </a> </h5>
                </div>
                <div id="collapseThree1" class="collapse" role="tabpanel" aria-labelledby="headingThree1" data-parent="#accordion1">
                    <div class="card-body">A Decentralized EXchange is a market to swap assets that has no centralized account holding the assets or user keys, and instead escrows agent collateral to cover the cost of trades.</div>
                </div>
            </div>
        </div>
        <p></p>
    </article>
    <article class="docs-article" id="whitepaper">
        <h1 class="bd-title">Whitepaper</h1>
        <p class="bd-lead">The original dlux whitepaper was written by Steven Ettinger and Mark Giles.</p>
        <h3><a href="https://docs.google.com/document/d/1_jHIJsX0BRa5ujX0s-CQg3UoQC2CBW4wooP2lSSh3n0/" target="_blank">Read it here.</a></h3>
        <p>It details the philosophy and design principles behind the dlux-io platform. Back then, HIVE was called STEEM.</p>
        <p>If pictures are more your thing, check out the <a href="https://docs.google.com/presentation/d/1L0ZhqUsetBB2jI8fcHqUIOt7ddDKFtn4VV_C2-Uogcw/" target="_blank">Slide Deck</a> instead.</p>
    </article>
    <article class="docs-article" id="blockchain-ops">
        <h1 class="bd-title">Blockchain Operations</h1>
        <p></p>
    </article>
    <article class="docs-article" id="second-layer">
        <h1 class="bd-title">Second Layer</h1>
        <p>The dlux side chain is comprised of several nodes running the same token software that determine their state from only signed transactions on the hive blockchain. Together these nodes communicate through hive and perform complex tasks. Forming a distributed trusted third party for open ended transactions, multiparty contracts, oracle information, and multi step processes. These node will arrive at consensus and maintain current state for each node.</p>
        <h2>DLUX Node Framework</h2>
        <ul>
            <li>State Nodes maintain state in a LevelDB</li>
            <li>LevelDB has custom handlers to ensure order of transactions.</li>
            <li>Every 100 blocks, a state file is posted to IPFS</li>
            <li>Each node then posts the hash to Hive so a deterministic state can be calculated using the blockchain as a gossip protocol.</li>
            off-chain services now have deterministic consensus that can be rewarded via PoB.</ul>
        <h3>Decentralized Mesh Network</h3>
        <p>Each node has active permissions for a Hive account. They can perform a range of actions from signing custom json for oracle and consensus reasons, facilitating escrow and transfers, account creation, and more.</p>
        <p>Up to 25 nodes can control what consensus is. Nodes are elected to this group based on how much DLUXG they have which is used both to collateralized DEX transactions as well as a multi-signature wallet between them.</p>
        <p>New nodes are elected if their addition to the group will improve the collateral conditions of the group.</p>
        <p>Since consensus is determined by IPFS hash, replays are near instant. Ensuring the network remains current with the main layer, Hive.</p>
        <p>Configuration: env vars:</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    posting posting key
    active active key Can perform escrow transactions for rewards
    ACCOUNT hive account ie dlux-io
    DOMAIN Public / ie https://token.dlux.io
    </code></pre></figure>
        <p>API: Read:</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    /@username -> DLUX balances
    /stats -> Current Info
    /state -> State dump, for testing
    /runners -> Who is trusted to process blocks
    /markets -> DEX Info
    /dex -> DEX Info
    </code></pre></figure>
        <p>Write: CURRENTLY dlux_ is the token prefix Custom JSON:</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    send | to (account to not checked) & amount (integer, no float)
    power_up | amount (dlux to power up for voting)
    power_down | amount to schedule for power down 1
    gov_up | locked for POS
    gov_down | 4 week unlock period
    node_add | domain(https://token.example.com) bidRate(1-1000) marketingRate(1-2000}
    node_delete
    </code></pre></figure>
        <p>Operations</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    Setting bennifactor rewards to @dlux-io >= 10% to make post votable 1
    Transfers to @robotolux automatically distributes ICO auction
    Delegations to @dlux-io paid daily and tracked automaticly
    Votes tallied and paid after ~7 days
    </code></pre></figure>
        </p>
    </article>
    <article class="docs-article" id="token">
        <h1 class="bd-title">DLUX Fungible Token</h1>
        <p>Tokens are being issued for hive donations in the exchange area.</p>
        <p>dlux tokens allow us to reward user actions like content discovery, performing swaps, determining consensus, and services like content storage and relay servers(streaming audio/video).</p>
        <ul>
            <li>Incentivize participation in the dlux p2p economy</li>
            <li>Distribute tokens from the reward pool to token holders.</li>
            <li>Incentives for any action a webserver can verify</li>
            <li>Decentralized exchanges with asset transfer</li>
            <li>Issue tokens from our auction pool daily</li>
            <li>New tokens added to the reward pool can be earned by token holders for dlux content based on beneficiary rewards.</li>
            <li>The first dlux token is built using hive block streamer</li>
            <li>dlux maintains a node to generate the reward pool</li>
            <li>the reward pool pays for the node and incentivizes other nodes</li>
            <li>the more nodes, the stronger the network gets</li>
            <li>At ~5% APY inflation</li>
            <li>Every 100 blocks 0.001 DLUX token is minted for every 2100.000 DLUX in existence.</li>
        </ul>
        <p>The reward pool is used to incentivize others to run dlux nodes to verify integrity and that we're running our code fairly and correctly, provable through the hash.</p>
    </article>
    <article class="docs-article" id="nft">
        <h1 class="bd-title">Smart Non Fungible Tokens (NFTs)</h1>
        <p>Smart NFTs are here! And there's so much you can do with them, like generatively deciding attributes, leveraging scaleable vector graphics as visual layers with color options, user input games where each choice is a competition for the prize, trophies and achievements, music videos and art, NFTs that mint subsequent NFTs like levels or episodes or seasons, and anything else you may be able to conceive!</p>
        <p>We are actively working on UI (user interface) to make this as approachable as possible for everyone.</p>
    </article>
    <article class="docs-article" id="dex">
        <h1 class="bd-title">Decentralized Exchange (DEX)</h1>
        <p>The Hive accounts running DLUX software in consensus are able to facilitate token swaps utilizing the following protocol.</p>
        <p>Alice has 10 Hive, and wants to buy  10 DLUX. There are no buyers yet, so Alice checks the network to see which nodes are active(fills out escrow fields in advanced area of form), and selects Charlie as an escrow agent, and David to forward the transaction to a buyer, A collateralized escrow agent as well.</p>
        <p>Alice signs an 'escrow_transaction' to Charlie and David. The Hive blockchain will ensure all the security around accepting this transaction. The DLUX network will read the transaction, verify it's acceptable, and let all nodes know that Charlie and David both have enough collateral to hold this trade.</p>
        <p>Charlie and David will autonomously sign and broadcast the expected 'escrow_approve' transactions. Hive is in escrow between Charlie and David, each of whom have collateralized 20 DLUX. Bob sees the contract: 10 Hive for 10 DLUX, and buys it, That is sends a 'custom_json' transaction on hive with dlux header information.</p>
        <p>The dlux network sees this transaction and the 10 DLUX is sent to Alice, and the 10 Hive is released from escrow to David, (David autonomously signs 'escrow_dispute', and charlie autonomously signs 'escrow_release'). The Dlux network withholds 10 more DLUX from each as the custody changes. Once David recieves the Hive Charlie has his dlux retruned plus a fee. David sends the 10 Hive to Bob and then has his dlux returned plus his fee.</p>
        <p>At any time the trade will be 100% garanteed by the network. Since any one actor can hold any number of accounts some of the held escrow would be burned(sent to null) to prevent attacks that could withdraw dlux governance power early. On inflow trades like this holding a trade will be more costly as the escrow must be held longer.</p>
        <p>While nearly the same chain of custody happens in the reverse direction, the order sits on the dlux side with out the need to collateralize the trade until execution.</p>
        <p>Because collateralizing these trades requires liquidity, these trades can not be free. Especially inflow  and fees are being implemented: 0.25% + 0.003 DLUX. 1/3 of which goes to each node fascilitating the trade, and the other third to the node reward pool which gets spread evenly over all creditable transactions daily.</p>
        <p>This fee structure is to encourage larger balances to handle larger swaps, as well as to reward the network for enabling the trust required for the larger accounts.</p>
        <p>Collateralization is also a finite resource, as such the network itself must regulate acceptable trades and autonomously cancel orders that fall out of acceptable bands to free liquidity at market prices.</p>
        <p>No information asymmetry either way, all transactions on the DEX are open.</p>
    </article>
    <article class="docs-article" id="accounts">
        <h1 class="bd-title">Account Creation Tokens</h1>
        <p>Utilizing delegation of Hive Power and multi-signature. An Account Creation Market can be deveoped to exchange ACTs between members of the network at fair cost.</p>
    </article>
    <article class="docs-article" id="pinning">
        <h1 class="bd-title">Asset Pinning</h1>
        <p>Use proof of access and the oracle network to enable decentralized content delivery networks.</p>
    </article>
    <article class="docs-article" id="nodes">
        <h1 class="bd-title">DLUX Node Network</h1>
        <p>dlux enables the ultimate decentralized computer</p>
        <p>Out of the box dlux supports the Hive blockchain, a social media proof-of-brain system utilizing upvotes to reward content creators from a rewards pool.</p>
        <p>We offer one-click publishing to the Hive blockchain in a monetize-able vessel that pays crypto currency for upvotes.</p>
        <p>Hive functionality is built into both the 2D apps, and VR / AR scenes themselves, so for the first time people can interact with the blockchain from inside another reality.</p>
        <p>dApp's will also have the ability to utilize our IPFS infrastructure to host data from user apps. Allowing dApps to be built with no upfront infrastructure cost.</p>
        <ul>dlux.io Wallet & Sandbox
            <li>Smart Tokens</li>
            <li>Cryptographic Transactions</li>
            <li>Asset Storage, Exchange, Licensing</li>
            <li>JSON Smart Contracts</li>
        </ul>
        <ul>Encrypted Relay
            <li>P2P Free Markets</li>
            <li>Communications</li>
            <li>Side Chains</li>
        </ul>
        <ul>Custom IPFS
            <li>Pinning Service</li>
            <li>Public Node</li>
            <li>Serve Custom Data</li>
        </ul>
        <ul>Third Party APIs
            <li>Reticulum VR Chat rooms</li>
            <li>WebRTC</li>
            <li>Turn Server</li>
        </ul>
        <p>The dlux token architecture is unique in that it uses worker nodes listening to every signed Hive Transaction (HTx) via hive-js (GitHub Source) to determine state. The can also perform actions on those signed HTx because the nodes have Hive Credentials (HC), which they can use to place the transaction back into the HIVE transaction stream.</p>
        <p>DLUX nodes form a consensus. And can even collectively hold the keys to their HIVE funding accounts using multi-signature account authorities.</p>
        <p>dlux Node listening to HTx</p>
        <ul>dlux nodes use a hive block processor, are super easy to run, and can do things like:
            <li>Content Management System (CMS) to build databases of private, encrypted information</li>
            <li>Internet of Things (IoT) governance such as resource management</li>
            <li>Create and sign Smart Contracts, witness transactions, hold and release escrow</li>
        </ul>
        <p>dlux nodes power the decentralized exchange, dlux Token, and dlux NFT smart contract framework.</p>
        <h2>Running A Node</h2>
        <p><i>This software has been tested on Node.js version 10 through 15</i></p>
        <h3>Prerequisites</h3>
        <ul>
            <li>Node.js</li>
            <li>git</li>
        </ul>
        <h3>Server Installation</h3>
        <ul>
            <li>Clone this repository</li>
            <code>git clone https://github.com/dluxio/dlux_open_token.git</code>
            <li>Navigate to the root directory of token</li>
            <code>cd dlux_open_token</code>
            <li>Set configuration variables</li>
            <code>nano .env</code>
            <br>
            <code>account=hiveaccount</code>
            <br>
            <code>active=hiveactivekey</code>
            <li>Quit editor and save changes</li>
            <code>y to save</code>
            <li>Install</li>
            <code>npm install</code>
            <li>Start</li>
            <code>npm start</code>
        </ul>
        <h3>Recommendations</h3>
        <ul>
            <li>Script a way to automatically git pull to stay up to date with daily changes.</li>
            <li>Setup a system service to restart on quits to keep your node online.</li>
        </ul>
        <h3>Cloud Installation</h3>
        <ul>
            <li>Choose a cloud provider</li>
            <li>Fork this repository</li>
            <li>Connect your fork to the cloud server</li>
            <li>Set configuration variables</li>
            <code>account=hiveaccount</code>
            <br>
            <code>active=hiveactivekey</code>
        </ul>
    </article>
    <article class="docs-article" id="api">
        <h1 class="bd-title">DLUX API</h1>
        <p>dlux is the ultimate Hive blockchain infrastructure. Not only does it publish any type of dApp you can imagine to the chain, it allows those posts to make posts!
        <h3>Token API</h3>
        <ul>Read-only, allows you to see token stats
            <li>api:port/markets //json markets (has list of api's)</li>
            <li>api:port/stats //json stats</li>
            <li>api:port/@username //json balances</li>
            Writen via customJSON messages.</ul>
        <h3>Post API</h3>
        <p>The following API allows users of your dApp to request to post new content to dlux:</p>
        <p>Triggering the following code from the XR container will prompt the dApp user to make a Hive post</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    window.parent.postMessage({
            'func': 'advPost',
            'message': postData
          }, "*");

    var postData = {
          title: title, //required
          body: body, //required
          permlink: permLink, //optional: will autogenerate if not supplied
          parentAuthor: '', //optional: make comments
          parentPermlink: '', //optional: make comments | change categories
          beneficiaries: {disregardfiat:1000, markegiles:1000}, //optional: incentivize yourself. (Max 3000)
          customJSON: JSON.stringify({
            tags: otherTags, // you are responsible for tags
            subApp: 'SuperCraftLoader/v0.1', //name the application that will be posted
            xr: false, //if you'd like the XR interface or
            vrHash: 'QmbDb84sAVJYYw7qHFwiX88QRswWu8d7sf4Wr5sYWHSzJZ', //an ar or vr hash must be specified
            appSpecificData: userVar //anything else needed to make the dApp work
          }),
        }
    </code></pre></figure>
        <p>On the user's side a few items will be added to this data, such as the dlux main app and dlux beneficiary information as well as an "attorney" so users will be able to see which users dApp helped them make a this post.</p>
        <h3>Integrated Wallet</h3>
        <p>Our wallet handles HIVE assets, as well as DLUX assets.</p>
        <h3>Unified Asset View</h3>
        <ul>See all your assets in one place:
            <li>Cryptocurrency Tokens</li>
            <li>Smart Contract Non-Fungible Tokens</li>
        </ul>
        <ul>Authenticated users can perform:
            <li>Asset Transfers</li>
            <li>Escrow Transactions</li>
            <li>Voting</li>
            <li>Delegation</li>
        </ul>
        <h3>Send API</h3>
        code here
        <h3>Balance Inquiry API</h3>
        code here
    </article>
    <article class="docs-article" id="ipfs">
        <h1 class="bd-title">IPFS Gateway</h1>
        <p>IPFS Upload
            Upload assets to IPFS from dlux.

            IPFS Pinning
            dlux pins content that is uploaded to IPFS and .

            Others are encouraged to build competing pinning services and bid in Open Markets.

            IPFS API
            js-ipfs-api (GitHub Source)
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    const ipfs = window.IpfsApi({ host: 'ipfs.infura.io', port: '5001', protocol: 'https'}) // Connect to IPFS
        const buf = buffer.Buffer(reader.result) // Convert data into buffer
        ipfs.files.add(buf, (err, result) => { // Upload buffer to IPFS
          if(err) {
            console.error(err)
            return
          }
          let url = `https://dlux.io/ipfs/${result[0].hash}`
                            console.log(`Url --> ${url}`)
    </code></pre></figure>
        <p>IPFS Oracles are hosting nodes that pin assets to storage.</p>
        <p>Others are encouraged to provide services and bid the cost down, just like on AWS (Amazon Web Services).</p>
        <p>Here is a data structure for our IPFS pinning service:</p>
        <div class="bd-clipboard"><button type="button" class="btn-clipboard" title="" data-original-title="Copy to clipboard">Copy</button></div><figure class="highlight bg-dark"><pre><code class="language-html text-white-50" data-lang="html">
    stats: {
        hashLastIBlock: '',
        tokensSupply: 100000000000,
        interestsRate: 5000,
        nodeRate: 10000,
        IPFSRate: 20000,
        relayRate: 10000,
        contributorRate: 20000,
        savingsRate: 10000,
        marketingRate: 20000,
        contentRate: 10000,
        currationRate: 25000
      },
  markets: {
    node: {
      'dlux-io': {
        domain: 'https://dlux-token.herokuapp.com',
        blocksBehind: 0,
        bidRate: 10000
      }
    },
    ipfs: {
      'dlux-io': {
        domain: 'https://ipfs.dlux.io',
        alive: 0,
        bidRate: 20000,
        kbStored: 0
      }
    },
    relay: {
      'dlux-io': {
        domain: 'https://chat.dlux.io',
        alive: 1,
        bidRate: 10000
      }
    },
    contributors: {
      'disregardfiat': {
        bidRate: 0
      },
      'markegiles': {
        bidRate: 0
      }
    }
  }
}
    </code></pre></figure>
        <h3>How it works</h3>
        <p>All participating witness nodes bid, and the lowest 20 bids are averaged to determine the price. Reward tokens are paid out equally. The program verifies your service is online, and tokens are distributed from the rewards pool per kb stored.</p>
        <ul>Call dlux-token for stats
            <li>dlux-token returns the preferred IPFS nodes you can upload to</li>
            <li>Upload event happens, program records kbs data transfer</li>
            <li>kb/reward amount paid out from rewards pool</li>
        </ul>
    </article>
    <article class="docs-article" id="hive">
        <h1 class="bd-title">Hive Integrations</h1>
        <p>The Hive blockchain provides our foundation through authentication.</p>
        <ul>It has two forms of currency tokens, HIVE and Hive Backed Dollars (HBD):
            <li>HBD is a peg to USD</li>
            <li>HIVE can be powered up, into Hive Power, which gives the Hive Account more stake on the Hive Network, this can also be delegated risk free.</li>
        </ul>
        <p>Running a Hivemind witness node would allow dlux to run plugins that monitor HIVE data, which would allow for things like search, and notifications. Currently this is part of our roadmap.</p>
    </article>
</main>