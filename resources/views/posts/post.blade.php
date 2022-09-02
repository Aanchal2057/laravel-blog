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
    <!-- @foreach($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post-> slug}}">
                {!! $post->title !!}
            </a>
        </h1>
        <p>
        By <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> in<a href="/categories/{{ $post->category->slug}}">{{ $post->category->name}}</a>
        </p>

        <div><= $post->excerpt ?></div>
    </article>

    @endforeach -->

        @include('_post-header')
        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if($posts->count())
             <x-post-featured-card :post="$posts[0]"/>

               @if($posts->count()>1)
                  <div class="lg:grid lg:grid-cols-6">
                   @foreach($posts->skip(1) as $post)
                      <x-post-card :post="$post" class="{{ $loop->iteration <3 ?'col-span-3' :'col-span-2'}}"/>
                    @endforeach
                 </div>
                @endif

            @else
               <p class="text-center">No post yet.</p>
            @endif
        </main>

</x-layout>

