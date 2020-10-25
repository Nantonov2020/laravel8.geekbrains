<?php
include resource_path(). ('/views/header.php');

?>


<?php
include resource_path(). ('/views/menu.php');
?>

<h1>{{ $news['title'] }}</h1>

<p> {{ $news['text'] }} </p>


<?php
include resource_path(). ('/views/footer.php');

?>
