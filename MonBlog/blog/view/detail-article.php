<?php 

// echo '<pre>'; print_r($data); echo '</pre>';
$date = new DateTime($data['date']);
?>

<div class="container text-center mt-4" >

    <div class="card" style="width: 60rem; margin: 0 auto">
            
        <div class="card-body">
            <h5 class="card-title"><?= $data['title'] ; ?></h5>
            <table class="table table-bordered my-4">
                <tbody>
                    <tr>
                        <th scope="row">Id_Article</th>
                        <td><?= $data['id_articles']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><i class="fa-solid "></i>Content</th>
                        <td><?= $data['content']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Author</th>
                        <td><?= $data['author']; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Date de publication</th>
                        <td><?= $date->format('d-m-Y'); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Image</th>
                        <td><?= $data['image'] . ' €'; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="container">
                <a href="?op=update&id=<?= $data[$id]; ?>" class="btn btn-warning"><i
                        class="fa-sharp fa-solid fa-user-pen"></i></a>
                <a href="?op=delete&id=<?= $data[$id]; ?>" class="btn btn-danger"
                    onclick="return(confirm('⚠ Vous êtes sur le point de supprimer cet article. En êtes vous certain ?'))"><i
                        class="fa-sharp fa-solid fa-user-xmark"></i></a>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <a href="?op=list" class="btn btn-secondary mt-5"><i class="fa-solid fa-right-to-bracket"></i>&nbsp; Retourner sur
            Gestion des articles</a>
    
            </div>
            </div>
