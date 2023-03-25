<?php

 //   include("../includes/table_data.php");
include("../includes/connect.php"); 	

$link=Connection();

$result=mysqli_query($link, "SELECT * FROM `id_information` ORDER BY `TimeStamp` DESC");

?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Information Detals</title>
    <script src="../js/d3.v3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
    body {
      background-image: url("https://img.freepik.com/free-photo/blue-bokeh-textured-plain-product-background_53876-102475.jpg?w=1060&t=st=1649588997~exp=1649589597~hmac=cf462660f31d0148bcd30627b2b88884f249aafae64be235c61dc48da20898e9");
      background-repeat: repeat;
  }
  
</style>
</head>
<body>
    <div id="head">
        <h1 style="color: #800000;">Display All Information in Detail</h1>
        <?php include("../includes/nav.php") ?>
        <div class="row" style=" width: 80%; margin: auto;">
            <h2 align="center", size = 16;",  style="font-family: Times New Roman"> Status history </h2>
            <h6> </h6>
        </div>
        <table border="1" cellspacing="1" cellpadding="1" width= "1150px">
        <tr class="table">
            <th width = 200px;>&nbsp;TimeStamp&nbsp;</th>
            <th >&nbsp;ID&nbsp;</th>
            <th>&nbsp;Name&nbsp;</th>
            <th>&nbsp;Birth&nbsp;</th>
            <th>&nbsp;Home&nbsp;</th>
            <th>&nbsp;Address&nbsp;</th>
        </tr>

        <?php 
       
        if($result!==FALSE){
            while($row = mysqli_fetch_array($result)) {
                printf("<tr>
                <td> &nbsp;%s </td>
                <td> &nbsp;%s&nbsp;</td>
                <td> &nbsp;%s&nbsp; </td>
                <td> &nbsp;%s&nbsp; </td>
                <td> &nbsp;%s&nbsp; </td>
                <td> &nbsp;%s&nbsp; </td>
                </tr>", 
                $row["TimeStamp"], $row["id"], $row["name"]
                , $row["birth"], $row["home"], $row["address"]
            );
            }
            mysqli_free_result($result);
            mysqli_close($link);
        }
        ?>
    </table>
    </div>
    


    
</body>
<footer>
  <div>
      <hr> </hr>
      <div id="center">
          <p>
            The project was developed by Group at EIU (Thanh, Dat, Mr.Vinh)
        </p>

        <p>
            &copy 2022 All Rights Reserved
        </p>
    </div>
</div>
</footer>

</html>
