<?php

/*
- Démarre une session
- Start a session
*/
session_start();

/*
- Inclusion de fichier nécessaire
- Necessary file inclusion
*/
require_once 'src/control/BDDControl/connectBDD.php';

/*
- Vérifie les paramètres après ? dans l'URL, si vide redirection vers la page d'accueil des visiteurs
- Check the settings afterwards ? in URL, if empty redirect to visitors home page
*/
if (empty($_SERVER['QUERY_STRING'])) {
    header("Location: src/views/Page/home.php");
    throw new Exception("Redirection vers la page d'accueil.");
}
