
var table =$('#dataTables-example').DataTable( {
	responsive: true,
    dom: 'BRlfrtip' ,
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
		
	}
	
	]
	
}

);
 



$(document).ready( function () {
    var divExample = $('#dataTables-example-2');
    var tableExample = divExample.DataTable({
        
        "searching": true,
        "stateSave": true,
        "dom": 'Rlfrtip'    
    });
} );


$(document).ready(function() {
    $('#dataTables-example-3').DataTable();
} );


