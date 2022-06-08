<head>
    <title>DBUZZ - About</title>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mod/header.php";
    include_once($path);
    ?>
    <!--page specific-->
    <style>
        .listing-btn {
            background-color: #f8f9fa;
            border-color: #000;
            border-width: 2px;
            border-style: solid;
        }
        .btn-outline-fusch {
            color: #FFA300;
            border-color: #FFA300;
        }
        .middle-newsroom {
            border-right: solid;
            border-right-width: 2.5px;
            border-right-color: #191C20;
            border-left: solid;
            border-left-width: 2.5px;
            border-left-color: #191C20;
        }
        @media screen and (max-width: 991px) {
            .middle-newsroom {
                border-right: none;
                border-left: none;
                border-top: solid;
                border-top-width: 2.5px;
                border-top-color: #191C20;
                border-bottom: solid;
                border-bottom-width: 2.5px;
                border-bottom-color: #191C20;
            }
        }
    </style>
</head>