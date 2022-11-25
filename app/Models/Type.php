<?php

class Type 

{
    // Création des propriétés pour chaque champ de la table Type

    private    $id;
    private    $name;	
    private    $created_at;	
    private    $updated_at;



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
}