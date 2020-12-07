<?php
include '../include/header.php';
?>

<body class="bg-dark" onload = "JavaScript:AutoRefresh(60000);">
  
  <table class="table table-dark ">
      <tr>
          <td><h3 class="p-3 mb-2 bg-dark text-white" id="time"></h3></td>
          <td><h3 class="p-3 mb-2 bg-dark text-white" id="name"></h3></td>
          <td class="p-3 mb-2 bg-dark text-white">Temp <h3 id="temp"></h3></td>
          <td class="p-3 mb-2 bg-dark text-white">Hum <h3 id="humidity"></h3></td>
      </tr>
  </table>

  
  
  
  
  <div id="root"></div>


<table class="table table-dark ">
  <thead>
    <tr>
      <th colspan="4" style="text-align: center" ><h4>Vinerea-Cugir</h4></th>
    </tr>
    <tr>
      <th><h5>Departure Cugir</h5></th>
      <th><h5>Departure Cugir S-D</h5></th>
      <th><h5>Departure Vinerea</h5></th>
      <th><h5>Departure Vinerea S-D</h5></th>
    </tr>
  </thead>

  <tbody >
    <tr>
      <td> <p id="cugir"></p></td>
      <td> <p id="cugirSD"></p></td>
      <td> <p id="vinerea"></p></td>
      <td> <p id="vinereaSD"></p></td>
    </tr>
 
  </tbody>

</table>

 



<script src="script.js"></script>
<script src="script2.js"></script>


<?php
include '../include/footer.php';
?>