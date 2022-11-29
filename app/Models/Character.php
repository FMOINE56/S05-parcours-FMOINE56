<?php



class Character {

    // Création des propriétés pour chaque champ de la table Character
    private $id;
    private $name;
    private $description;
    private $picture;
    private $created_at;
    private $updated_at;
    private $type_id;

    // Méthodes du modèle

    public function findAll() {
        // On récupère la connexion PDO
        $pdo = Database::getPDO();
    
        // On crée notre requête SQL
        $sql = 'SELECT *
        FROM `character`
        LEFT JOIN `type` 
        ON character.type_id = type.id';
    
        // On exécute notre requête
        $pdoStatement = $pdo->query($sql);

        // On récupère les données
        $charactersList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
       // var_dump($charactersList);
        return $charactersList;
    }
    
    
    
    // Création des getter pour chaque propriété

    /**
     * Get the value of id
     */
    public function getId()
    {
    return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
    return $this->name;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
    return $this->description;
    }

    /**
     * Get the value of picture
     */
    public function getPicture()
    {
    return $this->picture;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
    return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
    return $this->updated_at; 
    }

    /**
     * Get the value of type_id
     */
    public function getTypeId()
    {
    return $this->type_id;
    }
}