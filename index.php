<?php
require_once 'config.php';
require_once __DIR__.'/src/models/recipe-model.php';

$recipes = getAllRecipes();

require __DIR__ . '/src/views/index.php';