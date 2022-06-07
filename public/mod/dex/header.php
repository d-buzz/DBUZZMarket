<head>
    <title>DBUZZ Market - DEX</title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/header.php";
    include_once($path);
    ?>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/dex/style.php";
    include_once($path);
    ?>
    <script src="/js/trading-vue.min.js"></script>
    <script type="module" src="/js/dex-vue.js"></script>
</head>