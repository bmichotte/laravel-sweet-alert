@if (session()->has('flash_message'))
    <script>
        swal({!! json_encode(session('flash_message.options')) !!}, {!! session('flash_message.callback') !!});
    </script>
@endif
