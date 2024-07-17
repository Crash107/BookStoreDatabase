<!--Brian Maina, 12/10 IT201-001, Project-Part3-->

<!DOCTYPE html>
<html>
<head>
<title>BookStore</title>
    <link rel="stylesheet" type="text/css" href="styles/joininglist.css">

</head>
 
<body>
    <header><h1>Mailing List</h1></header>
    <main>
        <h3>Join Mailing List</h3>
        
       
        
        <form action="add_customer.php" method="post"  id="join_mailing_list">

        
 
        <label for="first_name"></label>
        <input type="text"  name="first_name" id="first_name" placeholder= "First Name" minlength = "1" maxlength= "255" required >

        <label for="last_name"></label>
        <input type="text"  name="last_name" id="last_name" placeholder= "Last Name" minlength = "1" maxlength= "255" required >

        <label for="email_form"></label>
        <input type="email" name="email_form" id="email_form" placeholder= "Email" maxlength= "255" required>

    <label for="address"></label>
    <input type="text" name="address" id="address" placeholder= "Address" minlength = "1" maxlength= "255" required   >

    <label for="city"></label>
    <input type="text"  name="city" id="city" placeholder= "City" minlength = "1" maxlength= "255" required >

    <label for="state"></label>
    <input type="text"  name="state" id="state" placeholder= "State" minlength = "2" maxlength= "2" required  >

    <label for="zip_code"></label>
    <input type = "number" id = "zip_code" placeholder="Zip Code" name = "zip_code" maxLength = 5 oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required >

    

    <label for="review"></label>
    <select id="review" name="review">
        <option value="Google Search">Google Search</option>
        <option value="Friend">Friend</option>
        <option value="Yellow Page">Yellow Page</option>
    </select>

    
                      
            
                        <label>&nbsp;</label>
            <input type="reset">
            <input type="submit" value="Add Name to Mailing List"><br>
        </form>
        
    </main>
    
 
  
</body>
<footer id = "footer">Brian Maina, 12/10 IT201-001, Project-Part3</footer>
</html>