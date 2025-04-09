<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">
        <div class="card shadow p-4">
            <h2>{{ $post->title }}</h2>
            <p class="text-muted">Posted on {{ $post->created_at->format('F j, Y') }}</p>
            <hr>
            <p>{{ $post->body }}</p>

            <a href="{{ route('posts.index') }}" class="btn btn-secondary mt-3">
                <i class="bi bi-arrow-left"></i> Back to Posts
            </a>
        </div>
    </div>

</body>

</html>