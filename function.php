<?php
// Function to convert array to <option> tags (Exercise 5)
function arrayToOptions($array) {
    $options = "";
    foreach ($array as $value) {
        $options .= '<option value="' . $value . '">' . $value . '</option>';
    }
    return $options;
}
?>