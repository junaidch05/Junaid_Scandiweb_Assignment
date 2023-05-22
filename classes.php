<!--main abstract class-->

<?php
   include 'config.php';
abstract class Product
{
   
    private $id;
   
    private $sku;
    private $name;
    private $price;

    private $type;
    private $size;
    private $height;

    private $width;
    private $length;
    private $weight;
  


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }

    public function setSKU($sku)
    {
        $this->sku = $sku;
    }


    public function getSKU()
    {
        return $this->sku;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

 
    public function getPrice()
    {
        return $this->price;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

 
    public function getType()
    {
        return $this->type;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }


    public function getSize()
    {
        return $this->size;
    }
    public function setHeight($height)
    {
        $this->height = $height;
    }


    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }


    public function getWidth()
    {
        return $this->width;
    }
    public function setLength($length)
    {
        $this->length = $length;
    }


    public function getLength()
    {
        return $this->length;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

 
    public function getWeight()
    {
        return $this->weight;
    }


abstract function product();

}


// Add product class

class Addproduct extends Product
{

 public function product(){
    require 'config.php';
    $sku = $this->getSKU();
    $name = $this->getName();
    $price = $this->getPrice();
    $type = $this->getType();
    $size = $this->getSize();
    $height = $this->getHeight();
    $width = $this->getWidth();
    $length = $this->getLength();
    $weight = $this->getWeight();


  

    $sql = "INSERT INTO `productlist`
    (`sku`,`name`,`price`,`type`,`size`,`height`,`width`,`length`,`weight`) 
    VALUES 
    ('$sku', '$name','$price','$type','$size','$height','$width','$length','$weight')";    

   $result = mysqli_query($conn,$sql);

   if ($result) {
        $javascriptCode = "<script>
        window.location.href='index.php'
     </script>";
     echo $javascriptCode;
    }
   else{
       echo "Error : " . mysqli_error($conn);
   }


  

 
 
 }
}

// Show product class

class Showproduct extends Product{
 
    public function product(){
        require 'config.php';
        $this->getId();
        $this->getSKU();
        $this->getName();
        $this->getPrice();
        $this->getType();
        $this->getSize();
        $this->getHeight();
        $this->getWidth();
        $this->getLength();
        $this->getWeight();
    }
}

?>


