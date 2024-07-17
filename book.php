<!--Brian Maina, 12/10, IT202-001,  Project Part3-->
<?php
require_once('database.php');
 
// Get category ID
if (!isset($bookcategory_id)) {
    $bookcategory_id = filter_input(INPUT_GET, 'bookcategory_id', 
            FILTER_VALIDATE_INT);
    if ($bookcategory_id == NULL || $bookcategory_id == FALSE) {
        $bookcategory_id = 1;
    }
}
 
// Get name for selected category
$queryCategory = 'SELECT * FROM bookCategories
                  WHERE bookCategoryID = :bookcategory_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':bookcategory_id', $bookcategory_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['bookCategoryName'];
$statement1->closeCursor();
 // Get all categories
$queryAllCategories = 'SELECT * FROM bookCategories
ORDER BY bookCategoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get products for selected category
$queryProducts = 'SELECT * FROM books
WHERE bookCategoryID = :bookcategory_id
ORDER BY bookID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':bookcategory_id', $bookcategory_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>
 
 <!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>My Bookstore</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<!-- the body section -->
<body>
<main>
    <h1>Book List</h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
            <?php foreach ($categories as $category) : ?>
            <li>
                <a href="?bookcategory_id=<?php echo
                   $category['bookCategoryID']; ?>">
                    <?php echo $category['bookCategoryName']; ?>
                </a>
            </li>
            
            <?php endforeach; ?>
        </ul>
        </nav>           
    </aside>
 
    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Description</th>
                <th class="right">Price</th>
                

            </tr>
 
            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['bookCode']; ?></td>
                <td><?php echo $product['bookName']; ?></td>
                <td><?php echo $product['description']; ?></td>
                <td class="right"><?php echo 
                                   $product['price']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
       
    </section>
</main>    

</body>
</html>