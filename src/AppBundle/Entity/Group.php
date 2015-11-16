<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Group
 *
 * @ORM\Table(name="`group`")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupRepository")
 */
class Group
{
    /**
     * @var string
     *
     * @ORM\Column(name="group_name", type="string", length=45, nullable=false)
     */
    private $groupName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_patch", type="string", length=45, nullable=false)
     */
    private $photoPatch = 'generica.png';

    /**
     * @var integer
     *
     * @ORM\Column(name="idGroup", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="groupgroup")
     * @ORM\JoinTable(name="group_has_user",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Group_idGroup", referencedColumnName="idGroup")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="User_idUser", referencedColumnName="idUser")
     *   }
     * )
     */
    private $useruser;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->useruser = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set groupName
     *
     * @param string $groupName
     *
     * @return Group
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Group
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photoPatch
     *
     * @param string $photoPatch
     *
     * @return Group
     */
    public function setPhotoPatch($photoPatch)
    {
        $this->photoPatch = $photoPatch;

        return $this;
    }

    /**
     * Get photoPatch
     *
     * @return string
     */
    public function getPhotoPatch()
    {
        return $this->photoPatch;
    }

    /**
     * Get idgroup
     *
     * @return integer
     */
    public function getIdgroup()
    {
        return $this->idgroup;
    }

    /**
     * Add useruser
     *
     * @param \AppBundle\Entity\User $useruser
     *
     * @return Group
     */
    public function addUseruser(\AppBundle\Entity\User $useruser)
    {
        $this->useruser[] = $useruser;

        return $this;
    }

    /**
     * Remove useruser
     *
     * @param \AppBundle\Entity\User $useruser
     */
    public function removeUseruser(\AppBundle\Entity\User $useruser)
    {
        $this->useruser->removeElement($useruser);
    }

    /**
     * Get useruser
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUseruser()
    {
        return $this->useruser;
    }
}
