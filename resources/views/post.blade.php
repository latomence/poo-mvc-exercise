<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/app.css">
    <title>Post</title>
</head>
<body>
    <h1 class="title">Blog</h1>
    <?php echo $post_content ?>
</body>
</html>
