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



  <!-- datables for our table -->
  <script src="app/js/datatables.js"></script>


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

  <?php
  include_once('footer.php');
  ?>