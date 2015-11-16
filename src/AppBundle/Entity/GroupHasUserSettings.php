<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupHasUserSettings
 *
 * @ORM\Table(name="group_has_user_settings", indexes={@ORM\Index(name="fk_GroupSettings_Group1_idx", columns={"Group_idGroup"}), @ORM\Index(name="fk_GroupSettings_User1_idx", columns={"User_idUser"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GroupHasUserSettingsRepository")
 */
class GroupHasUserSettings
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="user_blocked", type="boolean", nullable=false)
     */
    private $userBlocked = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_disabled", type="boolean", nullable=false)
     */
    private $groupDisabled = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="waiting_user_approval", type="boolean", nullable=false)
     */
    private $waitingUserApproval = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_admin", type="boolean", nullable=false)
     */
    private $isAdmin = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="idSettings", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsettings;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_idUser", referencedColumnName="idUser")
     * })
     */
    private $useruser;

    /**
     * @var \AppBundle\Entity\Group
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Group")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Group_idGroup", referencedColumnName="idGroup")
     * })
     */
    private $groupgroup;



    /**
     * Set userBlocked
     *
     * @param boolean $userBlocked
     *
     * @return GroupHasUserSettings
     */
    public function setUserBlocked($userBlocked)
    {
        $this->userBlocked = $userBlocked;

        return $this;
    }

    /**
     * Get userBlocked
     *
     * @return boolean
     */
    public function getUserBlocked()
    {
        return $this->userBlocked;
    }

    /**
     * Set groupDisabled
     *
     * @param boolean $groupDisabled
     *
     * @return GroupHasUserSettings
     */
    public function setGroupDisabled($groupDisabled)
    {
        $this->groupDisabled = $groupDisabled;

        return $this;
    }

    /**
     * Get groupDisabled
     *
     * @return boolean
     */
    public function getGroupDisabled()
    {
        return $this->groupDisabled;
    }

    /**
     * Set waitingUserApproval
     *
     * @param boolean $waitingUserApproval
     *
     * @return GroupHasUserSettings
     */
    public function setWaitingUserApproval($waitingUserApproval)
    {
        $this->waitingUserApproval = $waitingUserApproval;

        return $this;
    }

    /**
     * Get waitingUserApproval
     *
     * @return boolean
     */
    public function getWaitingUserApproval()
    {
        return $this->waitingUserApproval;
    }

    /**
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return GroupHasUserSettings
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Get idsettings
     *
     * @return integer
     */
    public function getIdsettings()
    {
        return $this->idsettings;
    }

    /**
     * Set useruser
     *
     * @param \AppBundle\Entity\User $useruser
     *
     * @return GroupHasUserSettings
     */
    public function setUseruser(\AppBundle\Entity\User $useruser = null)
    {
        $this->useruser = $useruser;

        return $this;
    }

    /**
     * Get useruser
     *
     * @return \AppBundle\Entity\User
     */
    public function getUseruser()
    {
        return $this->useruser;
    }

    /**
     * Set groupgroup
     *
     * @param \AppBundle\Entity\Group $groupgroup
     *
     * @return GroupHasUserSettings
     */
    public function setGroupgroup(\AppBundle\Entity\Group $groupgroup = null)
    {
        $this->groupgroup = $groupgroup;

        return $this;
    }

    /**
     * Get groupgroup
     *
     * @return \AppBundle\Entity\Group
     */
    public function getGroupgroup()
    {
        return $this->groupgroup;
    }
}
