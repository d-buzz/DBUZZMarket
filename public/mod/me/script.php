<script>
    function getDate(){
        const d = new Date();
        const e =d.getMonth() + 1
        document.getElementById("frmDate").value = e;
        console.log('set month', e)
    }
    getDate();

    function updateVoteSubmit(id,val) {
        document.getElementById(id).innerHTML = document.getElementById(val).value + '%';
    }

    function pageSpecfic(usr){
        me(usr);
    }
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    // Deep link usertabs (blog wallet inventory nodes settings)
    $(document).ready(() => {
        let url = location.href.replace(/\/$/, "");

        if (location.hash) {
            const hash = url.split("#");
            if(hash[1] == 'hive' || hash[1] == 'dlux' || hash[1] == 'spk'){
                $('#usertabs a[href="#wallet"]').tab("show");
                $('#wallettabs a[href="#'+hash[1]+'"]').tab("show");
            } else {
                $('#usertabs a[href="#'+hash[1]+'"]').tab("show");
            }
            url = location.href.replace(/\/#/, "#");
            history.replaceState(null, null, url);
            setTimeout(() => {
                $(window).scrollTop(0);
            }, 400);
        }

        $('a[data-toggle="tab"]').on("click", function() {
            let newUrl;
            const hash = $(this).attr("href");
            if(hash == "#blog") {
                newUrl = url.split("#")[0];
            } else {
                newUrl = url.split("#")[0] + hash;
            }
            newUrl += "/";
            history.replaceState(null, null, newUrl);
        });
    });

</script>