<?php

 $empNo = $_POST['txtNo'];
 $name = $_POST['txtName'];
 $basic = $_POST['txtBasic'];
 $type = $_POST['cmbType'];
 $gender = $_POST['rbGender'];
 $status = $_POST['chkStatus'];

 $all = 0.00;
 $etf = 0.00;
 $epf = 0.00;

        if ( $type == "C")
        {
              $all=$basic*0.05;
        }
        else if( $type == "S")
        {
              $all=$basic*0.1;
        }
        else if( $type == "M")
        {
              $all=$basic*0.15;
        }

        if($gender == "rbFemale")
        {
             $all = $all+5000;
        }

        if($status == "yes")
        {
          $epf = ($basic*0.12)+($basic*0.8);
          $etf = $basic*0.3;
        }

        $net = $basic+$all-($basic*0.8);

        echo "Employee Number : $empNo <br>";
        echo "Employee Name : $name <br>";
        echo "Basic Salary : $basic <br>";
        echo "Net Salary : $net <br>";
 




?>