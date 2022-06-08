<?php
echo "<dmx-api-datasource id=\"larynxdexapi\" is=\"dmx-fetch\" url=\"" . $lapi . "/dex/\" ></dmx-api-datasource>";
echo "<dmx-api-datasource id=\"larynxnodeapi\" is=\"dmx-fetch\" url=\"" . $lapi . "/markets/\" ></dmx-api-datasource>";
if ( isset( $author ) ) {
    echo "<dmx-api-datasource id=\"dluxGetBlog\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/condenser_api/get_discussions_by_blog\" dmx-param:tag=\"'" . $author . "'\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"dluxGetAccount\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/condenser_api/get_accounts\" dmx-param:0=\"'" . $author . "'\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"inventorydata\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/nfts/" . $author . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"usertoken\" is=\"dmx-fetch\" url=\"https://token.dlux.io/@" . $author . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"larynxtoken\" is=\"dmx-fetch\" url=\"" . $lapi . "/@" . $author . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"accountapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/hapi/condenser_api/get_accounts\" dmx-param:0=\"'" . $author . "'\"></dmx-api-datasource>";
} else if ( isset( $_COOKIE[ 'user' ] ) ) {
    echo "<dmx-api-datasource id=\"dluxGetBlog\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/condenser_api/get_discussions_by_blog\" dmx-param:tag=\"'" . $_COOKIE[ 'user' ] . "'\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"dluxGetAccount\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/condenser_api/get_accounts\" dmx-param:0=\"'" . $_COOKIE[ 'user' ] . "'\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"inventorydata\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/nfts/" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"tradefts\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/trades/fts/" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"tradenfts\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/trades/nfts/" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"usertoken\" is=\"dmx-fetch\" url=\"https://token.dlux.io/@" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"larynxtoken\" is=\"dmx-fetch\" url=\"" . $lapi . "/@" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
    echo "<dmx-api-datasource id=\"accountapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/hapi/condenser_api/get_accounts\" dmx-param:0=\"'" . $_COOKIE[ 'user' ] . "'\"></dmx-api-datasource>";
} else {};
?>
<!--<dmx-api-datasource id="larynxtoken" is="dmx-fetch" url="https://spkgiles.hivehoneycomb.com/@markegiles"></dmx-api-datasource>-->
<!--<dmx-api-datasource id="accountapi" is="dmx-fetch" url="https://token.dlux.io/hapi/condenser_api/get_accounts" dmx-param:0="markegiles"></dmx-api-datasource>-->
<dmx-api-datasource id="hivehistory" is="dmx-fetch" url="https://token.dlux.io/hapi/account_history_api/get_account_history" dmx-param:account="markegiles"></dmx-api-datasource>
<dmx-data-view id="userhivehistory" dmx-bind:data="hivehistory.data.result.history"></dmx-data-view>
<dmx-api-datasource id="hivestatsapi" is="dmx-fetch" url="https://token.dlux.io/hapi/condenser_api/get_dynamic_global_properties"></dmx-api-datasource>
<dmx-api-datasource id="hiveprice" is="dmx-fetch" url="https://api.coingecko.com/api/v3/simple/price?ids=hive&amp;vs_currencies=usd"></dmx-api-datasource>
<dmx-api-datasource id="hbdprice" is="dmx-fetch" url="https://api.coingecko.com/api/v3/simple/price?ids=hive_dollar&amp;vs_currencies=usd"></dmx-api-datasource>
<dmx-api-datasource id="dexapi" is="dmx-fetch" url="https://token.dlux.io/dex/" ></dmx-api-datasource>
<dmx-api-datasource id="dluxfeed" is="dmx-fetch" url="https://token.dlux.io/feed/" ></dmx-api-datasource>
<dmx-api-datasource id="larynxnodesapi" is="dmx-fetch" url="https://spkinstant.hivehoneycomb.com/markets" ></dmx-api-datasource>
<dmx-api-datasource id="dluxnodesapi" is="dmx-fetch" url="https://token.dlux.io/markets" ></dmx-api-datasource>
<dmx-data-view id="larynxnodes" dmx-bind:data="larynxnodesapi.data.markets.node"></dmx-data-view>
<dmx-data-view id="dluxnodes" dmx-bind:data="dluxnodesapi.data.markets.node"></dmx-data-view>