<!doctype html>
<html lang="en" class="h-100">
<!-- header -->
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/header.php") ?>
<body class="d-flex flex-column bg-darker padme-t70" id="apps" is="dmx-app">
    <!-- navbar -->
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/nav.php") ?>
<main role="main" class="flex-shrink-0 text-white bg-color h-100">
    <div class="container-fluid px-0 text-center">
        <!-- about nav -->
        <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/nav.php") ?>
        <!-- about content -->
        <div id="pagecontent" class="tab-content padme-t70 pb-5 text-white">
            <!-- aboutTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/aboutTab.php") ?>
            <!-- newsroomTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/newsroomTab.php") ?>
            <!-- brandTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/brandTab.php") ?>
            <!-- privacyTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/privacyTab.php") ?>
            <!-- tosTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/tosTab.php") ?>
            <!-- techTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/techTab.php") ?>
            <!-- faqTab -->
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/tabs/faqTab.php") ?>
        </div>
    </div>
</main>
<!-- footer -->
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/footer.php") ?>
<!-- script -->
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/mod/about/script.php") ?>
</body>
</html>