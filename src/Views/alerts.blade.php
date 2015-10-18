@if (session()->has('flash_message'))
    <script>
        swal({!! json_encode(session('flash_message')) !!});
    </script>
@endif

@if (session()->has('flash_message_overlay'))
    <script>
        swal({
            title: "{{ session('flash_message_overlay.title') }}",
            text:  "{{ session('flash_message_overlay.message') }}",
            type: "{{ session('flash_message_overlay.level') }}",
            confirmButtonText: 'Ok'
        });
    </script>
@endif
