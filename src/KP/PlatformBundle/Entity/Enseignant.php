<?php

namespace KP\PlatformBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity(repositoryClass="KP\PlatformBundle\Repository\EnseignantRepository")
 */
class Enseignant
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     *
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     *
     */
    
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;


    /**
     * Get id
     *
     * @return integer 
     */

    private $session;
    
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Enseignant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Enseignant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add id
     *
     * @param \KP\PlatformBundle\Entity\Session $id
     * @return Enseignant
     */
    public function addId(\KP\PlatformBundle\Entity\Session $id)
    {
        $this->id[] = $id;

        return $this;
    }

    /**
     * Remove id
     *
     * @param \KP\PlatformBundle\Entity\Session $id
     */
    public function removeId(\KP\PlatformBundle\Entity\Session $id)
    {
        $this->id->removeElement($id);
    }
}
