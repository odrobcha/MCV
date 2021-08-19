<?php require 'View/includes/header.php'?>

    <section>
        <a href="index.php">To home</a>

        <h3>
            Amazing description of all articles. Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.
            Amazing description of all articles. Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.Amazing description of all articles.
        </h3>

        <ul>
            <?php foreach ($articles as $article) : ?>
               <li>
                   <a href="/index.php?page=article&id=<?php echo $article->id ?>">
                       <?= $article->title ?> (<?php echo $article->publishDate() ?>)
                   </a>
               </li>

            <?php endforeach; ?>
        </ul>
    </section>
<br>

<?php require 'View/includes/footer.php'?>