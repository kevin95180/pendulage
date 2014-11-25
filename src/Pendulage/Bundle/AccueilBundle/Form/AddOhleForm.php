<?php

namespace Pendulage\Bundle\AccueilBundle\Form;

class AddOhleForm extends \Symfony\Component\Form\AbstractType {
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("ohleOhle")
                ->add("support1Support")
                ->add("support2Support")
                ->add("spanlenth")
                ->add("sysheightleft")
                ->add("sysheightright")
                ->add("intendedsag")
                ->add("dropperrepartition")
                ->add("distanceminimun")
                ->add("distancemaximun")
                ->add("distanceaxis")
                ->add("isolateur")
                ->add("relevementgauche")
                ->add("relevementdroite")
                ->add("save", "submit");
    }
    
    public function getName() {
        return "AddOhleForm";
    }

}