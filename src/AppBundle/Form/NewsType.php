<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of NewsType
 *
 * @author Mohammad
 */
class NewsType extends AbstractType {

    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('title', null, array(
        'label' => 'عنوان خبر',
        'attr' => array('style' => 'width: 200px')))
        ->add('content', 'textarea', array(
        'attr' => array('cols' => '3', 'rows' => '3')))
        ->add("file", "file");
    }

    public function getName() {
        return"app_news";
    }

}
