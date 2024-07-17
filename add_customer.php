<!--Brian Maina, 12/10, IT202-001,  Project Part3-->
<?php
// Get the product data
print_r($_POST);
echo "<br>";


$zip_code = filter_input(INPUT_POST, 'zip_code');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email_form = filter_input(INPUT_POST, 'email_form', FILTER_VALIDATE_EMAIL);
$address = filter_input(INPUT_POST, 'address');
$city = filter_input(INPUT_POST, 'city');
$state = filter_input(INPUT_POST, 'state');
$review = filter_input(INPUT_POST, 'review');
 
// Validate inputs
if ($first_name == null || $last_name == null || $email_form == null ||  $address == null || $city == null || $state == null || $zip_code == null ||
$review == null ) {
    $error = "Invalid product data. Check all fields and try 
    again.";
    include('error.php'); 
} else {
    require_once('database.php');
    // Add the product to the database  
    $query = 'INSERT INTO customers
                 (firstName, lastName, emailAddress, streetAddress, city, state, zipCode, reference, dateAdded)
              VALUES
                 (:first_name, :last_name, :email_form, :address, :city, :state, :zip_code, :review, NOW() )';
    $statement = $db->prepare($query);


    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':email_form', $email_form);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':zip_code', $zip_code);
    $statement->bindValue(':review', $review);
   
    $statement->execute();
    $statement->closeCursor();
 
    // Display the Product List page
   
}
?>
