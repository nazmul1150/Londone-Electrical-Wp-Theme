<?php
$tabs = $attributes['tabs'] ?? [];
$active = $attributes['activeTab'] ?? 0;

echo '<div class="my-accordion">';
foreach ($tabs as $index => $tab) {
    $isActive = $index === $active ? 'active' : '';
    echo "<div class='tab $isActive'>";
    echo "<button class='tab-title'>{$tab['title']}</button>";
    echo "<div class='tab-content'>{$tab['content']}</div>";
    echo "</div>";
}
echo '</div>';
