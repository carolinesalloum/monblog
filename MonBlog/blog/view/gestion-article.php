<?php

//echo '<pre>'; print_r($data); echo '</pre>';
///echo '<pre>'; print_r($fields); echo '</pre>';

?>

<table class="table table-bordered table-striped table-hover text-center tableau">
    <thead class="table-dark">
        <tr>
            <th><?= ucfirst($id); ?></th>
            <?php foreach($fields AS $value): ?>
                <th><?= ucfirst($value['Field']); ?></th>
            <?php endforeach; ?>
            <th>Consulter</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data AS $dataArticle): ?>
          <!--  <?php echo '<pre>'; print_r($dataArticle); echo '</pre>'; ?>-->
            <tr>
            <td><?= implode('</td><td>', $dataArticle); ?></td> 
            <td><a href="?op=select&id=<?= $dataArticle[$id]; ?>" class="btn btn-info"><i class="fa-sharp fa-solid fa-eye"></i></a></td>
                <td><a href="?op=update&id=<?= $dataArticle[$id]; ?>" class="btn btn-warning"><i class="fa-sharp fa-solid fa-user-pen"></i></a></td>
                <td><a href="?op=delete&id=<?= $dataArticle[$id]; ?>" class="btn btn-danger" onclick="return(confirm('⚠ Vous êtes sur le point de supprimer cet article. En êtes vous certain ?'))"><i class="fa-sharp fa-solid fa-user-xmark"></i></a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
