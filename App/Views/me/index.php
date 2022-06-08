<!doctype html>
<html lang="en" class="h-100">
<!-- Head -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/header.php" ); ?>
<body class="d-flex flex-column bg-darker h-100 padme-t70" id="index" is="dmx-app" onLoad="getDate()">

<!-- navbar -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/nav.php" ); ?>

<!-- larynx api -->
<?php $lapi = (isset($_COOKIE['lapi'])) ? $_COOKIE['lapi'] : "https://spkinstant.hivehoneycomb.com"; ?>

<!-- dmx-api-datasource -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/dmx.php" ); ?>

<!-- main -->
<main role="main" class="flex-shrink-0 text-white">
  <div class="container-fluid px-0 ">
    <!-- Page header area -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/page/headerArea.php" ); ?>
    <!-- page tab content -->
    <?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/page/tabContent.php" ); ?>
  </div>
</main>
<!-- Send HIVE Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/hive/sendHive.php" ); ?>
<!-- Send HBD Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/hive/sendHbd.php" ); ?>
<!-- Send DLUX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/sendDlux.php" ); ?>
<!-- Send LARYNX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/sendLarynx.php" ); ?>
<!-- Power Up DLUX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/powerupDlux.php" ); ?>
<!-- Power Down DLUX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/powerdownDlux.php" ); ?>
<!-- Lock Gov DLUX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/gov/lockDlux.php" ); ?>
<!-- Lock Gov LARYNX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/gov/lockLarynx.php" ); ?>
<!-- Unlock Gov DLUX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/gov/unlockDlux.php" ); ?>
<!-- Unlock Gov LARYNX Modal -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/tokens/gov/unlockLarynx.php" ); ?>

<!-- footer -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/footer.php" ); ?>

<!-- script -->
<?php include_once( $_SERVER[ 'DOCUMENT_ROOT' ] . "/mod/me/script.php" ); ?>
</body>
</html>
