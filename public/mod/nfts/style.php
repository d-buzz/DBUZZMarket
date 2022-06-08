<style>
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
    .circle2 {
        width: 75px;
        height: 75px;
        line-height: 75px;
        border-radius: 50%;
        font-size: 50px;
        color: crimson;
        text-align: center;
        background: #000;

    }
    .arrow {
        position: absolute;
        background: #ffc107;
        border-radius: 50%;
        border: black thick solid;
        text-align: center;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 4rem;
        height: 4rem;
        z-index: 1;
        color: crimson;

    }
    .arrow2 {
        position: absolute;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }
    .card-ft {
        width: 26em;
    }
    .shimmer {
        background-image: linear-gradient( to right, rgb(194, 255, 182), rgb(255, 163, 182), rgb(221, 169, 255), rgb(162, 209, 255) )
    }
    .rainbow-text {
        background-image: linear-gradient( magenta, aqua);
        -webkit-background-clip: text;
        color: transparent;
    }
    .mint-panel-heading-top .accordion-toggle:after {
        /* symbol for "opening" panels */
        font-family: 'FontAwesome';  /* essential for enabling glyphicon */
        content: "\f102";    /* adjust as needed, taken from bootstrap.css */
        margin-left: 10px;        /* adjust as needed */

    }
    .mint-panel-heading-top .accordion-toggle.collapsed:after {
        /* symbol for "collapsed" panels */
        content: "\f103";    /* adjust as needed, taken from bootstrap.css */
    }
    .mint-panel-heading-bottom .accordion-toggle:after {
        /* symbol for "opening" panels */
        font-family: 'FontAwesome';  /* essential for enabling glyphicon */
        content: "\f102";    /* adjust as needed, taken from bootstrap.css */
        margin-left: 10px;        /* adjust as needed */

    }
    .mint-panel-heading-bottom .accordion-toggle.collapsed:after {
        /* symbol for "collapsed" panels */
        content: "\f103";    /* adjust as needed, taken from bootstrap.css */
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
    .l-radius-hotfix {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }
    .max-160 {
        max-width: 160px;
    }
    .border-black {
        border-color: black;
    }
    .attribute-name {
        text-decoration: underline;
        margin-top: 5px;
    }
    .attribute-value {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .attribute-container{
        position:absolute;
        width: 100%;
        overflow: hidden;
        z-index: 11;
    }
</style>