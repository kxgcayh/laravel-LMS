<!-- bundle -->
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
@yield('script')
<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
@yield('script-bottom')
