<?php

namespace Pendulage\Bundle\AccueilBundle\Form;

class IsolateurForm extends \Symfony\Component\Form\AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("poidisoporteur")
                ->add("poidfilcontacte")
                ->add("distanceaxe")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "IsolateurForm";
    }

}