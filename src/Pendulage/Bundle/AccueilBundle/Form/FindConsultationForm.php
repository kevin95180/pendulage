<?php
namespace Pendulage\Bundle\AccueilBundle\Form;

class FindConsultationForm extends \Symfony\Component\Form\AbstractType{
    
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        
        $builder->add('motcle', 'text', array('label' => 'Portée: '));
    }
    
    public function getName() {
        return "FindConsultationForm";
    }
    
}
