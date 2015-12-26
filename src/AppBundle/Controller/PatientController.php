<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PatientController extends Controller {

    /**
     * @Route("/c",name="app_cure1")
     * @Template
     */
    public function DAction(Request $request) {
        $patient2 = new \AppBundle\Entity\Cure();
        $form = $this->createForm(new \AppBundle\Form\CureType(), $patient2);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $patient2 = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient2);
            $em->flush();
            return $this->redirectToRoute("app_cure");
        }
        return["form" => $form->createView()];
    }

    /**
     * @Route("/search",name="app_search")
     * @Template
     * @ParamConverter("id_code", class="AppBundle\Entity\Cure")
     */
    public function searchAction(Request $request, $id_code) {

        //search doctor name;
    }

    /**
     * @Route("/doc_info",name="app_doctor_info")
     * @Template
     */
    public function docAction(Request $request) {
        $doc_info = new \AppBundle\Entity\Doctor_info();
        $form = $this->createForm(new \AppBundle\Form\DocType(), $doc_info);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $doc_info = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc_info);
            $em->flush();
            return $this->redirectToRoute("app_doctor_info");
        }
        return["myform" => $form->createView()];
    }

    /**
     * @Route("/doc_pro",name="app_doctor_pro")
     * @Template
     */
    public function DocProAction(Request $request) {
        $doc_pro = new \AppBundle\Entity\Doctor_pro();
        $form = $this->createForm(new \AppBundle\Form\DocProType(), $doc_pro);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $doc_pro = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc_pro);
            $em->flush();
            return $this->redirectToRoute("app_doctor_pro");
        }
        return["myform" => $form->createView()];
    }

    /**
     * @Route("/pro",name="app_doctor_program")
     * @Template
     */
    public function showDocAction(Request $request) {
        $program = $this->getDoctrine()->getRepository("AppBundle:Doctor_pro")->findAll();
        return["pro" => $program];
    }

    /**
     * @Route("/admin",name="app_admin")
     * @Template
     */
    public function AdminAction(Request $request) {
        $doctor_info = $this->getDoctrine()->getRepository("AppBundle:Doctor_info")->findAll();
        return["doctors" => $doctor_info];
    }

    /**
     * @Route("/sub_admin",name="app_sub_admin")
     * @Template
     */
    public function SubAdminAction(Request $request) {
        //***
    }

    /**
     * @Route("/complate/{id}",name="app_complate_queue")
     * @Template
     * @ParamConverter("patient", class="AppBundle\Entity\Cure")
     */
    public function complateAction(Request $request,$id) {
        $patient = new \AppBundle\Entity\Cure();
        $id=$request->get('id');
        $form = $this->createFormBuilder($patient)
                ->add("name")
                ->add("lastname")
                ->add("fathername")
                ->add("email")
                ->add("nastionalCode")
                ->add('gender', 'choice', array('choices' => array('male' => 'Male', 'female' => 'Female'), 'attr' => array('style' => 'width: 200px')))
                ->add("telphone")
                ->add("mobile")
                ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $patient = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($patient);
            $em->flush();
            return $this->redirectToRoute("app_record",["id"=>$patient->getId()]);
        }
        $doctor_pro = $this->getDoctrine()->getRepository("AppBundle:Doctor_pro")->find($id);
        return["myform" => $form->createView(), "docInfo" => $doctor_pro];
    }

   /**
     * @Route("/Record/{id}",name="app_record")
     * @Template
     * 
     */
   public function recordAction(Request $request,$id) {    
        $record = new \AppBundle\Entity\Record();
        $form = $this->createForm(new \AppBundle\Form\RecordType(), $record);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $record = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($record);
            $em->flush();
            return $this->redirectToRoute("app_end",["id"=>$record->getId()]);
        }
        $cure = $this->getDoctrine()->getRepository("AppBundle:Cure")->find($id);
        //$doctor_pro1 = $this->getDoctrine()->getRepository("AppBundle:Doctor_pro")->find($id);
        return["form" => $form->createView(), "cure" => $cure];
    }
    /**
     * @Route("/end/{id}",name="app_end")
     * @Template
     * @ParamConverter("id", class="AppBundle\Entity\Cure")
     */
    public function endAction(Request $request,$id){
        
        //$doctor_pro=  $this->getDoctrine()->getRepository("AppBundle:Doctor_pro")->find($id);
        $patient=  $this->getDoctrine()->getRepository("AppBundle:Cure")->find($id);
        return["cure"=>$patient];
    }

}
