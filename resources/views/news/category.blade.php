<?php
include resource_path(). ('/views/header.php');

?>

<?php
include resource_path(). ('/views/menu.php');
?>

<h1>Перечень новостей по категории: {{ $name }}</h1>

@foreach ($news as $item)
    <p><a href="{{ route('detail', ['id' => $item['id']]) }}">{{ $item['title'] }}</a></p>
@endforeach


<?php
include resource_path(). ('/views/footer.php');

?>
