
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
    },
    {
			extend: 'pdfHtml5',
			title : function() {
				return "ABCDE List";
		},
		text: '<i class="fa fa-file-pdf-o"></i> PDF',
		orientation : 'landscape',
		pageSize : 'LEGAL',
		
		titleAttr: 'Export to PDF',
		className: 'btn btn-danger',
		
		title: 'Incident Report',

		exportOptions: {
		columns: ':not(:last-child)',},
		
	},
	{
		extend: 'print',	
		title : function() {
			return "ABCDE List";
	},
		titleAttr: 'Print Table',
		className: 'btn btn-default',
		orientation : 'landscape',
		pageSize : 'LEGAL',
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
 
$(document).ready(function() {
    $('#dataTables-example-2').DataTable();
} );


