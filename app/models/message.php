<?php
/**
 * Created by Valentin Durand
 * IUT Caen - DUT Informatique
 * Date: 17/03/15
 * Time: 09:56
 */

class message extends \Phalcon\Mvc\Model {
    protected $id;
    protected $objet;
    protected $content;
    protected $date;
    protected $idUser;
    protected $idProjet;
    protected $idFil;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

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
     * @param mixed $idFil
     */
    public function setIdFil($idFil)
    {
        $this->idFil = $idFil;
    }

    /**
     * @return mixed
     */
    public function getIdFil()
    {
        return $this->idFil;
    }

    /**
     * @param mixed $idProjet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;
    }

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param mixed $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param mixed $objet
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    }

    /**
     * @return mixed
     */
    public function getObjet()
    {
        return $this->objet;
    }

    public function columnMap()
    {
        //Les clés correspondent aux noms dans la table
        //Les valeurs aux noms dans l'application
        return array(
            'id' => 'id',
            'objet' => 'objet',
            'content' => 'content',
            'date' => 'date',
            'idUser' => 'idUser',
            'idProjet' => 'idProjet',
            'idFil' => 'idFil'
        );
    }

    public function initialize()
    {
        $this->belongsTo("idUser", "user", "id");
        $this->belongsTo("idFil", "message", "id");
        $this->hasMany("id", "message", "idFil",array("alias"=>"messagesFil"));
    }
} 