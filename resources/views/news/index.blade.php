<?php
include resource_path(). ('/views/header.php');

?>

<?php
include resource_path(). ('/views/menu.php');
?>

<h1>Список категорий новостей</h1>

@foreach ($categories as $item)
    <p><a href="{{ route('category',['slug' => $item['slug']]) }}">{{ $item['title'] }}</a></p>
@endforeach


<?php
include resource_path(). ('/views/footer.php');

?>
