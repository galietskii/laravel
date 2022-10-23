<!-- js -->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<!-- //js -->

<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>
<!-- for bootstrap working -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->

@stack('scripts')
