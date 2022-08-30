<!-- <!DOCTYPE html>

    <link rel="stylesheet" href="app.css">
    <title>My Blog</title>
</head>
<body>
    < <h1>Hello world!</h1> -->
    <!-- <article>
        <h1><a href="/post">My First Post</a></h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, rerum quaerat. Illum saepe non alias aliquam, nisi quia beatae natus, assumenda ducimus minus, ea reiciendis ut tempora! Nesciunt, harum fugiat?
        </p>
    </article>
    <article>
        <h1><a href="/post"> My second blog</a></h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit error quis ex libero! Eaque quis accusamus cupiditate? Voluptas, ab corporis est quisquam dicta omnis numquam eius, illo, magni consequuntur delectus!</p>
    </article>
    <article>
        <h1><a href="/post">My third blog</a></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis architecto numquam quidem quas fuga omnis rem ipsam harum excepturi esse! Ad ipsa dolores qui ducimus, at est dolore obcaecati facere!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, ipsam maiores recusandae ea eligendi sed minus eveniet harum! Eum possimus facere laboriosam labore id, maiores fugit alias. Veniam, ab iste!
        </p>
    </article> -->
    <!-- <php foreach($posts as $post): ?>
        <article>
           <=$post;?>
        </article>
    <php endforeach; ?> -

</body> -->
<x-layou>
    @foreach ($posts as $post)
      <article>
        <h1>
            <a href="/posts/{{ $post->slug}}">
                {{$post->title}}
            </a>
        </h1>
        <div>
            {{ $post->excerpt}}
        </div>
      </article>
    @endforeach
</x-layout>