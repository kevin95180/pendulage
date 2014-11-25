<?php

namespace Pendulage\Bundle\AccueilBundle\Form;

class Support2Form extends \Symfony\Component\Form\AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("supportnom")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "Support2Form";
    }

}