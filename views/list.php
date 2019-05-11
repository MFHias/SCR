<div class="page-header">
    <h2>List</h2>
</div>

<?php
// todo: liste von kategorien ausgeben
print_r(Data\DataManager::getCategories());

$categories = Data\DataManager::getCategories();

$categories[2]->getId();