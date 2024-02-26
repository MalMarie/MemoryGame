<?php

namespace MemoryGame\Models;


// Cette classe est le model mère pour tous les models de notre application. 
// Elle n'est pas destinée à etre instanciée, mais à etre héritée/étendue
class CoreModel
{


    // Ici, on évite de répéter les propriétés qui sont présentes dans tous les models
    // Ces propriétés sont censées etre privées. Or si on utilise le mot-clé private, les classes enfant n'y auront pas accès. On utilise le mot-clé protected
    protected $id;
    protected $created_at;
    protected $updated_at;



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }


    // In on factorise les méthodes communes à tous les models

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
