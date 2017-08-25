  <?php
  function data_base_connect ()
   {

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sosPc";

     $dbh = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
  ?> 