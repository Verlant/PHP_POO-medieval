<?php
abstract class Role
{
    //Attributs
    private string $pseudo;
    private string $img;
    private int $vie;
    private int $vigueur;
    private int $action;
    private int $position;
    private int $portee;

    //Methods


    /**
     * Fonction qui deplace les joueurs et ajuste leur point de vigueur s'il ont bougé
     */
    public function deplacement(int $distance)
    {
        $str = "";
        if ($distance > $this->vigueur) {
            $str = $this->img . $this->pseudo . " n'a pas assez de points de déplacements";
        } else {
            $this->vigueur -= $distance;
            $str = $this->img  . $this->pseudo . " s'est déplacé de " . $distance . " case";
        }
        $str .= ". Il lui reste " . $this->vigueur . " points de vigueur.";
        return $str;
    }
    //Abstract Methods
    abstract public function attaque(Role $cible);
    abstract public function informations();

    /**
     * Get the value of pseudo
     */
    public function get_pseudo(): string
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     */
    public function set_pseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }

    /**
     * Get the value of img
     */
    public function get_img(): string
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function set_img(string $img): void
    {
        $this->img = $img;
    }

    /**
     * Get the value of vie
     */
    public function get_vie(): int
    {
        return $this->vie;
    }

    /**
     * Set the value of vie
     */
    public function set_vie(int $vie): void
    {
        $this->vie = $vie;
    }

    /**
     * Get the value of vigueur
     */
    public function get_vigueur(): int
    {
        return $this->vigueur;
    }

    /**
     * Set the value of vigueur
     */
    public function set_vigueur(int $vigueur): void
    {
        $this->vigueur = $vigueur;
    }

    /**
     * Get the value of action
     */
    public function get_action(): int
    {
        return $this->action;
    }

    /**
     * Set the value of action
     */
    public function set_action(int $action): void
    {
        $this->action = $action;
    }

    /**
     * Get the value of position
     */
    public function get_position(): int
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function set_position(int $position): void
    {
        $this->position = $position;
    }

    /**
     * Get the value of portee
     */
    public function get_portee(): int
    {
        return $this->portee;
    }

    /**
     * Set the value of portee
     */
    public function set_portee(int $portee): void
    {
        $this->portee = $portee;
    }
}
