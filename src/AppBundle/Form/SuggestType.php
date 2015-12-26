<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of SuggestType
 *
 * @author Mohammad
 */
class SuggestType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title', null, array('label' => 'عنوان', 'attr' => array('style' => 'width: 200px')))
                ->add("email", null, array('label' => 'ایمیل', 'attr' => array('style' => 'width: 250px')))
                ->add("comment", 'textarea', array(
                    'attr' => array('cols' => '3', 'rows' => '3')));
    }

    public function getName() {
        return"app_suggest";
    }

}
