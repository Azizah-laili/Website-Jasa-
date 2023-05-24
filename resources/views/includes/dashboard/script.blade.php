<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


<script async defer src="{{ url('/buttons.github.io/buttons.js') }}"></script>
<script src="{{ asset('/js/app.bundle.js') }}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/datepicker.min.js') }}"></script>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'deskripsi_website' );
</script>
<script>
    CKEDITOR.replace( 'deskripsi_logo');
</script>
<script>
    CKEDITOR.replace( 'deskripsi_certificates');
</script>
<script>
    CKEDITOR.replace( 'deskripsi_admin' );
</script>
<script>
    CKEDITOR.replace( 'deskripsi_design' );
</script>
<script>
    CKEDITOR.replace( 'deskripsi_hosting' );
</script>
<script>
    CKEDITOR.replace( 'deskripsi_artikel' );
    config.width = "auto";
    config.height = "auto";
</script>
