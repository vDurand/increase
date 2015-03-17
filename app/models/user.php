<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 09:50
 */

class user extends \Phalcon\Mvc\Model {
    protected $id;
    protected $mail;
    protected $password;
    protected $identite;
    protected $role;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $identite
     */
    public function setIdentite($identite)
    {
        $this->identite = $identite;
    }

    /**
     * @return mixed
     */
    public function getIdentite()
    {
        return $this->identite;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    public function columnMap()
    {
        //Les clés correspondent aux noms dans la table
        //Les valeurs aux noms dans l'application
        return array(
            'id' => 'id',
            'mail' => 'mail',
            'password' => 'password',
            'identite' => 'identite',
            'role' => 'role'
        );
    }

    public function initialize()
    {
        $this->hasMany("id", "useCase", "idDev",array("alias"=>"usecasesUser"));
        $this->hasMany("id", "message", "idUser",array("alias"=>"messagesUser"));
        $this->hasMany("id", "projet", "idClient",array("alias"=>"projets"));
    }
} 