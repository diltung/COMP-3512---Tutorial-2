<?php 
// Group Members: Dilpreet and Nicia
?>
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<title>Art Process</title>    
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<?php include 'header.inc.php'; ?>
<main>

<?php
// Exercise 7: Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Exercise 8: Validate that Title field is not empty
    $title = trim($_POST['title']);
    
    if (empty($title)) {
        // Title is empty - show error message
        ?>
        <section class="results">
            <h2>Error</h2>
            <p>The Title field is required and cannot be empty.</p>
            <p><a href="ch12-proj21.php">Return to form</a></p>
        </section>
        <?php
    } else {
        // Title is valid - Exercise 6: Display all form data in a table
        ?>
        <section class="results">
            <table>
                <caption class="results__caption">Art Work Saved</caption>
                <tr>
                    <th class="results__label">Field</th>
                    <th class="results__label">Value</th>
                </tr>
                <?php
                // Loop through all POST data and display each field
                foreach ($_POST as $key => $value) {
                    echo '<tr>';
                    echo '<td class="results__label">' . htmlspecialchars($key) . '</td>';
                    echo '<td class="results__value">' . htmlspecialchars($value) . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </section>
        <?php
    }
    
} else {
    // Exercise 7: Not POST method - show error for direct access
    ?>
    <section class="results">
        <h2>Error</h2>
        <p>This page must be accessed by submitting the form.</p>
        <p><a href="ch12-proj21.php">Return to form</a></p>
    </section>
    <?php
}
?>

</main>       
</body>
</html>
