<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of PatientType
 *
 * @author Mohammad
 */
class PatientType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("name")
                ->add("lastname")
                ->add("fathername")
                ->add("nationalCode")
                ->add("gender")
                ->add("birthday")
                ->add("telphone")
                ->add("email")
                ->add("mobile");
                
       /* $builder->add('name', 'text', array(
        'label' => 'نام',
        'attr' => array('style' => 'width: 200px',
        'placeholder' => 'نام'
        )
        ))
        ->add('lastname', null, array('label' => 'نام خانوادگی', 'attr' => array('style' => 'width: 200px')))
                ->add('fatherName', null, array('label' => 'نام پدر', 'attr' => array('style' => 'width: 200px')));
                ->add('nationalCode', null, array('label' => 'کد ملی', 'attr' => array('style' => 'width: 200px')))
                ->add('gender', 'choice', array('choices' => array('male' => 'Male', 'female' => 'Female'),'attr'=>array('style' => 'width: 200px')))
                ->add('birthday', null, array('label' => 'تاریخ تولد', 'attr' => array('style' => 'width: 100px')))
                ->add('insurance', null, array('label' => 'بیمه', 'attr' => array('style' => 'width: 250px')))
                ->add('telphone', null, array('label' => 'تلفن', 'attr' => array('style' => 'width: 250px')))
                ->add('mobile', null, array('label' => 'موبایل', 'attr' => array('style' => 'width: 250px')))
                ->add('email', null, array('label' => 'ایمیل', 'attr' => array('style' => 'width: 250px')));
         ->add('insurance','choice',array('ازاد'=>'ازاد','تامین اجتماعی خاص'=>'تامین اجتماعی خاص','تامین اجتماعی عادی'=>'تامین اجتماعی عادی',
          'بیمه جانبازان نیروی مسلح'=>'بیمه جانبازان نیروی مسلح',
          'بیمه همگانی سلامت'=>'بیمه همگانی سلامت',
          'صدا و سیما'=>'صدا و سیما',
          'خدمات دهی سایر اقشار'=>'خدمات دهی سایر اقشار')) */
    }

    public function getName() {
        return "App_patient";
    }

}
