<?php
/**
 * Created by PhpStorm.
 * User: 201356187
 * Date: 2015-10-30
 * Time: 12:52
 */


$Fichier = "SauvegardeVote.txt";
$NombreParticipant= 0;
$Pourcentage = 0;
$NombreVoteAnimaux["Chien"] =0;
$NombreVoteAnimaux["Chat"] =0;
$NombreVoteAnimaux["Oiseau"] =0;
$NombreVoteAnimaux["Serpent"] =0;
$NombreVoteAnimaux["Singe"] =0;

if($LESVOTES = file_get_contents($Fichier))
{
    $NombreParticipant = substr_count($LESVOTES, ' ');
    $NombreVoteAnimaux["Chien"] = substr_count($LESVOTES, 'Chien');
    $NombreVoteAnimaux["Chat"] = substr_count($LESVOTES, 'Chat');
    $NombreVoteAnimaux["Oiseau"] = substr_count($LESVOTES, 'Oiseau');
    $NombreVoteAnimaux["Serpent"] = substr_count($LESVOTES, 'Serpent');
    $NombreVoteAnimaux["Singe"] = substr_count($LESVOTES, 'Singe');
}





