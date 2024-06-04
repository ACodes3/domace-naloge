<?php
include 'menu.php';

$current_page = basename($_SERVER['PHP_SELF']);

echo '<header>';
echo '<nav>';
echo '<ul>';

foreach ($links as $link) {
    $active = $current_page === $link['link'] ? 'class="active"' : '';
    echo "<li $active><a href=\"{$link['link']}\">{$link['title']}</a></li>";
}

echo '</ul>';
echo '</nav>';
echo '</header>';
?>
