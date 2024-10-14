<?php


class Prijava{
    public $id;
    public $predmet;
    public $katedra;
    public $sala;
    public $datum;

    public function __construct($id=null,$predmet=null,$katedra=null,$sala=null,$datum=null)
    {
        $this->id=$id;
        $this->predmet=$predmet;
        $this->katedra=$katedra;
        $this->sala=$sala;
        $this->datum=$datum;
    }

    public static function getAll(mysqli $conn) {
        $query="SELECT * FROM prijave";
        return $conn->query($query);
    }
    public static function deleteById($id,mysqli $conn){
        $query="DELETE FROM prijave WHERE id=$id";
        return $conn->query($query);
    }
    public static function add(Prijava $prijava,mysqli $conn){
        $query="INSERT INTO prijave(predmet,katedra,sala,datum) VALUES ('$prijava->predmet','$prijava->katedra','$prijava->sala','$prijava->datum')";
        return $conn->query($query);
    }

}


?>