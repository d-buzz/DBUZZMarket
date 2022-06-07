<!-- token select -->
<div id="userselectapi">
    <div class="dropdown show"> <a class="btn btn-sm btn-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Token </a>
        <div class="dropdown-menu bg-black rounded">
            <h6 class="dropdown-header">HIVE / HBD</h6>
            <a class="dropdown-item text-white-50" href="#/" @click="setApi('https://token.dlux.io')">DLUX</a> <a class="dropdown-item text-white-50" href="#/" @click="setApi('https://spkinstant.hivehoneycomb.com')">LARYNX</a>
            <div class="dropdown-divider bg-light d-none"></div>
            <a class="dropdown-item text-white-50 d-none" href="#/" @click="setApi()">Manual</a>
        </div>
    </div>
</div>