<!--php file for setting data from  db-->

<?php 
require_once 'config.php';

// Include the class file
require_once 'classes.php';


$sql = "SELECT * FROM `productlist`";
$result = mysqli_query($conn,$sql);
$product = new ShowProduct();
$dataItems = array();
while ($row = mysqli_fetch_assoc($result)) {
  
    $dataItem = new ShowProduct();
    $dataItem->setId($row['id']);
    $dataItem->setSKU($row['sku']);
    $dataItem->setName($row['name']);
    $dataItem->setPrice($row['price']);
    $dataItem->setType($row['type']);
    $dataItem->setSize($row['size']);
    $dataItem->setHeight($row['height']);
    $dataItem->setWidth($row['width']);
    $dataItem->setLength($row['length']);
    $dataItem->setWeight($row['weight']);
    $dataItems[] = $dataItem;
}

foreach ($dataItems as $dataItem) {
    $dataItem->product();
}


?>