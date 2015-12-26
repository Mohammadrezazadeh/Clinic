<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction(Request $request) {
        
    }
    /**
     * @Route("/queue",name="app_queue")
     * @Template
     */
    public function queueAction(Request $request){
       
        
    }

        /**
     * @Route("/news",name="app_news")
     * @Template
     * 
     */
    public function addnewsAction(Request $request) {
        $news = new \AppBundle\Entity\News();
        $form=  $this->createForm(new \AppBundle\Form\NewsType(), $news);
        $form->handleRequest($request);
        if ($form->isValid()){
            $news=$form->getData();
            $file=$news->getPicture();
            $filename=  rand(10, 54872)."jpg";
            $file->move("./files",$filename);
            $news->setPicture($filename);
            $em=  $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            return $this->redirectToRoute("app_news");
        }
        return["myform"=>$form->createView()];
    }
    /**
     * @Route("/suggest",name="app_sugg")
     * @Template
     */
    public function suggestAction(Request $request){
        $suggest=new \AppBundle\Entity\Suggest();
        $form=  $this->createForm(new \AppBundle\Form\SuggestType(), $suggest);
        $form->handleRequest($request);
        if ($form->isValid()){
            $suggest=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($suggest);
            $em->flush();
            return $this->redirectToRoute("app_sugg");
        }
        return["myform"=>$form->createView()];
    }
    /**
     * @Route("/doctor",name="app_doctor")
     * @Template
     */
    public function doctorAction(Request $request){
        $doctor=new \AppBundle\Entity\Doctor();
        $form=  $this->createForm(new \AppBundle\Form\DoctorType(), $doctor);
        $form->handleRequest($request);
        if ($form->isValid()){
            $doctor=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($doctor);
            $em->flush();
             return $this->redirectToRoute("app_doctor");
        }
        return["myform"=>$form->createView()];
    }
    /**
     * @Route("/doc_group",name="app_doctor_group")
     * @Template
     */
    public function DgroupAction(Request $request){
        $dgroup=new \AppBundle\Entity\Doctor_Group();
        $form=  $this->createForm(new \AppBundle\Form\Doctor_GroupType(), $dgroup);
        $form->handleRequest($request);
        if ($form->isValid()){
            $dgroup=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($dgroup);
            $em->flush();
            return $this->redirectToRoute("app_doctor_group");
        }
        return["myform"=>$form->createView()];
    }
   
    /**
     * @Route("/group_in",name="app_group_insurnce")
     * @Template
     */
    public function groupAction(Request $request){
        $group=new \AppBundle\Entity\Group_insurance();
        $form=  $this->createForm(new \AppBundle\Form\GInsuranceType(), $group);
        $form->handleRequest($request);
        if ($form->isValid()){
            $group=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($group);
            $em->flush();
            return $this->redirectToRoute("app_group_insurnce");
        }
        return["myform"=>$form->createView()];
        
    }
    /**
     * @Route("/cure",name="app_cure")
     * @Template
     */
    public function patient2Action(Request $request){
        $patient2=new \AppBundle\Entity\Cure();
        $form=  $this->createForm(new \AppBundle\Form\CureType(), $patient2);
        $form->handleRequest($request);
        if ($form->isValid()){
            $patient2=$form->getData();
            $em=  $this->getDoctrine()->getManager();
            $em->persist($patient2);
            $em->flush();
        }
        return["form"=>$form->createView()];
    }
    /**
     * @Route("/visit",name="app_visit")
     * @Template
     */
    public function visitAction(Request $request){
        //******
        
    }
}
