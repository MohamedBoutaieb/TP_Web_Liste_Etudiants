<?php


class OperationTable
{
public static function initialise($Table) {
    $bdd =ConnexionBD::getInstance();
    $query="DELETE from ".$Table;
    $reponse = $bdd->prepare($query);
    $reponse->execute();

    $query="INSERT INTO " .$Table." VALUES ('Boutaieb', 'Mohamed', 21,'math',11664545,'unknown.jpg'),('Barrani', 'Iheb', 30,'medecine',1545648,'unknown.jpg')";

    $reponse = $bdd->prepare($query);
    $reponse->execute();

}
    public static function add($Table,$nom,$prenom,$age,$cin,$section) {
        $bdd =ConnexionBD::getInstance();
        $query="INSERT INTO ".$Table. " VALUES (?,?,?,?,?,'unknown.jpg')";
        $reponse = $bdd->prepare($query);

        $reponse->execute(array($nom,$prenom,$age,$cin,$section));

    }
    public static function delete($Table,$cin) {
        $bdd =ConnexionBD::getInstance();
        $query="DELETE FROM ".$Table. " WHERE cin = ?";
        $reponse = $bdd->prepare($query);

        $reponse->execute(array($cin));

    }
    public static function update($Table,$nom,$prenom,$age,$cin,$section,$id) {
        $bdd =ConnexionBD::getInstance();
        $query="UPDATE " .$Table. " SET nom=?,prenom =?,age= ?, section=?,cin=? WHERE cin = ?";
        $reponse = $bdd->prepare($query);
        $reponse->execute(array($nom,$prenom,$age,$section,$cin,$id));


    }
    public static function updateID($Table,$cin,$photo) {
        $bdd =ConnexionBD::getInstance();
        $query="UPDATE " .$Table. " SET id_photo=? WHERE cin =?";
        $reponse = $bdd->prepare($query);
        $reponse->execute(array($photo,$cin));


    }
}