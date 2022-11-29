<?php

namespace Sonic\Models;
use Sonic\utils\Database;
use PDO;

class CoreModel
{

  protected $id;
  protected $name;
  protected $created_at;
  protected $updated_at;


  public function findAll()
  {
    $className = get_class($this);
    $tableName = strtolower(str_replace(__NAMESPACE__ . "\\", "", $className));

    $sql = "SELECT *,`id` FROM `$tableName`";

    $pdo = Database::getPDO();

    $pdoStatement = $pdo->query($sql);

    $objects = $pdoStatement->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_CLASS, $className);
    return $objects;
  }

  /**
   * Get the value of id
   *
   * @return mixed
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @param   mixed  $id  
   *
   * @return  self
   */
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of name
   *
   * @return mixed
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param   mixed  $name  
   *
   * @return  self
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of created_at
   *
   * @return mixed
   */
  public function getCreatedAt()
  {
    return $this->created_at;
  }

  /**
   * Set the value of created_at
   *
   * @param   mixed  $created_at  
   *
   * @return  self
   */
  public function setCreatedAt($created_at)
  {
    $this->created_at = $created_at;

    return $this;
  }

  /**
   * Get the value of updated_at
   *
   * @return mixed
   */
  public function getUpdatedAt()
  {
    return $this->updated_at;
  }

  /**
   * Set the value of updated_at
   *
   * @param   mixed  $updated_at  
   *
   * @return  self
   */
  public function setUpdatedAt($updated_at)
  {
    $this->updated_at = $updated_at;

    return $this;
  }
}