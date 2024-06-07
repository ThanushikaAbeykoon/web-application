<?php
   
   include('conn.php');
   
   $sql= "INSERT INTO product (name,price,description,cus_option)
          VALUES 
          
          ('$_POST[name]',
          '$_POST[Price]',
           '$_POST[Description]',
           '$_POST[cus_option]')";
      

        if (!mysqli_query($conn,$sql)){
        	die('Error'.mysqli_error($conn));
            
}

        else{
        	echo "Records were added";
?>
<!DOCTYPE html>
         <html>
         <head>
            <meta charset="utf-8">
            <title> </title>
         </head>
         <body>
         <a href="addproduct.php">Back</a>
         </body>
         </html>
<?php
}
?>