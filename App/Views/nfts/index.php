<!doctype html>
<html lang="en" class="h-100">
<!-- Head -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/header.php" ); ?>
<body class="d-flex flex-column h-100 padme-t70 text-white" id="index" is="dmx-app">
<!-- dmx-api-datasource -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/dmx.php" ); ?>
<!-- style -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/style.php" ); ?>
<!-- navbar -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nav.php" ); ?>
<main role="main" class="flex-shrink-0">
    <!-- Page header area -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/page/pageHeader.php" ); ?>
    <!-- Mint FT Iterator -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/mint/ftIterator.php" ); ?>
    <!-- Transfer FT Mint -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/mint/transferFt.php" ); ?>
    <!-- NFT Auction -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/page/nftAuction.php" ); ?>
    <!-- NFT Repeat -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/page/nftRepeat.php" ); ?>
    <!-- NFT Auction Modal -->
    <!-- NFT Auctions Iterator -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/auction/iterator.php" ); ?>
    <!-- NFT Auctions Details -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/auction/details.php" ); ?>
    <!-- NFT Sales Repeat -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/sales/repeat.php" ); ?>
    <!-- NFT Sales Modal -->
    <!-- NFT Sales Iterator -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/sales/iterator.php" ); ?>
    <!-- NFT Sales Details -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/sales/details.php" ); ?>
</main>
<!-- Footer -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/footer.php" ); ?>
<!-- Script -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nfts/script.php" ); ?>
</body>
</html>
