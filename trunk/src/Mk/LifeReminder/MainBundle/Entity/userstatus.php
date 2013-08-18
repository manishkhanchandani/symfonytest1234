<?php

namespace Mk\LifeReminder\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userstatus
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mk\LifeReminder\MainBundle\Entity\userstatusRepository")
 */
class userstatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="alive_check", type="integer")
     */
    private $aliveCheck;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_alive_check", type="date")
     */
    private $lastAliveCheck;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_in_days", type="integer")
     */
    private $periodInDays;

    /**
     * @var string
     *
     * @ORM\Column(name="user_status", type="string", length=50)
     */
    private $userStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime")
     */
    private $modified;


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
     * Set aliveCheck
     *
     * @param integer $aliveCheck
     * @return userstatus
     */
    public function setAliveCheck($aliveCheck)
    {
        $this->aliveCheck = $aliveCheck;
    
        return $this;
    }

    /**
     * Get aliveCheck
     *
     * @return integer 
     */
    public function getAliveCheck()
    {
        return $this->aliveCheck;
    }

    /**
     * Set lastAliveCheck
     *
     * @param \DateTime $lastAliveCheck
     * @return userstatus
     */
    public function setLastAliveCheck($lastAliveCheck)
    {
        $this->lastAliveCheck = $lastAliveCheck;
    
        return $this;
    }

    /**
     * Get lastAliveCheck
     *
     * @return \DateTime 
     */
    public function getLastAliveCheck()
    {
        return $this->lastAliveCheck;
    }

    /**
     * Set periodInDays
     *
     * @param integer $periodInDays
     * @return userstatus
     */
    public function setPeriodInDays($periodInDays)
    {
        $this->periodInDays = $periodInDays;
    
        return $this;
    }

    /**
     * Get periodInDays
     *
     * @return integer 
     */
    public function getPeriodInDays()
    {
        return $this->periodInDays;
    }

    /**
     * Set userStatus
     *
     * @param string $userStatus
     * @return userstatus
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
    
        return $this;
    }

    /**
     * Get userStatus
     *
     * @return string 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return userstatus
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return userstatus
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return userstatus
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set modified
     *
     * @param \DateTime $modified
     * @return userstatus
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    
        return $this;
    }

    /**
     * Get modified
     *
     * @return \DateTime 
     */
    public function getModified()
    {
        return $this->modified;
    }
}
