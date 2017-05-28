

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Listino Lamiere</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <h1>Inserire Codice Colore</h1>
   <img src="/images/slam.jpg" alt="logooo" WIDTH=170 HEIGHT=90>

<div class="grid">

      <div class="cell">
      <form >
        Codice <br>
        <input type="text" name="codice"class="box"> <br>
      </form>
    </div>

  <div class="cell">
    <select name="Finitura" multiple="multiple" class="lista">
        <option>Lucido</option>
        <option>Semilucido</option>
        <option>Opaco</option>
        <option>Raggrinzito</option>
     </select>
  </div>

  <div class="cell">
     <select name="Tipo" multiple="multiple"class="lista">
        <option>Ral</option>
        <option>Speciale</option>
     </select>
    </div>

     <div class="cell">
      <form method="get">
        Kg <br>
        <input type="text" name="kg"class="box"> <br>
      </form>
    </div>

    <ris class="cell" name="result">
      <p> Costo al Kg </p>
    </ris>
 </div>


 <button type="button" class="bottone"> Calcola prezzo </button>

  </body>
</html>


<script src="scripts/main.js"></script> 



<?php //echo "Bruno"; 

?>  