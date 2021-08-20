<?php require 'View/includes/header.php'?>

<section>
    <a href="index.php">To home</a>
    <br>
    <?php
   // var_dump('<pre>');
   // var_dump($author);
   // var_dump('</pre>');

    ?>
    <h2>
        <?php echo $fullName?>
    </h2>
    <h3>
        <?php echo $university ?>
    </h3>

    <h4>
        <?php echo $description?>
    </h4>
</section>

<?php require 'View/includes/footer.php'?>
