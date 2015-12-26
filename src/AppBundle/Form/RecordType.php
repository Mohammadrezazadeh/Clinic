<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of RecordType
 *
 * @author Mohammad
 */
class RecordType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        /* $builder->add('pay', 'choice', array('choices' => 
          array('bank' => 'bank', 'In clinic' => 'clinic'))); */
        /* $builder->add('pay',"entity",["class"=>"AppBundle:Record"
          ,"data_class"=>'AppBundle\Entity\Record']); */
        $currentLocale = "in bank";
        $langs=array(
            'in Clinck'=>'پرداخت در محل درمانگاه',
            'in bank'=>'پرداخت اینترنتی'
        );
        $builder->add('pay', 'choice', array(
            'choices' => $langs,
            'expanded' => true,
            'multiple' => false,
            //'required' => false,
            //'label' => false,
            'data' => $currentLocale,
        ));
    }

    public function getName() {
        return"app_record";
    }

}
