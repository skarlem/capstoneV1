
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
		customize: function ( doc ) {
			doc.content.splice( 1, 0, {
				margin: [ 0, 0, 0, 12 ],
				alignment: 'center',
				image: 'data:image/png;base64,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'} );
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


$(document).ready(function() {
    $('#table-accounts').DataTable();
} );


