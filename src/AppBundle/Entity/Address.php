<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * AppBundle\Entity\Address
 *
 * @ORM\Table(name="addresses")
 * @ORM\Entity
 */
class Address
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string $firstname
     *
     * @ORM\Column(name="firstname", type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    protected $firstname;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    protected $lastname;

    /**
     * @var string $addressLine1
     *
     * @ORM\Column(name="address_line_1", type="string", length=250)
     * @Assert\NotBlank()
     * @Assert\Length(min=8, max=250)
     */
    protected $addressLine1;

    /**
     * @var string $addressLine2
     *
     * @ORM\Column(name="address_line_2", type="string", length=250, nullable=true)
     * @Assert\Length(max=250)
     */
    protected $addressLine2;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     * @Assert\NotBlank()
     * @Assert\Length(min=3, max=100)
     */
    protected $city;

    /**
     * @var string $postcode
     *
     * @ORM\Column(name="postcode", type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\Length(min=6, max=10)
     */
    protected $postcode;

    /**
     * @var string $telephoneHome
     *
     * @ORM\Column(name="telephone_home", type="string", length=15, nullable=true)
     * @Assert\Length(max=15)
     */
    protected $telephoneHome;

    /**
     * @var string $telephoneMobile
     *
     * @ORM\Column(name="telephone_mobile", type="string", length=15, nullable=true)
     * @Assert\Length(max=15)
     */
    protected $telephoneMobile;

    /**
     * Get id
     *
     * @return \int 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Address
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Address
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return Address
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return Address
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     * @return Address
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set telephoneHome
     *
     * @param string $telephoneHome
     * @return Address
     */
    public function setTelephoneHome($telephoneHome)
    {
        $this->telephoneHome = $telephoneHome;

        return $this;
    }

    /**
     * Get telephoneHome
     *
     * @return string 
     */
    public function getTelephoneHome()
    {
        return $this->telephoneHome;
    }

    /**
     * Set telephoneMobile
     *
     * @param string $telephoneMobile
     * @return Address
     */
    public function setTelephoneMobile($telephoneMobile)
    {
        $this->telephoneMobile = $telephoneMobile;

        return $this;
    }

    /**
     * Get telephoneMobile
     *
     * @return string 
     */
    public function getTelephoneMobile()
    {
        return $this->telephoneMobile;
    }
}
