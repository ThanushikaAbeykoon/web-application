<!DOCTYPE html>
<html>
 <head>
  
  <title> Add Product </title>
  <link rel="stylesheet" type="text/css" href="./add.css"/>
  
  
 </head>

 <body>

   <h1>Add Product</h1>

  

  <div>
    <form method="POST" action="add.php">
      <table>
     
      <tr><td><label>Product Name:</label></td><td><input type="text" name="name"/></td></tr>
       <tr><td><label>Price:</label></td><td><input type="text" name="Price"/></td></tr>
       <tr><td><label>Description:</label></td><td><input type="text" name="Description"/></td></tr>
       <tr><td><label>Customization Options:</label></td><td><input type="text" name="cus_option"/></td></tr>
     
      </table>
      
      <input type="submit" value="add">
    </form>
  </div>
  <br>
  <div>
    
    <table border="1">
      <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Customization Options</th>
        
        
        
      </thead>
      <tbody>
        <?php
          include('conn.php');
          $query=mysqli_query($conn,"select * from `product`");
          while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['price']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['cus_option']; ?></td>
             
              
            
              <td>
                <a href="edit.php?id=<?php echo $row['name']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['name']; ?>">delete</a>
                
              </td>
            </tr>
            <?php
          }
        ?>
      </tbody>
        
  </div>

</body>

</html>

<a href="web.html">Back to the Main Menu</a>