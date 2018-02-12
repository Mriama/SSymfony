<?php

namespace snt\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use snt\immoBundle\Entity\Utilisateur;
use snt\immoBundle\Form\UtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




class AdminControllerController extends Controller
{
    public function addAction(Request $request)
    {
        $user= new Utilisateur();
        // $user->setNomcomplet("toto");
        $formUser= $this->createForm(UtilisateurType::class,$user);
        if ($request->isMethod('POST')) {
            $formUser->HandleRequest($request);
            if ($formUser->isValid()) {
            $em= $this->getDoctrine()->getManager();
            $user->setPassword("passe");
            $user->setEtat(0);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('list');
            }
        }

        return $this->render('sntimmoBundle:AdminController:add.html.twig',
        array("form"=>$formUser->createView()
         ));
    //   return  new Response("bonjour à tous");
    //   $nom= "aux etudiants de S A ".$id;
    // return $this->render("sntimmoBundle:AdminController:text.html.twig",["sa"=>$nom]);
    }

    public function listAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('sntimmoBundle:Utilisateur');

        $listuser = $repository->findAll();

       return $this->render('sntimmoBundle:AdminController:list.html.twig',
       array("users"=>$listuser));

    }

    public function editAction(Request $request, $id){
        $user=$this->getDoctrine()
        ->getManager()
        ->getRepository('sntimmoBundle:Utilisateur')
        ->find($id);
        echo count($user->getRoles());
        $formUser= $this->createForm(UtilisateurType::class,$user);
        if ($request->isMethod('POST')) {
            $formUser->HandleRequest($request);
            if ($formUser->isValid()) {
                // $user->setNomcomplet("toto");
                $this->getDoctrine()
                     ->getManager()
                     ->flush();
        return $this->redirectToRoute('list');


            }
        }
        return $this->render('sntimmoBundle:AdminController:edit.html.twig',
         array("form"=>$formUser->createView())
        );

    }

    public function supprAction(Utilisateur $user)
    {
        $em = $this
        ->getDoctrine()
        ->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('list');
    }



public function searchAction(Request $request)
    {

        $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('sntimmoBundle:Utilisateur')->findAll();
        if($request->isMethod("POST"))
        {
            $login=$request->get('login');
            $searchs=$em->getRepository('sntimmoBundle:Utilisateur')->findBy(array('login'=>$login));

        }
        return $this->render('sntimmoBundle:AdminController:search.html.twig', array('users'=>$searchs

        ));
    }

    public function etatAction(Utilisateur $user)
    {
        $em = $this->getDoctrine()
        ->getManager();
        if($user->getEtat()==false){
       $user->setEtat(true);
        }
        else{
       $user->setEtat(false);
        }
        $em->flush();
        return $this->redirectToRoute("list");

    }


    public function (Request $request)
    {
        ("select id,nomcomplet,login,datenais from utilisateur")
        $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('sntimmoBundle:Utilisateur')->findAll();
        if($request->isMethod("POST"))
        {
            $role=$request->get('roles');
            $searchs=$em->getRepository('sntimmoBundle:Utilisateur')->findBy(array('roles'=>$login));

        }
        return $this->render('sntimmoBundle:AdminController:search.html.twig', array('users'=>$searchs

        ));
    }


}
