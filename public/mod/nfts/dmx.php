<dmx-api-datasource id="hiveprice" is="dmx-fetch" url="https://api.coingecko.com/api/v3/simple/price?ids=hive&amp;vs_currencies=usd"></dmx-api-datasource>
<dmx-api-datasource id="statsapi" is="dmx-fetch" url="https://token.dlux.io/stats/"></dmx-api-datasource>
<dmx-api-datasource id="dexapi" is="dmx-fetch" url="https://token.dlux.io/dex/"></dmx-api-datasource>
<dmx-api-datasource id="salesapi" is="dmx-fetch" url="https://token.dlux.io/api/sales"></dmx-api-datasource>
<dmx-api-datasource id="auctionsapi" is="dmx-fetch" url="https://token.dlux.io/api/auctions"></dmx-api-datasource>
<dmx-api-datasource id="mintsupplyapi" is="dmx-fetch" url="https://token.dlux.io/api/mintsupply"></dmx-api-datasource>
<dmx-data-view id="statsview" dmx-bind:data="statsapi.data.result" ></dmx-data-view>
<dmx-data-view id="dexview1" dmx-bind:data="dexapi.data.markets.hive.sells" sorton="rate" ></dmx-data-view>
<dmx-data-view id="salesview" dmx-bind:data="salesapi.data.result" sorton="time"></dmx-data-view>
<dmx-data-view id="auctionsview" dmx-bind:data="auctionsapi.data.result" sorton="time"></dmx-data-view>
<dmx-data-view id="mintsupplyview" dmx-bind:data="mintsupplyapi.data.result" sorton="qty" sortdir="desc"></dmx-data-view>
<dmx-data-view id="inventoryview" dmx-bind:data="inventoryapi.data"></dmx-data-view>