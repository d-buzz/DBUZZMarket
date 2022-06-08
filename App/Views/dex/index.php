<!doctype html>
<html lang="en" class="h-100">
<!-- header -->
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/header.php") ?>
<body class="d-flex flex-column bg-darker text-white h-100 padme-t70" id="index">
  <!-- navbar -->
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/nav.php") ?>
  <div id="app">
    <main role="main" class="flex-shrink-0 text-white">
      <div class="container-fluid px-0 ">
        <div class="container-fluid fixed-top bg-dark px-0" style="margin-top: 66px; z-index: 900;">
          <div class="d-flex flex-column justify-content-between align-items-center px-3 py-1" style="background-color: black;">
            <div class="d-flex align-itmes-center justify-content-between w-100">
              <div class="d-flex align-items-center">
                  <!-- token select -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/token/tokenselect.php") ?>
                  <!-- node settings form -->
                    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/node/nodesettingsform.php") ?>
                  <!-- node status btn -->
                    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/node/nodestatusbtn.php") ?>
              </div>
              <div class="d-flex align-items-center">
                  <!-- claim tokens form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/token/claimtokensform.php") ?>
              </div>
              <div class="d-flex align-items-center text-white-50">
                  <!-- send token form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/token/sendtokenform.php") ?>
                  <!-- power form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/gov/powerform.php") ?>
                  <!-- gov form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/gov/govform.php") ?>
                  <!-- send hive form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/hive/sendhiveform.php") ?>
                  <!-- send hbd form -->
                  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/hive/sendhbdform.php") ?>
              </div>
            </div>
              <!-- node collapse region -->
                <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/node/nodecollapseregion.php") ?>
          </div>
        </div>
        <div class="container text-white" style="margin-top: 50px;">
          <!-- current token tick -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/token/currenttokentick.php") ?>
          <!-- market stats -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/market/marketstats.php") ?>
          <!-- market chart -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/market/marketchart.php") ?>
          <!-- trade forms -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/market/tradeforms.php") ?>
          <!-- HIVE orders -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/hive/hiveorders.php") ?>
          <!-- HBD orders -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/hive/hbdorders.php") ?>
        </div>
      </div>
    </main>
  </div>
  <!-- footer -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/footer.php") ?>
</body>
  <!-- script -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/dex/script.php") ?>
</html>