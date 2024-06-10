<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
{{-- <script src="https://cdn.tiny.cloud/1/fqmccig0gu4ju1lqucu07jpg0dw9cvk6htkp2hu2aap4xo0y/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdn.tiny.cloud/1/bob6lnwuj50meioa9uhwv415c82ksub63h5gk2wb5kjfiqu9/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

@yield('vendor-script')
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: CUSTOM EXTENDED JS-->
<script src="{{ asset('assets/js/talentic.js') }}"></script>
<!-- END: CUSTOM EXTENDED JS-->

<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->

<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->

<script>
  tinymce.init({
    selector: '.tinymce',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount code',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat | print preview code',
  });
  
</script>
