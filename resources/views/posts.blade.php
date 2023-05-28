<!doctype html>

<title>my website</title>
<link rel="stylesheet" href="/app.css">
<body>
    @foreach($posts as $post)
        <article>
            <h1>!! $post->title !!</h1>
            {!! $post->body !!}
        </article>
    @endforeach
    <!doctype html>
    <html lang="en">
    <head></head>
    <title>my website</title>
    <link rel="stylesheet" href="/app.css">
    <body>
    <nav>
        <ul>
            <li>yyyyy</li>
            <li>ffff</li>
            <li>rrr</li>

        </ul>
    </nav>

    <a href="/">Go Back</a>
    </body>
    </html>


</body>
