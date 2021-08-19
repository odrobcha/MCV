<?php require 'View/includes/header.php'?>

    <section>
        <p><a href="index.php">To home</a></p>

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

<?php require 'View/includes/footer.php'?>