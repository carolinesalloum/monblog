<?php 

namespace controller;

use Exception;

class Controller 
{
    public $dbEntityRepository;

    public function __construct()
    {
        $this->dbEntityRepository = new \model\EntityRepository;
        

    }
    public function handleRequest()
    {
        $op = isset($_GET['op']) ? $_GET['op'] : 'home';
        try
        {            
            if($op == 'add' || $op == 'update')
                $this->save($op); 
            elseif($op == 'select')
                $this->select(); 
            elseif($op == 'delete')
                $this->delete(); 
                elseif($op == 'recherche')
                $this->recherche();
            
            elseif($op == 'list') 
                $this->selectAll(); 
            elseif($op == 'home') 
                $this->home(); 
            else 
                throw new Exception("404 error : La page n'a pas été trouvé !");
        }
        catch(\Exception $e)
        {
            echo '<div style="width: 400px; padding: 10px; background: 	#F4BB44; border-radius: 4px; margin: 0 auto; color: white; text-align: center;">';
            echo "🛑 Une erreur s'est produite 🛑<br> 💬 " . $e->getMessage();
            echo '</div>';
        }
    }



public function render($layout, $template, $parameters=[])
 {
    extract($parameters);//parameters['data'] => $data
    ob_start();
    require_once "view/$template";
    $content = ob_get_clean();
    ob_start();
    require_once "view/$layout";
    return ob_end_flush();
 }

// Méthode permettant d'afficher la page d'accueil
public function home()
{
    $this->render('layout.php','affichage-article.php',['title'=>'BLOG','data'=>$this->dbEntityRepository->selectAllEntityRepo(),'fields'=>$this->dbEntityRepository->getFields(),'id'=>'id_' .$this->dbEntityRepository->table,'message' => ""
]);
}

// Méthode permettant d'afficher tous les articles
public function selectAll()
{
    $this->render('layout.php', 'gestion-article.php',[
        'title'=>'GESTION DES ARTICLES','data'=>$this->dbEntityRepository->selectAllEntityRepo(),'fields'=>$this->dbEntityRepository->getFields(),
        'id'=>'id_' . $this->dbEntityRepository->table,
        'message' => "Ci-dessous vous trouverez l'ensemble des articles"
]);
}
// Méthode permettant de sélectionner et d'afficher le détail d'un article
public function select()
{
    $id = isset($_GET['id']) ? $_GET['id'] : $_GET['op'] == 'list';
    $this->render('layout.php', 'detail-article.php', [
        'title' => "INFORMATION de l'article",
        'data' => $this->dbEntityRepository->selectEntityRepo($id),
        'id' => 'id_' . $this->dbEntityRepository->table,
        'message' => "Ci-dessous vous trouverez le détail de l'article n°$id"
    ]);
}
// Méthode permettant de supprimer un article
public function delete()
{
    $id = isset($_GET['id']) ? $_GET['id'] : $_GET['op'] == 'list';
    $res = $this->dbEntityRepository->deleteEntityRepo($id);
    $alert = "✅ L'article n°$id à bien été supprimer de la base de données de l'entreprise";
    $this->selectAll($alert);
}


public function save($op)
    {
        $id = isset($_GET['id']) ? $_GET['id'] : NULL;
        $values = ($op == 'update') ? $this->dbEntityRepository->selectEntityRepo($id) : '';

    

        if($_POST)
        {
            $res = $this->dbEntityRepository->saveEntityRepo();
            $alert = ($op == 'update') ? "✅ L'article n° $id à été modifié avec succès !" : "✅ Création de l'article effectué avec succès !";
            $this->selectAll();
        }

        $this->render('layout.php', 'form.php', [
            'title' => "AJOUTER ARTICLE",
            'op' => $op,
            'fields' => $this->dbEntityRepository->getFields(),
            'values' => $values,
            'message' => "Ci-dessous vous trouverer le formulaire pour ajouter ou modifier un article"
        ]);
    }
    public function recherche()
    {
        if($_POST)
        {
            $this->render('layout.php', 'recherche.php', [
                'title' => "RESULTAT",
                'result' => $this->dbEntityRepository->rechercheEntityRepo($_POST['recherche']),
                'message' => "Ci-dessous vous trouverez les résultats de votre recherche"
            ]);
        }
    }
    
    

    }



