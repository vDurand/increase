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