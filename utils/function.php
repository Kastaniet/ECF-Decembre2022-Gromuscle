<?php

/**
 * Permet de d'effectuer un var_dump
 * */
function display($think)
{
    echo '<b><pre style="border:3px solid black;color:black;padding:10px;background-color:lightgrey;font-size:20px;">';
    var_dump($think);
    echo '</pre></b></p>';
}
/**
 * Permet de d'effectuer un var_dump
 * */
function sdisplay($think)
{
    echo '<b><pre style="border:3px solid black;color:black;padding:10px;background-color:lightgrey;font-size:20px;">';
    var_dump($think);
    echo '</pre></b></p>';
    die();
}

/** 
 * vérification que le mot de passe est bien aux normes
 */
function mdpCorrecte($mdp)
{
    $cpt = $cpt2 = 0;
    $chiffres = '0123456789';
    $lettres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //long_verif vaut un si le mdp est compris entre 6 et 20 caractères
    $long_verif = (strlen($mdp) >= 6 && strlen($mdp) <= 20) ? 1 : 0;

    for ($i = 0; $i < strlen($mdp); $i++)
    for ($j = 0; $j < strlen($chiffres); $j++)
        if ($mdp[$i] == $chiffres[$j])
            $cpt++;

    for ($i = 0; $i < strlen($mdp); $i++)
    for ($j = 0; $j < strlen($lettres); $j++)
        if ($mdp[$i] == $lettres[$j])
            $cpt2++;

    return ($long_verif != 0 && $cpt != 0 && $cpt2 != 0) ? true : false;
}

/**
 * Permet de vérifier si une adresse e-mail provient d'un service d'email jetables
 * @param string $email Chaine
 * */
function good_email_service($email)
{
    $mail = explode('@', $email);
    $email_service = $mail[1];
    switch ($email_service) {
        case 'yopmail.com':
            return false;
            break;
        case 'get2mail.fr':
            return false;
            break;
        case 'tempomail.fr':
            return false;
            break;
        case 'trbvm.com':
            return false;
            break;
        case 'mailinator.com':
            return false;
            break;
        case 'guerrillamail.com':
            return false;
            break;
        case 'throam.com':
            return false;
            break;
        case 'ubismail.net':
            return false;
            break;
        case 'imgof.com':
            return false;
            break;
        case 'grandmamail.com':
            return false;
            break;
        default:
            return true;
            break;
    }
}