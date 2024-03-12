<?php

declare(strict_types=1);

class User
{
    protected const STATUS_ACTIVE = 'active</br>';
    protected const STATUS_INACTIVE = 'inactive</br>';

    public static $nombreUtilisateursInitialises = 0;

    public function __construct(public string $username, public string $status = self::STATUS_ACTIVE)
    {
    }

    public function setStatus(string $status): void
    {
        if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE])) {
            trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE])), E_USER_ERROR);
        };

        $this->status = $status;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}


class Admin extends User 
{
    //public const STATUS_ACTIVE = 'active';
    //public const STATUS_INACTIVE = 'inactive';
      public const STATUS_LOCKED = 'locked'; 

    public static $nombreAdminInitialises = 0;

    public static function nouvelleInitialisation() {
        self::$nombreAdminInitialises++; // class Admin
        parent::$nombreUtilisateursInitialises++;
    }

    // Ajout d'un tableau de roles pour affiner les droits des administrateurs :)
    public function __construct(public string $username, private array $roles = [], public string $status = self::STATUS_ACTIVE)
    {
    }

    public function setStatus(string $status): void
     {
        if (!in_array($status, [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])) {
           trigger_error(sprintf('Le status %s n\'est pas valide. Les status possibles sont : %s', $status, implode(', ', [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_LOCKED])), E_USER_ERROR);
        };

        $this->status = $status;
    }

    public function getStatus(): string
    {
        //return $this->status;
        return strtoupper (parent::getStatus());
    }


    // Méthode d'ajout d'un rôle, puis on supprime les doublons avec array_filter.
    public function addRole(string $role): void
    {
        $this->roles[] = $role;
        $this->roles = array_filter($this->roles);
    }

    // Méthode de renvoie des rôles, dans lequel on définit le rôle ADMIN par défaut.
    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ADMIN';

        return $roles;
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }
}


class Visiteur extends User{

}

$user = new Admin('Lelex');
echo $user->getStatus(); 
Admin::nouvelleInitialisation();

var_dump(Admin::$nombreAdminInitialises, Admin::$nombreUtilisateursInitialises);

var_dump(User::$nombreUtilisateursInitialises);
echo $user->setStatus(Admin::STATUS_LOCKED);
echo $user->getStatus();
