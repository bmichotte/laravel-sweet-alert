@if (session()->has('flash_message'))
    <script>
    	@if (empty(session('flash_message.callback')))
    		swal({!! json_encode(session('flash_message.options')) !!});
    	@else
        swal({!! json_encode(session('flash_message.options')) !!}, {!! session('flash_message.callback') !!});
    	@endif	
    </script>
@endif
