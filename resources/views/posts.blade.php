<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app.css">
    <title>Post</title>
</head>
<body>
    <h1 class="title">Blog</h1>
    <?php foreach ($posts as $post): ?>
    <div>
        <?php echo $post; ?>
    </div>
    <?php endforeach; ?>
</body>
</html>
