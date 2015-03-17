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