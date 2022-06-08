<head>
    <title>DBUZZ Market - NFTS</title>
    <?php
    $path = $_SERVER[ 'DOCUMENT_ROOT' ];
    $path .= "/mod/header.php";
    include_once( $path );
    ?>
    <?php
    if ( isset( $_COOKIE[ 'user' ] ) ) {
        echo "<dmx-api-datasource id=\"inventoryapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/nfts/" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
        echo "<dmx-api-datasource id=\"openordersapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/@" . $_COOKIE[ 'user' ] . "\"></dmx-api-datasource>";
        echo "<dmx-api-datasource id=\"accountapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/hapi/condenser_api/get_accounts\" dmx-param:0=\"'" . $_COOKIE[ 'user' ] . "'\"></dmx-api-datasource>";
    } else {
        echo "<dmx-api-datasource id=\"inventoryapi\" is=\"dmx-fetch\" url=\"https://token.dlux.io/api/nfts/\"></dmx-api-datasource>";
    };
    ?>
    <!--page specific-->
    <script type="text/javascript" src="/dlux-io/dmxAppConnect/dmxAppConnect.js"></script>
    <script src="/js/dex.js"></script>
    <script src="/js/ico.js"></script>
    <script type="text/javascript" src="/dlux-io/dmxAppConnect/dmxFormatter/dmxFormatter.js"></script>

</head>