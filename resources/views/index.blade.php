<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>{{ __('Blog') }}</h1>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ '/posts/'. $post->slug }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>
