<!--Brian Maina, 12/10, IT202-001,  Project-Part3-->
<?php
require('database.php');
$query = 'SELECT *
          FROM bookCategories
          ORDER BY bookCategoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<title>Create Page</title>
    <link rel="stylesheet" type="text/css" href="styles/formphase1.css">
</head>
 
<body>
        <figure id = "head_home">
            <img src="images/logo.png" height = "75" width = "75" alt="logo.png" >
        </figure>
        
        <a href="homephase1.html"><br><br><br>Home</a> | <a href="create.php">Book Registration</a> | <a href="aboutphase1.html">About</a> | <a href="contactphase1.html">Contact</a>
        

  

    <main>
        <h3>Add Book</h3>
        <form action="add_book.php" method="post" 
              id="create">
 
            <label>Category:</label>
            <select name="bookcategory_id" id="bookcategory_id">
            <?php foreach ($categories as $category) : ?>
                <option value="<?php echo $category['bookCategoryID']; ?>">
                    <?php echo $category['bookCategoryName']; ?>
                </option>;
            <?php endforeach; ?>
            </select><br>
            
                   
                    


                        <label for="book_code">Book Code</label>
                        <input type="text" name="book_code" id="book_code" placeholder= "Must be 6 digits" minlength="6" maxlength="10" required>
                  
                        <label for="book_name">Book Name</label>
                        <input type="text"  name="book_name" id="book_name" placeholder= "Book Name" minlength = "1" maxlength= "255" required>
                  
                         <label for="book_price">Book Price</label>
                         <input type = "number"  name="book_price" id="book_price" placeholder="Book Price" maxlength = 12 step=".01"
                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                         required>


                         <label for="book_description">Book Description</label>
                         <input type="text"  name="book_description" id="book_description" placeholder= "Book Description" minlength = "1" maxlength= "255">
                      
            
                        <label>&nbsp;</label>
                        <input type="reset">
                        <input type="submit" value="Add Product"><br>

                        <a href="book.php">View Books Database</a>


        </form>
        
    </main>
    
 
  
</body>


</html>
 
