<html>
 <title> Conversor de monedas </title>
 <body>
<h4>TAREA CONVERTIDOR DE MONEDAS EN PHP - Rusbel.Perez</h4> 
<h5>De EUROS  a otra monedas</h5>
 <form method="post">
   Cantidad de euros:
   <input type="text" name="euro" value="">
    Seleccion de moneda:
    <select name="moneda">
     <OPTION VALUE="dolares" selected> Dolares USA
     <OPTION VALUE="libras"> Libras Esterlinas 
     <OPTION VALUE="pesos" > Pesos Mexicanos
     <OPTION VALUE="soles"> Soles Peruanos
    </select>
    </br>
   <?php
    $moneda=$_POST['moneda'];
    $euros=$_POST['euro'];
    if(empty($_POST['euro'])){
     echo "Introduzca una cantidad porfavor!!</br>";
    }
    else{
     if($moneda=='dolares'){
      $dolares=1.488;
      $resul=$euros * $dolares;
      echo "Total de euros en $moneda= $resul</br>"; 
     }//cierra if dolares
     if($moneda=='libras'){
      $libras=0.747;
      $resul=$euros * $libras;
      echo "Total de euros en $moneda= $resul</br>"; 
     }//cierra if libras
     if($moneda=='pesos'){
      $pesos=17.62;
      $resul=$euros * $pesos;
      echo "Total de euros en $moneda= $resul</br>"; 
     }//cierra if pesos
     if($moneda=='soles'){
      $soles=0.10;
      $resul=$euros * $soles;
      echo "Total de euros en $moneda= $resul</br>"; 
     }//cierra if soles
    }//cierra else
   ?>
   <input type="submit" name="boton" value="Convertir">
  </form>
 </body>
</html>