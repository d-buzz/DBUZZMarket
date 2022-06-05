<!doctype html>
<html lang="en" class="h-100">
<head>
<title>DBUZZ Market - Documentation</title>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/header.php";
   include_once($path);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
<script src="https://cdn.jsdelivr.net/npm/@hiveio/hive-js/dist/hive.min.js"></script>
    <script src="../js/session.js" type="application/javascript"></script>
</head>
<body class="d-flex flex-column h-100 padme-t70">
<a class="skippy sr-only sr-only-focusable" href="#content">
  <span class="skippy-text">Skip to main content</span>
</a>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/nav.php";
   include_once($path);
?>
    <div class="container-fluid text-white-50">

    </div>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/mod/footer.php";
   include_once($path);
?>
<script>
$('#expand').on('click', function () {
$('#accordion .collapse').collapse('show');
});
$('#collapse').on('click', function () {
$('#accordion .collapse').collapse('hide');
});
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
<script type="text/javascript"> docsearch({
apiKey: '61a41f1f483bb427deded79575d31c9a',
indexName: 'dlux',
inputSelector: '#search-input',
debug: false // Set debug to true if you want to inspect the dropdown
});
</script>

</body></html>
