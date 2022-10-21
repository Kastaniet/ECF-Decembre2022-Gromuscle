<?php
namespace models;

use models\base\SQL;
use models\classes\Email;

class EmailModele extends SQL
{
    public function __construct()
    {
        parent::__construct('email', 'id');
    }

    /**
     * Méthode permettant la modification du contenus de l'email et son sujet
     */
    public function emailContent(Email $email) 
    {
        $query = "INSERT INTO email (id, sujet, contenu) VALUE (NULL, ?, ?)";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$email->getSujet(), $email->getContenu()]);
        return $this->getPdo()->lastInsertId();
    }

    /**
     * Récupération de l'email et de son contenu
     * @return Email[]
     */
    public function email(): array
    {
        $query = "SELECT * FROM email";

        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([]);

        return $stmt->fetchAll(\PDO::FETCH_CLASS, Email::class);
    }
}