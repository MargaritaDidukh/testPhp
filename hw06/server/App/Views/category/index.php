<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category</title>
</head>

<body>
<h1>Category</h1>
<form action="/category/save" method="post">
    <input type="text" name="title">
    <input type="text" name="description">
    <button type="submit">Save </button>
    <button type="reset">Cansel </button>
</form>
<br>
<br>
<form action="/category/delete" method="post">
    <?php

    foreach ($res as $key =>$value): ?>
        <input type="checkbox" name='data[]' value="<?=$value['id']?>">
        <?=  $value['title']?> =>
        <?=  $value['message'] .'<br>'?>
    <?php
    endforeach ?>
    <input type="submit" value="Delete" name="submit"> </form>
</body>

</html>