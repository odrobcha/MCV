<?php require 'View/includes/header.php'?>

<div>
    <p><a href="/index.php/?page=articles">All articles</a></p>
    <h2>
        <?php echo  $article[0]['title']?>
    </h2>
    <h3>
        <?php echo  $article[0]['publish_date']?>
    </h3>
    <h4>
        <?php echo  $article[0]['description']?>
    </h4>

</div>

<?php require 'View/includes/footer.php'?>
