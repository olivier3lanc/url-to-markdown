<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

include __DIR__.'/vendor/autoload.php';
use Embed\Embed;

$embed = new Embed();

//Load multiple urls asynchronously:
$info = $embed->get($_GET['link']);
// echo '<pre>'.$_GET['link'].'</pre>';
echo '[{"title":"'.addslashes($info->title).'","description":"'.addslashes($info->description).'"}]';
?>

