<head>
    <title>DBUZZ Market - Profile</title>
    <?php
    $path = $_SERVER[ 'DOCUMENT_ROOT' ];
    $path .= "/mod/header.php";
    include_once( $path );
    ?>
    <!--page specific-->
    <script type="text/javascript" src="/dlux-io/dmxAppConnect/dmxAppConnect.js"></script>
    <script src="/js/dex.js"></script>
    <script src="/js/me.js"></script>
    <style>
        @media (min-width: 1200px) {
            .cc-3 {
                column-count: 3;
            }
        }
        .max-350 {
            max-width: 350px;
        }
        .circle {
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            font-size: 25px;
            color: #fff;
            text-align: center;
            background: #000
        }
        .shimmer {
            background-image: linear-gradient( to right, rgb(194, 255, 182), rgb(255, 163, 182), rgb(221, 169, 255), rgb(162, 209, 255) )
        }
        .nav-pills > li > a.active {
            background-color: #17a2b8 !important;
            color: #ffffff !important;
        }
        .nav-pills > li > a {
            color: #17a2b8 !important;
        }
        .r-radius-hotfix {
            border-top-right-radius: 0.25rem !important;
            border-bottom-right-radius: 0.25rem !important;
        }
        .rainbow-text {
            background-image: linear-gradient( magenta, aqua);
            -webkit-background-clip: text;
            color: transparent;
        }
        .attribute-name {
            text-decoration: underline;
            margin-top: 5px;
        }
        .attribute-value {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .max-160 {
            max-width: 160px;
        }
    </style>
    <script type="text/javascript" src="/dlux-io/dmxAppConnect/dmxFormatter/dmxFormatter.js"></script>
    <script type="text/javascript" src="/dlux-io/dmxAppConnect/dmxDataTraversal/dmxDataTraversal.js"></script>
</head>