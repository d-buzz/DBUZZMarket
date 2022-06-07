<!doctype html>
<html lang="en" class="h-100">

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/dex/header.php";
    include_once($path);
?>

<body class="d-flex flex-column bg-darker text-white h-100 padme-t70" id="index">
  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/mod/nav.php";
  include_once($path);
  ?>
  <div id="app">
    <main role="main" class="flex-shrink-0 text-white">
      <div class="container-fluid px-0 ">
        <div class="container-fluid fixed-top bg-dark px-0" style="margin-top: 66px; z-index: 900;">
          <div class="d-flex flex-column justify-content-between align-items-center px-3 py-1" style="background-color: black;">
            <div class="d-flex align-itmes-center justify-content-between w-100">
              <div class="d-flex align-items-center">
                  <!-- token select -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/token/tokenselect.php";
                  include_once($path);
                  ?>

                  <!-- node settings form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/node/nodesettingsform.php";
                  include_once($path);
                  ?>

                  <!-- node status btn -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/node/nodestatusbtn.php";
                  include_once($path);
                  ?>
              </div>

              <div class="d-flex align-items-center">
                  <!-- claim tokens form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/token/claimtokensform.php";
                  include_once($path);
                  ?>
              </div>

              <div class="d-flex align-items-center text-white-50">
                  <!-- send token form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/token/sendtokenform.php";
                  include_once($path);
                  ?>

                  <!-- power form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/gov/powerform.php";
                  include_once($path);
                  ?>

                  <!-- gov form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/gov/govform.php";
                  include_once($path);
                  ?>

                  <!-- send hive form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/hive/sendhiveform.php";
                  include_once($path);
                  ?>

                  <!-- send hbd form -->
                  <?php
                  $path = $_SERVER['DOCUMENT_ROOT'];
                  $path .= "/mod/dex/hive/sendhbdform.php";
                  include_once($path);
                  ?>
              </div>
            </div>

              <!-- node collapse region -->
              <?php
              $path = $_SERVER['DOCUMENT_ROOT'];
              $path .= "/mod/dex/node/nodecollapseregion.php";
              include_once($path);
              ?>

          </div>
        </div>
        <div class="container text-white" style="margin-top: 50px;">
          <!-- current token tick -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/token/currenttokentick.php";
            include_once($path);
            ?>
          <!-- market stats -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/market/marketstats.php";
            include_once($path);
            ?>
          <!-- market chart -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/market/marketchart.php";
            include_once($path);
            ?>
          <!-- trade forms -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/market/tradeforms.php";
            include_once($path);
            ?>
          <!-- HIVE orders -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/hive/hiveorders.php";
            include_once($path);
            ?>
          <!-- HBD orders -->
            <?php
            $path = $_SERVER['DOCUMENT_ROOT'];
            $path .= "/mod/dex/hive/hbdorders.php";
            include_once($path);
            ?>
        </div>
      </div>
    </main>
  </div>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/footer.php";
    include_once($path);
    ?>
</body>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/dex/script.php";
    include_once($path);
    ?>

</html>