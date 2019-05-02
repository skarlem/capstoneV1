<?php
  include_once('header.php');
  include_once('marker_nav.php');
  ?>

  

<style type="text/css" media="print">
@page {
    size: auto;   /* auto is the initial value */
    margin: 1;  /* this affects the margin in the printer settings */
}
</style>

    <style>

body {
  font: 90%/1.45em "Helvetica Neue", HelveticaNeue, Verdana, Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
  color: #333;
  background-color: #fff;
}
/* body {
  font: normal 14px/100% "Andale Mono", AndaleMono, monospace;
  color: #fff;
  padding: 50px;
  width: 300px;
  margin: 0 auto;
  background-color: #374954;
} */

.dropdown {
  /* position: absolute; */
  /* top:50%; */
  /* transform: translateY(-50%); */
}

a {
  color: #fff;
}

.dropdown dd,
.dropdown dt {
  margin: 0px;
  padding: 0px;
}

.dropdown ul {
  margin: -1px 0 0 0;
}

.dropdown dd {
  position: relative;
}

.dropdown a,
.dropdown a:visited {
  color: #fff;
  text-decoration: none;
  outline: none;
  font-size: 12px;
}

.dropdown dt a {
  background-color: #4F6877;
  display: block;
  /* padding: 8px 20px 5px 10px; */
  /* min-height: 25px; */
  /* line-height: 24px; */
  overflow: hidden;
  border: 0;
  /* width: 272px; */
}

.dropdown dt a span,
.multiSel span {
  cursor: pointer;
  //display: inline-block;
  padding: 0 3px 2px 0;
}

.dropdown dd ul {
  background-color: #4F6877;
  border: 0;
  color: #fff;
  display: none;
  left: 0px;
  padding: 2px 15px 2px 5px;
  position: absolute;
  top: 2px;
  /* width: 280px; */
  list-style: none;
  height: 100px;
  overflow: auto;
}

.dropdown span.value {
  display: none;
}

.dropdown dd ul li a {
  padding: 5px;
  display: block;
}

.dropdown dd ul li a:hover {
  background-color: #fff;
}

button {
  background-color: #6BBE92;
  width: 302px;
  border: 0;
  padding: 10px 0;
  margin: 5px 0;
  text-align: center;
  color: #fff;
  font-weight: bold;
}
    </style>
  
 
    
  <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-info">
                    <h4 class="card-title ">Markers Table</h4>
                    <p class="card-category"> </p>

                  </div>

                <div class="dataTable_wrapper">
                    <div class="table-responsive">
                         
                        <table id="example"class="table table-striped table-bordered nowrap" width="100%">
                        <thead class=" text-primary">
                        <tr>
                            <th>Date</th>
                            <th>Location Description</th>
                            <th>Category</th>
                            <th>Item/Unit</th>
                            <th>Victim</th>
                            <th>Incident Narrative</th>
                            <th>Classification</th>
                            <th>Action Taken</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </thead>

                       

                        <tbody>
                       <?php
                         foreach( getMarkers()as $row ){
                          $id = $row['marker_id'];
                          $lat = $row['lat'];
                          $lng = $row['lng'];
                          $date = $row['date'];
                          $location = $row['location_description'];
                          $category = $row['category_desc'];
                          $items = $row['items'];
                          $victim = $row['victim'];
                          $incident_narrative = $row['what_happened'];
                          $action_taken = $row['action_taken'];
                          $suspect = $row['suspect'];
                          $classification=$row['classification_desc'];
                          $school_id=$row['reported_by'];
                          
                          $status =$row['status_description'];
                          
                      echo'
                      <tr>
                          
                         
                          <td>'.$date.'</td>
                         
                          <td>'.$location.'</td>
                          <td>'.$category.'</td>
                          <td>'.$items.'</td>
                          <td>'.$victim.'</td>
                          <td>'.$incident_narrative.'</td>
                         
                          <td>'.$classification.'</td>
                          <td>'.$action_taken.'</td>
                          <td style="width:100px;text-align:center">
                            <a style="cursor:pointer" data-toggle="modal" data-target="#ModalEdi'.$id.'" title="Edit"><i class="fa fa-edit"></i></a>
                           
                            <a style="cursor:pointer" data-toggle="modal" data-target="#viewModal'.$id.'" title="Delete"><i class="material-icons">zoom_out_map</i></a>
                            
                          </td>
                      </tr>
                      <div class="modal fade bd-example-modal-lg" id="viewModal'.$id.'" tabindex="-1" 
                      role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="false"  >
                      <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                             
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div id="print">

                              
                          <center>
                              <h5>Incident Report Information</h5>
                              </center>
                              <div class="logo">
                                  
                                  <img src="assets/marker/F-Theft.png">
                                  
                                </div>
                            
                              
                              <br>


                              <div class="container">

                              <div class="row">

                                <div class="col">
                                  Incident ID: '.$id.'
                                </div>
                                <div class="col">
                                  Classification: '.$classification.'
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  Category: '.$category.'
                                </div>
                                <div class="col">
                                  Status: '.$status.'
                                </div>
                               
                            </div>

                            <br>
                            <div class="row">
                                <div class="col">
                                Items Involved: <br>'.$items.'
                              </div>

                            
                              </div><!-- row end -->
                              <br>
                            <div class="row">
                                <div class="col">
                                Persons Involved <br>
                                Victim: '.$victim.'<br>
                                Suspect: '.$suspect.'
                              </div>

                            
                              </div><!-- row end -->

                              
                        <br>
                            <div class="row">
                                <div class="col">
                                Incident Narrative: <br>'.$incident_narrative.'
                              </div>

                            
                              </div><!-- row end -->

                              <br>
                              <div class="row">
                              <div class="col">
                              Action Taken:<br> '.$action_taken.'
                            </div>
                            
                              </div><!-- row end -->
                              
                          
                            </div>
                            
                              </div>
                               
                        </div>
                        <div class="modal-footer">
                              <div class="col-lg-12">
                                  <button type="submit" class="btn btn-info float-right" id="btnPrint" >Print</button>
                                  <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
                                  
                              </div>
                          </div>
                      </div>
                          </div>
                      </div>
                      ';
                         }
                       ?>

                       </tbody>
                </table>
                        
                       
                        
                      </table>
                    </div>
                  </div>
                </div>
                </div>
              </div>
      </div>
    </div>


    <script>
  document.getElementById("btnPrint").onclick = function() {
    printElement(document.getElementById("print"));
    window.print();
}

function printElement(elem, append, delimiter) {
    var domClone = elem.cloneNode(true);

    var $printSection = document.getElementById("printSection");

    if (!$printSection) {
        var $printSection = document.createElement("div");
        $printSection.id = "printSection";
        document.body.appendChild($printSection);
    }

    if (append !== true) {
        $printSection.innerHTML = "";
    }

    else if (append === true) {
        if (typeof(delimiter) === "string") {
            $printSection.innerHTML += delimiter;
        }
        else if (typeof(delimiter) === "object") {
            $printSection.appendChlid(delimiter);
        }
    }

    $printSection.appendChild(domClone);

}
  </script>

    <script>
    /* Plugin API method to determine is a column is sortable */
$.fn.dataTable.Api.register('column().searchable()', function() {
  var ctx = this.context[0];
  return ctx.aoColumns[this[0]].bSearchable;
});


$(document).ready(function() {
  // Create the DataTable
  var table = $('#example').DataTable({
    fixedHeader: true,

    orderCellsTop: true,
    columnDefs: [{
      searchable: false,
      targets: [0, 4]
    }],

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
    
    
		
  },
	
  ],
  });

  // Add filtering
  table.columns().every(function() {
    if (this.searchable()) {
      var that = this;


      var myList = $('<ul/>');
      var myMulti = $('<div class="mutliSelect"/>');
      myList.appendTo(myMulti);

      var myDd = $('<dd/>');
      myMulti.appendTo(myDd);

      var myDropdown = $('<dl class="dropdown"/>');
      myDropdown.append('<dt><a href="#"><span class="hida">Select</span><p class="multiSel"></p></a></dt>');
      myDd.appendTo(myDropdown);

      myDropdown
        .appendTo(
          $('thead tr:eq(1) td').eq(this.index())
        )
        .on('change', function() {
          var vals = $(':checked', this).map(function(index, element) {
            return $.fn.dataTable.util.escapeRegex($(element).val());
          }).toArray().join('|');

          that
            .search(vals.length > 0 ? '^(' + vals + ')$' : '', true, false)
            .draw();
        });


      // Add data
      this
        .data()
        .sort()
        .unique()
        .each(function(d) {
          myList.append($('<li><input type="checkbox" value="' + d + '"/>' + d + '</option>'));
        });

    }
  });


  /*
  	Dropdown with Multiple checkbox select with jQuery - May 27, 2013
  	(c) 2013 @ElmahdiMahmoud
  	license: https://www.opensource.org/licenses/mit-license.php
  */

  $(".dropdown dt a").on('click', function(e) {
    var dropdown = $(this).closest('.dropdown');
    dropdown.find('ul').slideToggle('fast');

    $('.dropdown').not(dropdown).find('ul').slideUp('fast');

  });

  $(".dropdown dd ul li a").on('click', function() {
    $(".dropdown dd ul").hide();
  });

  function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
  }

  $(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").slideUp('fast');

  });

  $('.multiSelect input[type="checkbox"]').on('click', function() {
    var title = $(this).closest('.multiSelect').find('input[type="checkbox"]').val(),
      title = $(this).val() + ",";

    if ($(this).is(':checked')) {
      var html = '<span title="' + title + '">' + title + '</span>';
      $('.multiSel').append(html);
      $(".hida").hide();
    } else {
      $('span[title="' + title + '"]').remove();
      var ret = $(".hida");
      $('.dropdown dt a').append(ret);

    }
  });
  
  $('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );


});
    </script>
 

