<?php
namespace Pendulage\Bundle\AccueilBundle\Form;

class FindConsultationForm extends \Symfony\Component\Form\AbstractType{
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add("portee");
    }
    
    public function getName() {
        return "FindConsultation";
    }
    
}
