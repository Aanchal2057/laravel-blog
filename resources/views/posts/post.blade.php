<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog

    </title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    @foreach ($posts as $post) 
      <article>
        <h1>
         <a href="/posts/{{$post ->slug}}"></a> 
        <a href="/posts/< $post->slug ?>"> 
        < $post->title ?></a> 
        {{ $post->title}}
        </h1>
        <div>
        < $post->excerpt; ?>
        {{ $post ->excerpt}}
      </div>
      </article>
      
    @endforeach
    
</body>
</html> -->

<x-layout>
    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{$post->title}}
            </a>
        </h1>

        <p><?= $post->excerpt ?></p>
    </article>

    @endforeach
</x-layout>

