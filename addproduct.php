<?php
// Include the database connection file

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once 'config.php';

// Include the  class file
require_once 'classes.php';

// Create a new object
$product = new Addproduct();

// Set the object properties using form data
$sku = $_POST["sku"];
@$product->setSKU($_POST['sku']);
@$product->setName($_POST['name']);
@$product->setPrice($_POST['price']);
@$product->setType($_POST['type']);
@$product->setSize($_POST['size']);
@$product->setHeight($_POST['height']);
@$product->setWidth($_POST['width']);
@$product->setLength($_POST['length']);
@$product->setWeight($_POST['weight']);

$Existsql = "SELECT * FROM `productlist` WHERE sku = '$sku' ";
$Existresult = mysqli_query($conn,$Existsql);
$Existrow = mysqli_num_rows($Existresult);

if($Existrow > 0){
    
    $javascriptCode = "<script>
    // Your JavaScript code here
    alert('sku already exist! enter new sku  ');
</script>";

// Output the JavaScript code
echo $javascriptCode;
 
   
}
else{
    $product->product();
}

}



?>

<!--HTML code-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common/common.css">
    
    <title>Add_Product</title>
</head>

<body>
    <!--Header code-->
    <header>
        <div class="title">
            <h2>ADD Product</h2>
        </div>
        <div id="btn-section">
            <button id="saveproduct"> Save </button>
      <a href="index.php"><button id="cancel"> Cancel</button></a>
        </div>
    </header>
    <div>

    <!--Form code-->
        <form action="addproduct.php" method="post" id="product_form">
            <label for="sku">SKU</label>
            <input type="text" placeholder="Please enter the sku" name="sku" id="sku" required>
            <br>
            <label for="name">Name</label>
            <input type="text" placeholder="Please enter the name" name="name"  id="name" required>
            <br>
            <label for="price">Price</label>
            <input type="number" step="any" placeholder="Please enter the price $"  id="price" name="price" class="span" required>
            <span id="message"></span>
            <br>
            <label for="type">type Swither</label>
            <select name="type" id="productType" onchange="changeForm()" required>
                <option value="">--Type Switcher--</option>
                <option value="dvd">DVD</option>
                <option value="book">Book</option>
                <option value="furniture">Furniture</option> 
            </select>
            <br>
            <div id="dynamic"></div>

        </form>

    </div>

   
    <script src="common/index.js"></script>
</body>

</html>