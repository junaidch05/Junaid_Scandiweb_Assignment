<!--php code  for mass deletion-->

<?php include 'display.php' ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'config.php';
    $all_id =$_POST['delete-checkbox'];
    $extract = implode(",",$all_id);
    $query = "DELETE FROM productlist WHERE id IN ($extract)";
    $result = mysqli_query($conn,$query);
    if($result){
     echo "<script>
    // Your JavaScript code here
   window.location.href ='index.php';
</script>";
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
    <title>Scandiweb junior web developer test</title>
    
</head>

<body>
    
    <!--Header Code-->
    <header>
        <div class="title">
            <h2>Product List</h2>
        </div>
         <div class="btn">
              <a href="addproduct.php"><button id='add-product-btn' type='button'>ADD</button></a>
              <button id="delete-product-btn">MASS DELETE</button>
        </div>
       
    </header>


<!--Form for deleteion and dispaly products-->

    <form action="index.php" method="post" id="delete_form">
     
    <?php foreach ($dataItems as $dataItem) { ?>
        <div class="card">
        <input type="checkbox" name="delete-checkbox[]" id="check"  class="delete-checkbox" value="<?php echo $dataItem->getId(); ?>">
        <div class="cardbody">
         <h3><?php echo $dataItem->getSKU(); ?></h3>
         <h3><?php echo $dataItem->getName(); ?></h3>
         <h3><?php echo $dataItem->getPrice().' $'; ?></h3>
         <?php if($dataItem->getType()==="dvd"){
          echo 'SIZE:'. $dataItem->getSize() .' MB';
         } 
         elseif($dataItem->getType()==="book"){
            echo 'Weight:'.  $dataItem->getWeight().' KG';
         }
         else{
             echo 'Dimension:'. $dataItem->getHeight().' x '.$dataItem->getWidth().' x '.$dataItem->getLength();
            
         }
         
         ?>
        </div>
    </div>

        <?php } ?>


    </form>


    <script src="common/index.js"></script>
    <script>
    

var delbutton = document.getElementById('delete-product-btn');
var x = document.getElementById("delete_form");
delbutton.addEventListener("click", function() {
    // Submit the form
    
    x.submit();
   
   
 

});



    </script>

</body>

</html>