<?php require "portions/head.php"?>
<?php require "portions/nav.php"?>
<?php require "portions/header.php"?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
     <h1 class="h-4" >Tous les Articles</h1></br>
     <?php foreach ($articles as $article): ?>
        <a href="/article?id=<?= $article['id'] ?>" class="text-blue-900 hover:text-blue-500 font-semibold underline  h-2"><?= $article['title'] ?></a>
     </br>
     <?php endforeach ?>
    </div>
  </main>
  <?php require "portions/footer.php"?>