<?php
include('server.php');
if (isset($_GET['updataid'])) {

   $id = $_GET['updataid'];
   echo $id;
   $query = "SELECT * FROM items WHERE id =$id";
   $result = mysqli_query($db, $query);
   $row = mysqli_fetch_assoc($result);
   $itemname = $row['itemname'];
   $price = $row['price'];
   $amount = $row['amount'];
   $exp_d = $row['exp_d'];
   $type = $row['typeit'];
   $notes = $row['notes'];
   if (isset($_POST['updata'])) {
   $itemname = mysqli_real_escape_string($db, $_POST['itemname']);
   $price = mysqli_real_escape_string($db, $_POST['price']);
   $amount = mysqli_real_escape_string($db, $_POST['amount']);
   $exp_d = mysqli_real_escape_string($db, $_POST['exp_d']);
   $type = mysqli_real_escape_string($db, $_POST['typeit']);
   $notes = mysqli_real_escape_string($db, $_POST['notes']);


   if (empty($itemname)) {
      array_push($errors, "Item name is required");
   }
   if (empty($price)) {
      array_push($errors, "Price is required");
   }
   if (empty($amount)) {
      array_push($errors, "Amount  is required");
   }
   if (empty($exp_d)) {
      array_push($errors, "Exp. Date  is required");
   }

   if ($type == 'Select_Item') {
      array_push($errors, " Type is required");
   }





   if (count($errors) == 0) {
      $query = "UPDATE items 
        SET 
        itemname = $itemname
        WHERE
            id = $id;";
      mysqli_query($db, $query);


      array_push($succes, "Done");


   }
   header("location:home.php");
}

}


?>
<!DOCTYPE html>
<html>

<head>
   <title> Updata Item</title>
   <link rel="stylesheet" type="text/css" href="style.css">
   <style>
      .but {
         text-align: right;
      }
   </style>
</head>

<body style="background: #128184 ">

   <div class="header">
      <h2>Updata Item</h2>
   </div>

   <form method="post">

      <?php include('errors.php'); ?>

      <div class="input">
         <label>Item Name</label>
         <input type="text" name="itemname" value="<?php echo $itemname; ?> ">
      </div>
      <div class="input">
         <label>Price</label>
         <input type="text" name="price" value="<?php echo $price; ?> ">
      </div>
      <div class="input">
         <label>Amount</label>
         <input type="text" name="amount" value="<?php echo $amount; ?> ">
      </div>
      <div class="input">
         <label>Expiry date</label>
         <input type="text" name="exp_d" value="<?php echo $exp_d; ?> ">
      </div>
      <div class="input">
         <p>
            <label>Type of product</label>
            <select id="myList" name="type" style="font-size:18px;" dir="rtl" value="<?php echo $type; ?> ">
               <option value="Meat">Meat </option>
               <option value="foodstuffs">foodstuffs</option>
               <option value="Detergent">Detergent</option>
               <option value="Candy">Candy</option>
               <option value="Paperwork">Paperwork</option>
            </select>
         </p>

      </div>


      <div class="inputs">
         <label>Notes</label>
         <input type="text" name="notes" style="margin-bottom: 20px" value="<?php echo $notes; ?> ">
      </div>
      <div class="but">
         <button type="submit" class="btn" name="updata ">Updata</button>

      </div>

   </form>
</body>

</html>