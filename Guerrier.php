<?php

include_once 'Role.php';

class Guerrier extends Role
{
    //Attributs
    public int $force;

    //Methods
    /**
     * méthode qui renvoie un tableau associatif avec comme clé le nom des attribut et contenant leur valeur
     */
    public function informations()
    {
        $array["pseudo"] = $this->get_pseudo();
        $array["img"] = $this->get_img();
        $array["vie"] = $this->get_vie();
        $array["vigueur"] = $this->get_vigueur();
        $array["action"] = $this->get_action();
        $array["force"] = $this->force;
        $array["position"] = $this->get_position();
        $array["portée"] = $this->get_portee();
        return $array;
    }
    /**
     * méthode qui permets a un objet Role d'attaquer et d'enlever de la vie a un autre objet Role, cela coute 1 pts d'action
     */
    public function attaque(Role $cible)
    {
        $this->set_action($this->get_action() - 1);
        $str = $this->get_img() . $this->get_pseudo() . " attaque " . $cible->get_img() . $cible->get_pseudo() . ". ";
        if ($this->get_action() < 0) {
            $this->set_action(0);
            $str .= "Echec critique ! " . $this->get_img() . $this->get_pseudo() . "n'a plus de points d'actions.";
        } else if (($cible->get_vie() - $this->force) <= 0) {
            $cible->set_vie($cible->get_vie() - $this->force);
            $str .= $this->get_img() . $this->get_pseudo() . " a occis " . $cible->get_img() . $cible->get_pseudo() . " ! Les ennemis tremblent devant la puissance de " . $this->get_img() . $this->get_pseudo() . "!<br/>";
        } else {
            $cible->set_vie($cible->get_vie() - $this->force);
            $str .= "Il inflige " . $this->force . " points de dégats. ";
        }
        $str .=  "Il reste " . $cible->get_vie() . " points de vie à " . $cible->get_img() . $cible->get_pseudo() . ". Il reste " . $this->get_action() . " points d'action à " . $this->get_img() . $this->get_pseudo();
        return $str;
    }

    /**
     * Get the value of force
     */
    private function get_force(): int
    {
        return $this->force;
    }

    /**
     * Set the value of force
     */
    public function set_force(int $force): void
    {
        $this->force = $force;
    }
}
