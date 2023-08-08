<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
     <style>
            div#social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            div#social-links ul li {
                display: inline-block;
            }          
            div#social-links ul li a {
                padding: 20px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 30px;
                color: #222;
                background-color: #ccc;
            }
        </style>
    <div class="container mt-4">
            <h2 class="mb-5 text-center">Laravel Social Share Buttons Example</h2>
            {!! $shareComponent !!}
        </div>
</x-app-layout>
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <link href="dataTables/1.10.21/jquery.dataTables.min.css" rel="stylesheet">
 <link href="dataTables/1.10.21/dataTables.bootstrap4.min.css" rel="stylesheet">
   <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<input type="hidden" name="baseurl" id="baseurl" value="{{url('/')}}/">
        <script type="text/javascript">
            $(function () {
               
    var url = $('#baseurl').val()+'ajax-country-list'; 
    var table = $('.country-datatable').DataTable({
        processing: true,
        serverSide: true,
        info: false,
        filter:false,
        aaSorting: [],
        pageLength: 1,
        dom: 'Bfrtip',
        buttons: [
          {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0,1]
                }
            }
        ],
        ajax: {
          url:url,
          data: function (d) {
                d.searchname = $('#searchname').val()
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', width: 40},            
            {data: 'name', name: 'name', orderable: true, searchable: true},
            {data: 'action', name: 'action', width: 50},
        ],
        columnDefs: [
       { orderable: false, targets: -1 },
       { orderable: false, targets: 0 },
    ]
    });
  
//    $.fn.dataTable.ext.errMode = 'none';
//    $('#searchname').bind("keyup", function(){
//        
//        table.draw();
//    });
//    $("#ExportReporttoExcel").on("click", function() {
//    table.button( '.buttons-excel' ).trigger();
//    });
    
    
  });
            </script>
            
             <table class="order_table country-datatable">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                </table>
        