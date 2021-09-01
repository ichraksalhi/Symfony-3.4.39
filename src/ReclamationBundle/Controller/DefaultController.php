<?php

namespace ReclamationBundle\Controller;
require_once '../vendor/autoload.php';




//use Symfony\Component\HttpFoundation\File\UploadedFile;
use Twilio\Rest\Client;

use ReclamationBundle\Entity\TabReclamation;
use ReclamationBundle\Form\TabReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;


use ReclamationBundle\ReclamationBundle;
use ReclamationBundle\Repository\TabReclamationRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Knp\Bundle\SnappyBundle\Snappy\Response\JpegResponse;





use AppBundle\Entity\User;
use GestionAgeeBundle\Form\Planning_visite_medicaleType;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use GestionAgeeBundle\Entity\Planning_visite_medicale;
//use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\Routing\Annotation\Route;






class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReclamationBundle:Default:index.html.twig');
    }
    public function readAction()
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        $TabReclamations=$this->getDoctrine()->getManager()->getRepository(TabReclamation::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        return $this->render('@Reclamation/Default/read.html.twig', array('TabReclamations'=>$TabReclamations ));

    }
    public function read1Action(Request $request)
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        //$TabReclamations=$this->getDoctrine()->getManager()->getRepository(TabReclamation::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT a FROM ReclamationBundle:TabReclamation a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');

        $TabReclamations = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        //$request->query->getInt('page',1),
        // $request->query->getInt('limit',5)
        );
        //add the list of clubs to the render function as input to be sent to the view
        return $this->render('@Reclamation/Default/read1.html.twig', array('TabReclamations'=>$TabReclamations ));

    }
    public function createAction(Request $request)
    {
        $TabReclamation = new TabReclamation();
        $test = "ajout";

        $form = $this->createForm(TabReclamationType::class,$TabReclamation);
        $form = $form->handleRequest($request);
        $prenomDemande = $form['prenomDemande']->getData();
        if ($form->isValid()) {
            $sid    = "ACf9f1d802daf05290766269a8c0a2d41f";
            $token  = "5e8da9b0e4d732641395930277376e4f";
            $twilio = new Client($sid, $token);

            $message = $twilio->messages
                ->create("whatsapp:+21652272411", // to
                    [
                        "from" => "whatsapp:+14155238886",
                        "body" => "RECLAMATION ajouté avec succé :! le nom du reclameur est : ".$prenomDemande
                    ]
                );
            $em = $this->getDoctrine()->getManager();
            $em->persist($TabReclamation);
            $em->flush();
            $this->addFlash('info', 'info <a href="/" class="alert-link"> votre reclamation est ajouté!</a>');


            // return $this->redirectToRoute('read1');
            return $this->redirectToRoute('message');
        }
        return $this->render('@Reclamation/Default/create.html.twig', array('form' => $form->createView(), 'test' => $test));
    }
    public function updateAction( Request $request,$id)
    {
        $TabReclamation= new TabReclamation();
        $em=$this->getDoctrine()->getManager();
        $TabReclamation=$em->getRepository(TabReclamation::class)->find($id);
        $form=$this->createForm(TabReclamationType::class,$TabReclamation);
        $form->handleRequest($request);
        if($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('info', 'some <a href="/" class="alert-link">Votre reclamation a etait modifier avec succes</a>.');

            return $this->redirectToRoute('read1');
        }

        return $this->render('@Reclamation/Default/update.html.twig', array('form' => $form->createView()));
    }
    public function deleteAction($id)
    {
        //get the object to be removed given the submitted id
        $em = $this->getDoctrine()->getManager();
        $TabReclamation= $em->getRepository(TabReclamation::class)->find($id);
        //remove from the ORM
        $em->remove($TabReclamation);
        //update the data base
        $em->flush();
        return $this->redirectToRoute("read");
    }
    public function trierAction()
    {
        $em = $this->getDoctrine()->getManager();
        $nomDemande=$em->getRepository(TabReclamation::class)->trierEff();
        return $this->render('@Reclamation/Default/read.html.twig', array('TabReclamations' => $nomDemande));
    }
    public function trier1Action()
    {
        $em = $this->getDoctrine()->getManager();
        $nomDemande=$em->getRepository(TabReclamation::class)->trierEff();
        return $this->render('@Reclamation/Default/read1.html.twig', array('TabReclamations' => $nomDemande));
    }
    /* public function rechercherAction(\Symfony\Component\HttpFoundation\Request $request)
     {
         $em = $this->getDoctrine()->getManager();
         $Tabreclamations=$em->getRepository('ReclamationBundle:TabReclamation')->findAll();
         if ($request->isMethod('POST')){
             $numTelDemande=$request->get('numTelDemande');
             $Tabreclamations=$em->getRepository('ReclamationBundle:TabReclamation')
                 ->findBy(array("numTelDemande"=>$numTelDemande));
         };
         return $this->render('@Reclamation/Default/read.html.twig',array(
             'Tabreclamations'=>$Tabreclamations));

     }
 */
    function approvedAction($id){
        $em=$this->getDoctrine()->getManager();
        $am=$this->getDoctrine()->getRepository(TabReclamation::class);
        $rec=$this->getDoctrine()->getRepository(TabReclamation::class)->find($id);
        if($rec->getPrenomDemande()=="Non Approuvée")
        {
            $am->approuver($id,"Approuvée");
            $account_sid = 'ACf9f1d802daf05290766269a8c0a2d41f';
            $auth_token = '5e8da9b0e4d732641395930277376e4f';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
            $twilio_number = "+12056277837";

            $client = new Client($account_sid, $auth_token);
            $client->messages->create(
            // Where to send a text message (your cell phone?)
                '+21652272411',
                array(
                    'from' => $twilio_number,
                    'body' => 'reclamation approuvée !  '
                )
            );

        }
        else
        {
            $am->approuver($id,"Non Approuvée");

        }
        return $this->redirectToRoute('read');
    }


    public function searchAction(Request $request) //mobile
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository(Publicites::class)->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "aucun resultat trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }

    public function pdfAction(Request $request )
    {

        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $TabReclamation = $em->getRepository("ReclamationBundle:TabReclamation")
            ->find($id);
        $em = $this->getDoctrine()->getManager();
        $Evaluation = $em->getRepository("ReclamationBundle:Evaluation")
            ->find($id);

        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('@Reclamation/Default/pdf.html.twig',
            array("TabReclamation"=>$TabReclamation,
                "Evaluation"=>$Evaluation))
        ;

        $filename = 'paiementEspece';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"',
            )
        );
    }

    public function showdetaileAction($id)
    {
        $em= $this->getDoctrine()->getManager();
        $p=$em->getRepository('ReclamationBundle:TabReclamation')->find($id);
        return $this->render('@Reclamation/Default/detaile.html.twig', array(
            'nomDemande'=>$p->getNomDemande(),
            'prenomDemande'=>$p->getPrenomDemande(),
            'numTelDemande'=>$p->getNumTelDemande(),
            'postDemande'=>$p->getPostDemande(),
            'cinDemande'=>$p->getCinDemande(),
            'TabReclamation'=>$p,
            'idDemande'=>$p->getIdDemande(),
            $this->addFlash('info', 'cc <a href="/" class="alert-link">Ici vous trouver la reclamation bien detaillé</a>.')

        ) );
    }

    public function messageAction(){

        return $this->render('@Reclamation/Default/message.html.twig'

        );
    }
    public function message1Action(){

        return $this->render('@Reclamation/Default/messagesorti.html.twig'

        );
    }
    public function listNonapprouveAction(){
        $em = $this -> getDoctrine()-> getManager();
        $tabReclamations = $em -> getRepository("ReclamationBundle:TabReclamation")
            ->FindNonAcceptedEv();
        return $this->render('@Reclamation/Default/listNonapprouve.html.twig'
            ,array(
                "TabReclamations"=>$tabReclamations
            ));
    }
    public function listapprouveAction(){
        $em = $this -> getDoctrine()-> getManager();
        $tabReclamations = $em -> getRepository("ReclamationBundle:TabReclamation")
            ->FindAcceptedEv();
        return $this->render('@Reclamation/Default/listNonapprouve.html.twig'
            ,array(
                "TabReclamations"=>$tabReclamations
            ));
    }

    // partie mobile



    public function readMobileAction()
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        $TabReclamations=$this->getDoctrine()->getManager()->getRepository(TabReclamation::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($TabReclamations);
        return new JsonResponse($formatted);

    }


    public function findMobileAction($str)
    {
        $em = $this->getDoctrine()->getManager();

        $TabReclamation = $em->getRepository('ReclamationBundle:TabReclamation')->findEntitiesByString($str);
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($TabReclamation);
        return new JsonResponse($formatted);
    }

    //////////
    ///





    public function createMobileAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $TabReclamation = new TabReclamation();
        $TabReclamation->setCinDemande($request->get('cinDemande'));
        $TabReclamation->setNomDemande($request->get('nomDemande'));
        $TabReclamation->setNumTelDemande($request->get('numTelDemande'));
        $TabReclamation->setPrenomDemande($request->get('prenomDemande'));
        $TabReclamation->setPostDemande($request->get('postDemande'));
        $TabReclamation->setRating($request->get('rating'));


        $nomDemande = $TabReclamation->getnomDemande();
        //  $medicament = $Planning_traitement_medical->getNomMedicament();
        //$nbJour = $Planning_traitement_medical->getDureeEnJourDeTraitement();

        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('--Mise à jour Traitement-- :');
        $notif->setMessage('Vous avez une mise à jour du Traitement médicamenteux à suivre dans une durée de' );
        // $manager->addNotification($notif, true);



        //  $manager = $this->get('mgilet.notification');
        //   $notif = $manager->createNotification('--rendez-vous-- :');
        //  $notif->setMessage('Vous avez un rendez-vous médical le  ');

        //  $manager->addNotification(array($user), $notif, true);


        $em->persist($TabReclamation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($TabReclamation);
        return new JsonResponse($formatted);

    }


    public function gettotalperMobile1Action()
    { $user=3;
        //$user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("select SUM(o.note) from ReclamationBundle:Evaluation as o
                        ");
        $total = $query->getScalarResult();
        // return $this->render('@Ecommerce/Catalogue/total.html.twig', array('total' => $total));
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($total);
        return new JsonResponse($formatted);
    }



}
