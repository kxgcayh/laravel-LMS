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

    $(document).ready(function() {
        $.ajax({
            url: "{{ route('data.class') }}",
            method: 'GET',
            dataType: 'json',
            success: function(data) {

                for (let i = 0; i < data.length; i++) {
                    let mylist = `
                        <li>
                            <a href="#">${data[i].name}</a>
                        </li>`;
                    // console.log(data);
                    $('#my-class-list').append(mylist);
                }
            }
        })
    });

</script>
@yield('script-bottom')
