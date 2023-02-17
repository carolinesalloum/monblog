<?php
//echo '<pre>'; print_r($result); echo '</pre>';
if(!empty($result))
{
    ?>
<div class="alert alert-info text-center">✅ Nombre de résultat(s) : <?= sizeof($result); ?></div>
    <?php foreach($result AS $data): ?>
        <div class="card-body">
            <h5 class="card-title font-weight-bold "><?= $data['title'] ; ?></h5>
            <p ><?= $data['content'] ; ?></p>
            <hr>
            
        </div>

    <?php endforeach; ?>
    </div>

<?php
}
else
{
    echo '<div class="alert alert-danger text-center">⚠ Aucun résultat ne correspond à votre recherche !</div>';
}