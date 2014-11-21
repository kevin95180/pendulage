<?php

namespace Pendulage\Bundle\AccueilBundle\Form;

class AddOhleForm extends \Symfony\Component\Form\AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("ohleOhle")
                ->add("support1Support")
                ->add("support2Support")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "AddOhleForm";
    }

}