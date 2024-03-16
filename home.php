<?php

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'mypage');


?>
<!DOCTYPE html>
<html>

<head>
    <title> Home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background: #128184 ">
    <div class="header">
        <h2>Home_Page</h2>
    </div>

    <form method="post" class="style" action="home.php">



        <head>
            <style>
                table,
                td,
                th {
                    border: 1px solid white;
                    text-align: center;
                    color: white;
                    background-color: #7eb7b9;
                    ;
                    ;
                }

                td {
                    padding: 12px;

                }

                th {
                    background-color: #128184;
                    font-size: 20x;
                }

                li {
                    list-style: none;

                }

                table {
                    border-collapse: collapse;
                    width: 100%;
                    margin-bottom: 40px;

                }

                th {
                    height: 50px;
                }

                div {
                    text-align: right;
                }

                div a {
                    background-color: #128184;
                    color: white;
                    padding: 10px;
                    border-radius: 5px;
                }

                a {
                    text-decoration: none;

                }

                .bt {
                    background-color: white;
                    /* border-color: #128184 ; */
                }

                .delete {
                    color: red;
                }

                .updata {
                    color: #3c763d;
                }
            </style>

            <title>Rigesteration Form</title>
            <link rel="stylesheet" type="text/css" href="stylehome.css">
        </head>

        <body style="background: #128184 ">



            <form method="post" action="home.php">







                <table dir="ltr" style="font-size: 16px">
                    <tr>
                        <th> No.</th>
                        <th>Item_Name</th>
                        <th>Price</th>
                        <th>Exp.D</th>
                        <th>Type</th>
                        <th>Notes</th>
                        <th>Updata</th>
                        <th>Delete</th>

                    </tr>
                    <?php

                    $query = "select * from items ";
                    $result = mysqli_query($db, $query);

                    if (!$result) {
                        die("Error in query");

                    }
                    ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "  <tr>";
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['itemname'] . '</td>';
                        echo '<td>' . $row['price'] . '</td>';
                        echo '<td>' . $row['exp_d'] . '</td>';
                        echo '<td>' . $row['typeit'] . '</td>';
                        echo '<td>' . $row['notes'] . '</td>';
                        // echo '<td class="bt"> <a class="updata" href="updata.php ?udateid='.$row['id'].'">Updata</a></td>';
                        echo '<td class="bt"> <a class="updata"  href="updata.php ? updataid=' . $row['id'] . '" >Updata</a></td>';
                        echo '<td class="bt"> <a class="delete" href="delete.php ? deletid=' . $row['id'] . '" >Delete</a></td>';


                        echo "  </tr>";
                    } ?>


                </table>
                <div> <a class="add" href="AdminPanel.php">Add Item</a></div>

            </form>
        </body>

</html>