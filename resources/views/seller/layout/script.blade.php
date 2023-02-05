<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script>

<!-- Plugin Js -->
<script src="{{asset('admin/assets/bundles/apexcharts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/bundles/dataTables.bundle.js')}}"></script>

<!-- Jquery Page Js -->
<script src="{{asset('admin/assets/js/template.js')}}"></script>
<script src="{{asset('admin/assets/js/page/index.js')}}"></script>
<script src="{{asset('admin/assets/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap')}}"></script>
<script>
    $('#myDataTable')
    .addClass( 'nowrap')
    .dataTable( {
        responsive: true,
        columnDefs: [
            { targets: [-1, -3], className: 'dt-body-right' }
        ]
    });
</script>
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
						