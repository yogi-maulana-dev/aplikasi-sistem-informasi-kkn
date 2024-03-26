

{{-- <script src="/admin/dist/js/lightbox.min.js"></script> --}}
<script src="/admin/js/core/libs.min.js"></script>
<!-- Plugin Scripts -->

<!-- Slider-tab Script -->
<script src="/admin/js/plugins/slider-tabs.js"></script>

<!-- Lodash Utility -->
<script src="/admin/vendor/lodash/lodash.min.js"></script>
<!-- Utilities Functions -->
<script src="/admin/js/iqonic-script/utility.min.js"></script>
<!-- Settings Script -->
<script src="/admin/js/iqonic-script/setting.min.js"></script>
<!-- Settings Init Script -->
<script src="/admin/js/setting-init.js"></script>
<!-- External Library Bundle Script -->
<script src="/admin/js/core/external.min.js"></script>
<!-- Widgetchart Script -->
<script src="/admin/js/charts/widgetcharts1fc6.js?v=4.0.0" defer></script>
<!-- Dashboard Script -->
<script src="/admin/js/charts/dashboard1fc6.js?v=4.0.0" defer></script>
<script src="/admin/js/charts/alternate-dashboard1fc6.js?v=4.0.0" defer></script>
<!-- Hopeui Script -->
<script src="/admin/js/hope-ui1fc6.js?v=4.0.0" defer></script>
<script src="/admin/js/hope-uipro1fc6.js?v=4.0.0" defer></script>
<script src="/admin/js/sidebar1fc6.js?v=4.0.0" defer></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>




</body>

</html>
