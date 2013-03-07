<?php

namespace Neblion\BaseAppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Account")
 */
class Account extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Neblion\BaseAppBundle\Entity\Profile", mappedBy="account")
     */
    private $profile;
    
    

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
     * Set profile
     *
     * @param \Neblion\BaseAppBundle\Entity\Profile $profile
     * @return Account
     */
    public function setProfile(\Neblion\BaseAppBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;
    
        return $this;
    }

    /**
     * Get profile
     *
     * @return \Neblion\BaseAppBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}