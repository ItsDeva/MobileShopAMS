<?php

  $host="localhost";

  $user="root";

  $pwd="root@123";

  $database="mobilestore";

  $con=mysql_connect($host,$user,$pwd,$database) or die("Cannot Connect to Database");

  mysql_select_db($database,$con) or die ("Error Occured");

  $name=mysql_query("select * from mobiles"); 

  echo "<table align=center>";

 

  while($data=mysql_fetch_array($name))

   {

 

     echo "<tr>

                                                <td>Mobile ID</td><td>:</td>

                                                <td>".$data['mobileid']."</td>

                                </tr>

                                <tr>

                                                <td>Brand Name</td><td>:</td>

                                                <td>".$data['brand']."</td>

                                </tr>

                                <tr>

                                                <td>Model</td><td>:</td>

                                                <td>".$data['model']."</td>

                                </tr>
								 <tr>

                                                <td>IMEI 1</td><td>:</td>

                                                <td>".$data['imei1']."</td>

                                </tr>
								<tr>

                                                <td>IMEI 2</td><td>:</td>

                                                <td>".$data['imei2']."</td>

                                </tr>";

                 

                }

               

                echo "</b></table>";

?>