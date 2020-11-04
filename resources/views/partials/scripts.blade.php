<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/scrollspy.min.js') }}"></script>
<!-- easing -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{ asset('js/toaster.js') }}"></script>

<!-- Portfolio -->
<!-- <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script> -->
<script src="{{ asset('js/isotope.js') }}"></script>
<script src="{{ asset('js/portfolio-filter.js') }}"></script> 
<!-- Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/owlcarousel.init.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script> 
<script src="{{ asset('js/slick.init.js') }}"></script> 
<!-- VIDEO ICON -->
<!-- <script src="{{ asset('js/magnific.init.js') }}"></script> -->
<!-- COUNTER -->
<script src="j{{ asset('s/counter.init.js') }}"></script>
<!-- PARALLAX -->
<script src="{{ asset('js/parallax.js') }}"></script> 
<!-- CONTACT -->
<!-- <script src="{{ asset('js/contact.js') }}"></script> -->
<!-- Easypie Chart -->
<!-- <script src="{{ asset('js/jquery.easypiechart.min.js"') }}></script> -->
<!-- Custom -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Pie Chart -->
<script>
    $(function() {
        $('.chart').easyPieChart({
            //your configuration goes here
        });   
    });
    AOS.init();

    $(document).ready(function() {
        $('.order-multiple-services').select2();
        
    });

    // function toast() {
    //     var message = document.getElementById('toastMessage').innerText;
    
    //     toastr.success(document.getElementById('toastMessage').innerText);
    
    // }
</script>