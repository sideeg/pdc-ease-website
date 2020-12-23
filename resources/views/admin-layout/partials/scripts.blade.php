
    <!-- jquery latest version -->
    {{-- <script src="{{asset('admin/js/vendor/jquery-2.2.4.min.js')}}"></script> --}}
    <!-- bootstrap 4 js -->
    
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- Select2.js -->
    <script  src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    {{-- <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script> --}}
    {{-- <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('admin/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('admin/js/line-chart.js')}}"></script>

    <!-- others plugins -->
    <script src="{{asset('admin/js/plugins.js')}}"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script src="{{asset('admin/js/line-chart.js')}}"></script>


    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <script>
        $(document).ready(function() {
            $('.order-multiple-services').select2();
            // $('-services').select2();
        });
        // CKEDITOR.replace( 'desc_en' );
        // CKEDITOR.replace( 'desc_ar' );
        // $('#hide-modal').modal('hide');
     </script>