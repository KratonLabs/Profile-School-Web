@if(session('swal'))
    <script>
        Swal.fire({
            title: '{{ session('swal.title') }}',
            text: '{{ session('swal.text') }}',
            icon: '{{ session('swal.icon') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif
