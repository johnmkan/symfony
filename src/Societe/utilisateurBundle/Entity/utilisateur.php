<?php

/**
 * Created by PhpStorm.
 * User: Papa S. DIALLO
 * Date: 23/08/2016
 * Time: 11:48
 */
namespace Societe\utilisateurBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class utilisateur
 * @package Societe\utilisateurBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class utilisateur extends  BaseUser
{
    /**
     *
     * @var integer
     *
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}