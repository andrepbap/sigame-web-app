<?php

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="user")
 */
class User {

    /**
     * @var string
     * @ORM\Column(name="user_name", type="string", length=45, nullable=false)
     * @Assert\Length(min="4", max="20", minMessage="Your name must be at least {{ limit }} characters long", maxMessage="Your name cannot be longer than {{ limit }} characters")
     * @Assert\NotBlank()
     */
    private $userName;

    /**
     * @var \DateTime
     * @ORM\Column(name="birth", type="datetime", nullable=false)
     * @Assert\Date()
     */
    private $birth;

    /**
     * @var \BigIntType
     * @ORM\Column(name="facebook_id", type="bigint")
     */
    private $facebookId;
    
    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     * @Assert\Email()
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="password", type="string", length=45, nullable=false)
     * @Assert\Length(min="4", max="45", minMessage="Your password must be at least {{ limit }} characters long", maxMessage="Your password cannot be longer than {{ limit }} characters")
     */
    private $password;

    /**
     * @var boolean
     * @ORM\Column(name="blocked", type="boolean", nullable=false)
     */
    private $blocked = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="password_recuperation_key", type="string", length=45, nullable=true)
     */
    private $passwordRecuperationKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recuperation_key_date", type="datetime", nullable=true)
     */
    private $recuperationKeyDate;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_patch", type="string", length=45, nullable=false)
     */
    private $photoPatch = 'generica.png';

    /**
     * @var float
     * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float
     * @Assert\Type(
     *     type="float",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="position_date", type="datetime", nullable=true)
     */
    private $positionDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;
    
    /**
     * @var string
     * @ORM\Column(name="salt", type="string", length=45, nullable=false)
     */
    private $salt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     * @Assert\NotBlank()
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Group", mappedBy="useruser")
     */
    private $groupgroup;

    /**
     * Constructor
     */
    public function __construct($userName, $email) {
        $this->groupgroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->userName = $userName;
        $this->email = $email;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * 
     * @return User
     */
    public function setUserName($userName) {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string
     */
    public function getUserName() {
        return $this->userName;
    }

    /**
     * Set birth
     *
     * @param \DateTime $birth
     *
     * @return User
     */
    public function setBirth($birth) {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get birth
     *
     * @return \DateTime
     */
    public function getBirth() {
        return $this->birth;
    }
    
    /**
     * Set facebookId
     *
     * @param \BigIntType $facebookId
     *
     * @return User
     */
    public function setFacebookId($facebookId) {
        $this->facebookId = $facebookId;

        return $this;
    }
    
    /**
     * Get facebookId
     *
     * @return \BigIntType
     */
    public function getFacebookId() {
        return $this->facebookId;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set blocked
     *
     * @param boolean $blocked
     *
     * @return User
     */
    public function setBlocked($blocked) {
        $this->blocked = $blocked;

        return $this;
    }

    /**
     * Get blocked
     *
     * @return boolean
     */
    public function getBlocked() {
        return $this->blocked;
    }

    /**
     * Set passwordRecuperationKey
     *
     * @param string $passwordRecuperationKey
     *
     * @return User
     */
    public function setPasswordRecuperationKey($passwordRecuperationKey) {
        $this->passwordRecuperationKey = $passwordRecuperationKey;

        return $this;
    }

    /**
     * Get passwordRecuperationKey
     *
     * @return string
     */
    public function getPasswordRecuperationKey() {
        return $this->passwordRecuperationKey;
    }

    /**
     * Set recuperationKeyDate
     *
     * @param \DateTime $recuperationKeyDate
     *
     * @return User
     */
    public function setRecuperationKeyDate($recuperationKeyDate) {
        $this->recuperationKeyDate = $recuperationKeyDate;

        return $this;
    }

    /**
     * Get recuperationKeyDate
     *
     * @return \DateTime
     */
    public function getRecuperationKeyDate() {
        return $this->recuperationKeyDate;
    }

    /**
     * Set photoPatch
     *
     * @param string $photoPatch
     *
     * @return User
     */
    public function setPhotoPatch($photoPatch) {
        $this->photoPatch = $photoPatch;

        return $this;
    }

    /**
     * Get photoPatch
     *
     * @return string
     */
    public function getPhotoPatch() {
        if(!filter_var($this->photoPatch, FILTER_VALIDATE_URL)){
            return $this->getRequest()->getUriForPath('/images/'.$this->photoPatch);
        }
        return $this->photoPatch;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return User
     */
    public function setLatitude($latitude) {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude() {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return User
     */
    public function setLongitude($longitude) {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude() {
        return $this->longitude;
    }

    /**
     * Set positionDate
     *
     * @param \DateTime $positionDate
     *
     * @return User
     */
    public function setPositionDate($positionDate) {
        $this->positionDate = $positionDate;

        return $this;
    }

    /**
     * Get positionDate
     *
     * @return \DateTime
     */
    public function getPositionDate() {
        return $this->positionDate;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser() {
        return $this->iduser;
    }

    /**
     * Add groupgroup
     *
     * @param \AppBundle\Entity\Group $groupgroup
     *
     * @return User
     */
    public function addGroupgroup(\AppBundle\Entity\Group $groupgroup) {
        $this->groupgroup[] = $groupgroup;

        return $this;
    }
    
    /**
     * Set salt
     *
     * @param String $salt
     *
     * @return String
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return String
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Remove groupgroup
     *
     * @param \AppBundle\Entity\Group $groupgroup
     */
    public function removeGroupgroup(\AppBundle\Entity\Group $groupgroup) {
        $this->groupgroup->removeElement($groupgroup);
    }

    /**
     * Get groupgroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroupgroup() {
        return $this->groupgroup;
    }

}
