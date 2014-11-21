<?php

namespace Pendulage\Bundle\AccueilBundle\Form;

class OhleForm extends \Symfony\Component\Form\AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("TypeOfOhle")
                ->add("MessengerWireWeight")
                ->add("MessengerWireTension")
                ->add("ContactWireWeight")
                ->add("ContactWireTension")
                ->add("WeightOfDropper")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "OhleForm";
    }

}