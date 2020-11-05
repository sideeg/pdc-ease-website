
<!-- TOASTER  -->

<span id="successToast" hidden>@lang('content.successToast')</span>
<span id="failToast" hidden>@lang('content.failToast')</span>

<span id="contactfailToast" hidden>@lang('content.contactfailToast')</span>
<span id="contactSuccessToast" hidden>@lang('content.contactSuccessToast')</span>

<!-- TOASTER END -->

<!-- SCRIPTS -->
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
        });
    });

    function successToast() {

        toastr.success(document.getElementById('successToast').innerText);
        // alert('here');
    }
    function failToast() {

        toastr.error(document.getElementById('failToast').innerText);
    }

    //contact

    function contactSuccessToast() {

toastr.success(document.getElementById('contactSuccessToast').innerText);
// alert('here');
}
function contactfailToast() {

toastr.error(document.getElementById('contactfailToast').innerText);
}
</script>

<!-- FOOTER START -->
<section class="footer bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <div class="footer-menu ab-sm-15">
                    <ul class="list-unstyled social-icon mb-0">
                        {{-- <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li> --}}
                        <li class="list-inline-item"><a href="https://web.facebook.com/EASE-Group-106816447870573" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="Https://wa.me/+29911098025" target="_blank"><i class="fab fa-whatsapp" ></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/easegroup_sd/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/easegroupsd?s=08" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                    <p class="pt-4 pb-2"> &copy; 2010 - 2020 ALL RIGHT RESERVED </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Back to top -->
<!-- <a href="#" class="back-to-top" id="back-to-top"> target="_blank"
target="_blank"
target="_blank"
target="_blank"
    <i class="mdi mdi-chevron-up"> </i>
</a> -->
<!-- Back to top -->
