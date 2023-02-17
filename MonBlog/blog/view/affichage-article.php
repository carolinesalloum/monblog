<?php

//echo '<pre>'; print_r($data); echo '</pre>';

?>

<!--afficher les articles-->
<div class="container d-flex justify-content-around flex-wrap text-center mt-3 my-3">
    <?php foreach ($data as $dataArticle) : ?>

        <div class="card mt-4 my-6 bg-light" style="width: 18rem;">
            <img src="<?= $dataArticle['image']; ?>" style ="height:250px ;">
            <div class="card-body">
                <h5 class="card-title"><?= $dataArticle['title']; ?></h5>
               <!-- <p class="card-text my-3"><?= $dataArticle['content']; ?></p>-->
                <a href="#" class="btn btn-secondary">Lire la Suite</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>