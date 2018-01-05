<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Driver\Connection;

class TestController {
   /**
    * @Route("/test")
    */
  public function response(Connection $conn) {

    $str = "database connection not successful";
    if($conn) {
      $str = "database connection successful<br/><br/>";
      $sql = "SELECT * FROM test_table";
      $str .= "<table border='1'><tr><th>id</th><th>first_name</th><th>last_name</th></tr>";
      foreach($conn->query($sql) as $row) {
        $str .= "<tr>";
        $str .= "<td>" . $row['id'] . "</td>";
        $str .= "<td>" . $row['first_name'] . "</td>";
        $str .= "<td>" . $row['last_name'] . "</td>";
        $str .= "</tr>";
      }
      
    }

    return new Response($str);
  }
}

?>