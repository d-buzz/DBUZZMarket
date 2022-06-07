<style>
    .col-sort {
        background-color: cornflowerblue;
        color: #282828;
    }

    input.disabled-input {
        pointer-events: none;
        background-color: #e9ecef;
        opacity: 1;
    }

    .r-radius-hotfix {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important;
    }

    .l-radius-hotfix {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important;
    }

    .tbody-scroll-orders {
        display: block;
        height: 400px;
        overflow: auto;
    }

    .tbody-scroll-history {
        display: block;
        max-height: 600px;
        overflow: auto;
    }

    .tbody-scroll-nodes {
        display: block;
        max-height: 600px;
        overflow: auto;
    }

    thead,
    tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    .bg-black {
        background-color: black;
    }

    .btn-rb,
    .btn-rb:hover,
    .btn-rb:active,
    .btn-rb:visited {
        background: linear-gradient(45deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        border-style: solid;
        border-width: 1px;
        border-image: linear-gradient(45deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82) 1;
    }

    .border-rb {
        border-style: solid;
        border-width: 1px;
        border-image: linear-gradient(45deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82) 1;
    }

    .background-rb {
        background: linear-gradient(45deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82);
        color: #000;
        border: none;
    }

    .dark-divider {
        border-image: linear-gradient(45deg, #f79533, #f37055, #ef4e7b, #a166ab, #5073b8, #1098ad, #07b39b, #6fba82) 1;
    }
</style>