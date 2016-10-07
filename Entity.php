<?php
/**
 * File name: Entity.php
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
 * Interface Entity
 * @category  PHP
 * @package
 * @author    markRichardson <compynerds@gmail.com>
 * @link
 */
interface Entity extends \JsonSerializable
{
    /**
     * @return string
     */
    public function __toString();
    /**
     * @return string
     */
    public function getOrganization();
    /**
     * @param string $organization
     * @return $this
     */
    public function setOrganization($organization);
}
