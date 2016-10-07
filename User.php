<?php
/**
 * File name: User.php
 * Project: project1
 * PHP version 5
 * @category  PHP
 * @package   Project1\Domain
 * @author    markRichardson <compynerds@gmail.com>
 * @copyright 2016 © donbstringham
 * @license   http://opensource.org/licenses/MIT MIT
 * @version   GIT: <git_id>
 * @link
 * $LastChangedDate$
 * $LastChangedBy$
 */
namespace Project1\Domain;
/**
 * Class User
 * @category  PHP
 * @package   Project1\Domain
 * @author    markRichardson <compynerds@gmail.com>
 * @link      http://donbstringham.us
 */
class User implements Entity
{
    /** @var \Project1\Domain\StringLiteral */
    protected $email;
    /** @var \Project1\Domain\StringLiteral */
    protected $firstName;
    /** @var \Project1\Domain\StringLiteral */
    protected $lastName;
    /** @var \Project1\Domain\StringLiteral */
    protected $organization;
    /**
     * User constructor
     * @param \Project1\Domain\StringLiteral $email
     * @param \Project1\Domain\StringLiteral $name
     * @param \Project1\Domain\StringLiteral $username
     */
    public function __construct(
        StringLiteral $email,
        StringLiteral $firstName,
        StringLiteral $lastName,
        StringLiteral $organization
    ) {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->organization = $organization;
    }
    /**
     * @return string
     */
    public function __toString()
    {
       return serialize($this);
    }
    /**
     * @return StringLiteral
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @return StringLiteral
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function getLastName(){
      return $this->lastName;
    }
    /**
     * @return StringLiteral
     */
    public function getOrganization(){
        return $this->organization;
    }

    /**
     * @param StringLiteral $id
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * @return string
     */
    public function jsonSerialize()
    {
       return get_object_vars($this);
    }
}
