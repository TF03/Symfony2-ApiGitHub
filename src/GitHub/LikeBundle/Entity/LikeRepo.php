<?php
// src/GitHub/LikeBundle/Entity/LikeRepo.php
namespace GitHub\LikeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="like_repo")
 */
class LikeRepo
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $login;

    /**
     * @ORM\Column(type="smallint", scale=1)
     */
    protected $likeU;

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
     * Set login
     *
     * @param string $login
     * @return LikeRepo
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set likeU
     *
     * @param integer $likeU
     * @return LikeRepo
     */
    public function setLikeU($likeU)
    {
        $this->likeU = $likeU;

        return $this;
    }

    /**
     * Get likeU
     *
     * @return integer 
     */
    public function getLikeU()
    {
        return $this->likeU;
    }
}
