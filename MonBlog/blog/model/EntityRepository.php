<?php
namespace Model ;
class EntityRepository 
{

    private  $db;
    public $table;
   

//connecter a la bdd
public function getDb()
{
    if(!$this->db)
    {
        try
        {
            $xml = simplexml_load_file('app/config.xml');
            $this->table = $xml->table;
            
            try 
            {
                // On tente d'exécuter la connexion à la base de données
                $this->db = new \PDO("mysql:host=" . $xml->host . ";dbname=" . $xml->db, $xml->user, $xml->password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
            }
            catch(\PDOException $e)
            {
                echo '<div style="width: 400px; padding: 10px; background: 	#CCE5FF; border-radius: 4px; margin: 0 auto; color: white; text-align: center;">';
                echo "🛑 Une erreur s'est produite : 💬 " . $e->getMessage();
                echo '</div>';
            }
        }
        catch(\Exception $e)
        {
            echo '<div style="width: 400px; padding: 10px; background: 	#CCE5FF; border-radius: 4px; margin: 0 auto; color: white; text-align: center;">';
            echo "🛑 Une erreur s'est produite : 💬 " . $e->getMessage();
            echo '</div>';
        }
    }
 print_r($this->db);
return $this->db;
}

// Méthode permettant de sélectionner l'ensemble des article dans la table "articles"
public function selectAllEntityRepo()
{
    $data = $this->getDb()->query("SELECT * FROM " . $this->table); 
    $r = $data->fetchAll(\PDO::FETCH_ASSOC);
    return $r;
}

public function getFields()
    {
        $data = $this->getDb()->query("DESC " . $this->table);
        // $r (résultat traité par la méthode fetchAll() avec le mode FETCH_ASSOC)
        $r = $data->fetchAll(\PDO::FETCH_ASSOC);
        // array_slice() retourne une série d'éléments du tableau commençant par offset
        //                  (tableau, offset)    
        return array_slice($r, 1);
    }

// Méthode permettant de sélectionner un article dans la BDD en fonction de son ID
  public function selectEntityRepo($id)  
  {
    $data = $this->getDb()->query("select * from " .$this->table . " where id_" .$this->table ." = " .$id);
    $r=$data->fetch(\PDO::FETCH_ASSOC);
    return $r;

  }   
  //Méthode permettant de supprimer un article de la BDD en fonction de son ID
  public function deleteEntityRepo($id)
  {
    $q=$this->getDb()->query("delete from " . $this->table ." where id_" . $this->table . "=" .$id);
  }

// Méthode permettant d'ajouter ou de modifier un article
public function saveEntityRepo()
{
    $id = isset($_GET['id']) ? $_GET['id'] : 'NULL';
    $q = $this->getDb()->query('REPLACE INTO ' . $this->table . '(id_' . $this->table . ',' . implode(',', array_keys($_POST)) . ') VALUES (' . $id . ',' . "'" . implode("','", $_POST) . "'" . ')');
}




public function rechercheEntityRepo($value)
    {
        $valeur = '%' . $value . '%';
        $data = $this->getDb()->query('SELECT * FROM ' . $this->table . ' WHERE title LIKE "' . $valeur . '" OR author LIKE "' . $valeur . '"');
        if($data->rowCount() == 0)
        {
            $r = '';
        }
        else
        {
            $r = $data->fetchAll(\PDO::FETCH_ASSOC);
        }
        return $r;
    }


}