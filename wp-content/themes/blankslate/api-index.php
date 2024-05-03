<?php
/*
Template Name: API Index
*/


function get_menu_items_json($menu_name) {
    $menu_items = array();

    // Get the menu by its name
    $menu = wp_get_nav_menu_object($menu_name);

    // If menu exists, get its items
    if ($menu) {
        $menu_items_data = wp_get_nav_menu_items($menu->term_id);

        // Loop through each menu item
        foreach ($menu_items_data as $item) {
            // Create an array for each menu item
            $menu_item = array(
                'ID' => $item->ID,
                'title' => $item->title,
                'url' => $item->url,
                'parent' => $item->menu_item_parent,
                'order' => $item->menu_order,
            );

            // Add the menu item to the menu items array
            $menu_items[] = $menu_item;
        }
    }

    // Return the menu items array as JSON
    return json_encode($menu_items);
}

// Usage: Call the function with the name of the menu you want to retrieve
$menu_name = 'main-menu'; // Change this to the name of your menu
$menu_json = get_menu_items_json($menu_name);

// Output the JSON
//echo $menu_json;
?>

<pre id="json-output"></pre>
<script>
    // Your JSON data goes here
    var jsonData = <?php echo $menu_json; ?>;

    // Display JSON data in a formatted way
    document.getElementById('json-output').textContent = JSON.stringify(jsonData, null, 2);
</script>