<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

<script href="https://code.jquery.com/jquery-3.5.1.js"></script>

<script href="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>



    <script  href="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('app-assets/vendors/js/vendors.min.js') ?>"></script>
    <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="<?= base_url('app-assets/vendors/js/charts/apexcharts.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/extensions/sweetalert2.all.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/forms/wizard/bs-stepper.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.j') ?>s"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/jszip.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/pdfmake.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/vfs_fonts.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/buttons.print.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') ?>"></script>
        <script src="<?= base_url('app-assets/vendors/js/forms/select/select2.full.min.js') ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('app-assets/js/core/app-menu.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/core/app.js') ?>"></script>
    <!-- END: Theme JS-->

      <!-- BEGIN: Page JS-->
    <script src="<?= base_url('app-assets/js/scripts/extensions/ext-component-sweet-alerts.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/forms/form-wizard.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/tables/table-datatables-basic.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/forms/form-select2.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/js/scripts/forms/form-file-uploader.js') ?>"></script>
    <!-- END: Page JS-->
    

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script>
        $(document).ready( function () {
            $('#example').DataTable();
        } );
    </script>

