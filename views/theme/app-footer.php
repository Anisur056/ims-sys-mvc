</div>

    <script src="views/theme/js/adminlte.js"></script>
    <script src="views/theme/js/demo.js"></script>
    <script src="views/theme/js/overlayscrollbars.browser.es6.min.js"></script>
    <script src="views/theme/js/popper.min.js"></script>
    <script src="views/theme/js/all.min.js"></script>
    <script src="views/theme/js/bootstrap.min.js"></script>


    <script src="views/theme/js/jquery-3.7.1.js"></script>
    <script src="views/theme/js/datatable/dataTables.js"></script>
    <script src="views/theme/js/datatable/dataTables.buttons.js"></script>
    <script src="views/theme/js/datatable/buttons.dataTables.js"></script>
    <script src="views/theme/js/datatable/buttons.colVis.min.js"></script>
    <script src="views/theme/js/datatable/jszip.min.js"></script>
    <script src="views/theme/js/datatable/pdfmake.min.js"></script>
    <script src="views/theme/js/datatable/vfs_fonts.js"></script>
    <script src="views/theme/js/datatable/buttons.html5.min.js"></script>
    <script src="views/theme/js/datatable/buttons.print.min.js"></script>
    
    <script>
      const table = new DataTable('#studentTable', {
          lengthMenu: [
              [-1, 10, 25, 50],
              ['All',10, 25, 50]
          ],
          order: [[0, 'asc']],
          scrollX: true,
          layout: {
            topStart: {
                buttons: ['copy', 'csv', 'excel', 'pdf', 
                {
                    text: 'JSON',
                    action: function (e, dt, button, config) {
                        var data = dt.buttons.exportData();
 
                        DataTable.fileSave(new Blob([JSON.stringify(data)]), 'Export.json');
                    }
                },
                {
                  extend: 'print',
                  exportOptions: {
                    columns: ':visible'
                  },
                  autoPrint: false,
                  customize: function (win) {
                      $(win.document.body)
                          .prepend(
                              '<img src="views/theme/img/logo.png" style="position:absolute; top:50%; right:50%; transform: translate(50%,-50%); opacity: 0.1;" />'
                          );

                      $(win.document.body)
                          .find('table')
                          .addClass('compact')
                          .css('font-size', 'inherit');
                  }
                },
                {
                    extend: 'colvis',
                    collectionLayout: 'fixed columns',
                    popoverTitle: 'Column visibility control',
                    postfixButtons: ['colvisRestore']
                },
                ]
            },
            topEnd: 'search',
            bottomStart: 'pageLength',
            bottomEnd: 'info'
          }
      });
    </script>

    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
  </body>
  <!--end::Body-->
</html>