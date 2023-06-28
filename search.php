<?php
// Check if the search term is provided
if (isset($_GET['query'])) {
  // Get the search term from the query string
  $searchTerm = $_GET['query'];

  // Perform your search logic here
  // For demonstration purposes, let's assume an array of items
  $items = array(
    "home",
    "recipes",
    "review",
    "contactus",
    "about",
    "blog"
  );

  // Filter the items based on the search term
  $results = array_filter($items, function ($item) use ($searchTerm) {
    // Perform a case-insensitive search
    return stripos($item, $searchTerm) !== false;
  });

  // Display search results
  echo "<h2>Search Results for '$searchTerm':</h2>";
  if (!empty($results)) {
    echo "<ul>";
    foreach ($results as $result) {
       // Generate the link URL based on the result
       $link = strtolower(str_replace(' ', '', $result)) . ".php";
       echo "<li><a href='$link'>$result</a></li>";
    }
    echo "</ul>";
  } else {
    echo "No results found.";
  }
}
?>
