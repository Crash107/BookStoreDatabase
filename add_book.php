<!--Brian Maina, 12/10, IT202-001,  Project Part3-->
<?php
// Get the product data

print_r($_POST);
echo "<br>";

$bookcategory_id = filter_input(INPUT_POST, 'bookcategory_id', 
                            FILTER_VALIDATE_INT);
$book_code = filter_input(INPUT_POST, 'book_code');
$book_name = filter_input(INPUT_POST, 'book_name');
$book_descripiton = filter_input(INPUT_POST, 'book_description');
$book_price = filter_input(INPUT_POST, 'book_price', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($bookcategory_id == null || $bookcategory_id == false || $book_code == null
    || $book_name == null  || $book_descripiton == null || $book_price == null || $book_price == false ) {
    $error_message = "Invalid product data. Check all fields and try 
    again.";
  

    include('error.php'); 
 
   
} else {
   
    
    require_once('database.php');
  
    
    
    $query = 'INSERT INTO books
    (bookCategoryID, bookCode, bookName, description, price, dateAdded)
 VALUES
    (:bookcategory_id, :book_code, :book_name, :book_description, :book_price, NOW())';

$statement = $db->prepare($query);
$statement->bindValue(':bookcategory_id', $bookcategory_id);
$statement->bindValue(':book_code', $book_code);
$statement->bindValue(':book_name', $book_name);
$statement->bindValue(':book_description', $book_descripiton);
$statement->bindValue(':book_price', $book_price);
$statement->debugDumpParams();
$statement->execute();
$statement->closeCursor();

 // Display the Product List page



}
?>
 
