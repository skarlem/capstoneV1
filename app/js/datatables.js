
var table =$('#dataTables-example').DataTable( {
    dom: 'Bfrtip',
    buttons: [{
    	extend: 'excelHtml5',
		text: '<i class="fa fa-file-excel-o"></i> Excel',
		titleAttr: 'Export to Excel',
		 className: 'btn btn-info',
		title: 'Incident Report',
		exportOptions: {
		columns: ':not(:last-child)',},
		action: function ( e, dt, node, config ) {
			swal({ title:"Hey!", text: "You put a marker on the map! Click the marker!", type: "success", buttonsStyling: false, confirmButtonClass: "btn btn-success"});
			
		}
    },
    {
    	extend: 'pdfHtml5',
		text: '<i class="fa fa-file-pdf-o"></i> PDF',
		titleAttr: 'Export to PDF',
		className: 'btn btn-danger',
		
		title: 'Incident Report',

		exportOptions: {
		columns: ':not(:last-child)',},
		
	},
	{
		extend: 'print',
		titleAttr: 'Print Table',
		className: 'btn btn-default',
		exportOptions: {
			columns: ':visible'
		},
		customize: function(win) {
			$(win.document.body).find( 'table' ).find('td:last-child, th:last-child').remove();
		}
	}
	]
	
}

);
 

