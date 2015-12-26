<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of DocType
 *
 * @author Mohammad
 */
class DocType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
       $builder->add("name")
               ->add("lastname")
               ->add("specialty");
    }
    public function getName() {
        return"app_doct";
    }
}
