<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class City {
  
  /** 
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue
   */
  protected $id;
  
  /** @ORM\Column(type="string", length=100) */
  protected $name;
  
  /** @ORM\Column(type="string", length=100) */
  protected $alias;
  
  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }
  
  
  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }
  
  
  /**
   * @return mixed
   */
  public function getAlias() {
    return $this->alias;
  }
  
  
  /**
   * @param mixed $name
   */
  public function setName($name) {
    $this->name = $name;
  }


  /**
   * @param mixed $alias
   */
  public function setAlias($alias) {
    $this->alias = $alias;
  }

  public function __toString()
  {
    return $this->getName();
  }
}

