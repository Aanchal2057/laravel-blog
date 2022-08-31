<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="app.css">
    <!-- <script src="app.js"></script> -->
</head>
<body>
<?php foreach ($posts as $post) : ?>
  <article>
    <?=  $post; ?>
  </article>
  <?php endforeach; ?>
  <!-- <article>
    <h1><a href="/posts/my-second-post">My Second post</a></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magnam harum commodi odio eaque earum nesciunt corrupti enim adipisci, eos molestiae voluptatem expedita aperiam facilis eligendi quibusdam provident repellendus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis repudiandae, provident numquam consequuntur obcaecati iure ad atque quasi debitis accusamus suscipit labore? Nesciunt, consectetur non? Et dolorum earum fugit necessitatibus!</p>
  </article>
  <article>
    <h1><a href="/posts/my-third-post">My third post</a></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde magnam harum commodi odio eaque earum nesciunt corrupti enim adipisci, eos molestiae voluptatem expedita aperiam facilis eligendi quibusdam provident repellendus. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis repudiandae, provident numquam consequuntur obcaecati iure ad atque quasi debitis accusamus suscipit labore? Nesciunt, consectetur non? Et dolorum earum fugit necessitatibus!</p>
  </article> -->
</body>
</html>