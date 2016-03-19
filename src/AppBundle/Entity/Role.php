<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Role
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity("name")
 */

class Role{
    /**
     *
     * @var type integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    
    private $id;
    /**
     *
     * @var string
     * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
     */
    private $users;
    
    /**
     *
     * @var string
     * @ORM\Column(name="name", type="string") 
     */
    
    private $name;
    
    /**
     *
     * @var string
     * @ORM\Column(name="role", type="string") 
     */
    
    private $role;
    
    /**
     *
     * @var \DateTime
     * @ORM\Column(name="dat_upd", type="datetime")
     */
    
    private $datUpd;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dat_cre", type="datetime")
     */
    
    private $datCre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set datUpd
     *
     * @param \DateTime $datUpd
     *
     * @return Role
     */
    public function setDatUpd($datUpd)
    {
        $this->datUpd = $datUpd;

        return $this;
    }

    /**
     * Get datUpd
     *
     * @return \DateTime
     */
    public function getDatUpd()
    {
        return $this->datUpd;
    }

    /**
     * Set datCre
     *
     * @param \DateTime $datCre
     *
     * @return Role
     */
    public function setDatCre($datCre)
    {
        $this->datCre = $datCre;

        return $this;
    }

    /**
     * Get datCre
     *
     * @return \DateTime
     */
    public function getDatCre()
    {
        return $this->datCre;
    }

    /**
     * Add user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Role
     */
    public function addUser(\AppBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
