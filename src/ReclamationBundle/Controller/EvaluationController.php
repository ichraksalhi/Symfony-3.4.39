<?php

namespace ReclamationBundle\Controller;
require_once '../vendor/autoload.php';

use ReclamationBundle\Entity\TabReclamation;
use ReclamationBundle\Entity\Evaluation;
use ReclamationBundle\Form\EvaluationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Twilio\Rest\Client;


class EvaluationController extends Controller
{
    public function affichageAction()
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        $Evaluations=$this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        return $this->render('@Reclamation/Evaluation/affichage.html.twig', array('Evaluations'=>$Evaluations ));

    }
    public function affichage1Action()
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        $Evaluations=$this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        return $this->render('@Reclamation/Evaluation/affichage1.html.twig', array('Evaluations'=>$Evaluations ));

    }
    public function ajoutAction(Request $request)
    {
        $Evaluation = new Evaluation(); // creation d'une instance de l'bjet evaluation
        $test = "ajout";
        $form = $this->createForm(EvaluationType::class,$Evaluation);
        $form = $form->handleRequest($request);
        $note = $form['note']->getData();
        if ($form->isSubmitted() && $form->isValid()) {
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
                    'body' => 'evaluation ajoutée avec succés ! la note attribuer est :   '.$note
                )
            );

            $message = \Swift_Message::newInstance()
                ->setSubject("test")
                ->setFrom('ichrak.salhi@esprit.tn', 'ichrak salhi')
                ->setTo('ichrak.salhi@esprit.tn')
                ->setBody("Merci pour cette evaluation  ");
            $this->get('mailer')->send($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Evaluation);
            $em->flush();

            return $this->redirectToRoute('affichage1');
        }

        return $this->render('@Reclamation/Evaluation/ajout.html.twig', array('form' => $form->createView(), 'test' => $test));
    }

    public function modifierAction( Request $request,$id)
    {
        $Evaluation= new Evaluation();
        $em=$this->getDoctrine()->getManager();
        $Evaluation=$em->getRepository(TabReclamation::class)->find($id);
        $form=$this->createForm(EvaluationType::class,$Evaluation);
        $form->handleRequest($request);
        if($form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('affichage1');
        }

        return $this->render('@Reclamation/Evaluation/modifier.html.twig', array('form' => $form->createView()));
    }
    public function supprimerAction($id)
    {
        //get the object to be removed given the submitted id
        $em = $this->getDoctrine()->getManager();
        $Evaluation= $em->getRepository(Evaluation::class)->find($id);
        //remove from the ORM
        $em->remove($Evaluation);
        //update the data base
        $em->flush();
        return $this->redirectToRoute("affichage");
    }
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $posts =  $em->getRepository('ReclamationBundle:Evaluation')->findEntitiesByString($requestString);
        if(!$posts) {
            $result['evaluations']['error'] = "Post Not found :( ";
        } else {
            $result['evaluations'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($evaluations){
        foreach ($evaluations as $evaluations){
            $realEntities[$evaluations->getId()] = [$evaluations->getNote()];

        }
        return $realEntities;
    }
    public function recentsAction(Request $request){
        $date = date('Y-m-d');
        $em = $this->getDoctrine()->getManager();

        $sql = "SELECT `*` FROM `evaluation` WHERE `Datee` < '$date' ";
        $result = $em->getConnection()->prepare($sql);
        $result->execute();
        $evaluationsr = $result->fetchAll();
        $paginator = $this->get('knp_paginator');
        $evaluations = $paginator->paginate(
            $evaluationsr,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5)

        );
        return $this->render('@Reclamation/Evaluation/evaluations.html.twig', array('Evaluations' => $evaluations));

    }
    public function venirAction(Request $request){
        $date = date('Y-m-d');
        $em = $this->getDoctrine()->getManager();

        $sql = "SELECT `*` FROM `evaluation` WHERE `Datee` >= '$date' ";
        $result = $em->getConnection()->prepare($sql);
        $result->execute();
        $evaluationsr = $result->fetchAll();

        $paginator = $this->get('knp_paginator');
        $evaluations = $paginator->paginate(
            $evaluationsr,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5)

        );
        return $this->render('@Reclamation/Evaluation/evaluations.html.twig', array('Evaluations' => $evaluations));

    }
    public function searchdateAction(Request $request){


        $date = $request->request->get("datee");
        $evaluationsr = $this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findby(array('datee'=> new \DateTime($date) ));
        $paginator = $this->get('knp_paginator');
        $evaluations = $paginator->paginate(
            $evaluationsr,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5)

        );
        return $this->render('@Reclamation/Evaluation/affichage1.html.twig', array('Evaluations' => $evaluations));
    }
    public function moyNoteAction(Request $reques)
    {   $em = $this->getDoctrine()->getManager();
        $a= $em->getRepository('ReclamationBundle:Evaluation')->MoynoteOpinion();

        //$a array contenant count et sum
        $n=round($a[1]/$a[2],4);

        return $this->render('@Reclamation/Evaluation/RatingsValue.html.twig', array(
            'note' => round($n,2),

        ));

    }
    public function moyNote1Action(Request $reques)
    {   $em = $this->getDoctrine()->getManager();
        $a= $em->getRepository('ReclamationBundle:Evaluation')->MoynoteOpinion();

        //$a array contenant count et sum
        $n=round($a[1]/$a[2],4);
        $sid    = "ACf9f1d802daf05290766269a8c0a2d41f";
        $token  = "5e8da9b0e4d732641395930277376e4f";
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create("whatsapp:+21652272411", // to
                [
                    "from" => "whatsapp:+14155238886",
                    "body" => "RECLAMATION ajouté avec succé :!".$n
                ]
            );

        return $this->render('@Reclamation/Evaluation/RatingNbreback.html.twig', array(
            'note' => round($n,2),

        ));

    }




    public function NbreNoteAction(Request $reques)
    {   $em = $this->getDoctrine()->getManager();
        $a= $em->getRepository('ReclamationBundle:Evaluation')->NbrNoteOpinion();

        return $this->render('@Reclamation/Evaluation/RatingsNbre.html.twig', array('notes'=>$a
        ));


    }
    public function NbreNote1Action(Request $reques)
    {   $em = $this->getDoctrine()->getManager();
        $a= $em->getRepository('ReclamationBundle:Evaluation')->NbrNoteOpinion();

        return $this->render('@Reclamation/Evaluation/RatingNbreback.html.twig', array('notes'=>$a
        ));


    }



    /////////mobile//////



    /* public function ajoutMobileAction(Request $request)
     {
         $Evaluation = new Evaluation();
         $test = "ajout";
         $form = $this->createForm(EvaluationType::class, $Evaluation);
         $form = $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $message = \Swift_Message::newInstance()
                 ->setSubject("test")
                 ->setFrom('ichrak.salhi@esprit.tn', 'ichrak salhi')
                 ->setTo('ichrak.salhi@esprit.tn')
                 ->setBody("Merci pour cette evaluation  ");
             $this->get('mailer')->send($message);

             $em = $this->getDoctrine()->getManager();
             $em->persist($Evaluation);
             $em->flush();
         }

             $serializer = new Serializer([new ObjectNormalizer()]);
             $formatted = $serializer->normalize($Evaluation);
             return new JsonResponse($formatted);
         }*/

    /*   public function ajoutMobileAction(Request $request)
       {
           $em=$this->getDoctrine()->getManager();
            $Evaluation = new Evaluation();
           $Evaluation->setNote($request->get('note'));
           $Evaluation->setReclamationId($request->get('reclamationId'));
           $Evaluation->setDatee($request->get('datee'));
          // $Evaluation->setPrenomDemande($request->get('prenomDemande'));
          // $Evaluation->setPostDemande($request->get('postDemande'));
          // $TabReclamation->setRating($request->get('rating'));
           $em->persist($Evaluation);
           $em->flush();
           $serializer = new Serializer([new ObjectNormalizer()]);
           $formatted = $serializer->normalize($Evaluation);
           return new JsonResponse($formatted);

       }*/

    public function ajoutMobileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $Evaluation = new Evaluation();
        //$user = $this->getUser();
        $Evaluation->setNote($request->get('note'));

        $Evaluation->setReclamationId($request->get('reclamationId'));
        $Evaluation->setDatee(new \DateTime('now'));


        $note = $Evaluation->getNote();

        $id = $Evaluation->getId();
        $message = \Swift_Message::newInstance()
            ->setSubject("Merci pour votre evaluation")
            ->setFrom('ichrak.salhi@esprit.tn', 'ichrak salhi')
            ->setTo('ichrak.salhi@esprit.tn')
            ->setBody("Merci pour cette evaluation ! la note attribuer est :  ($note)
                 ");
        $this->get('mailer')->send($message);
        $sid    = "ACf9f1d802daf05290766269a8c0a2d41f";
        $token  = "5e8da9b0e4d732641395930277376e4f";
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create("whatsapp:+21652272411", // to
                [
                    "from" => "whatsapp:+14155238886",
                    "body" => "RECLAMATION ajouté avec succé :!".$note
                ]
            );




        $em->persist($Evaluation);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Evaluation);
        return new JsonResponse($formatted);
    }


    public function affichageMobileAction()
    {
        // return $this->render('@Club/Default/read.html.twig');
        //Fetching Objects (Clubs) from the Database
        $Evaluations=$this->getDoctrine()->getManager()->getRepository(Evaluation::class)->findAll();
        //add the list of clubs to the render function as input to be sent to the view
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Evaluations);
        return new JsonResponse($formatted);
    }

    public function gettotalperMobile0Action()
    { $user=5;
        //$user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT  SUM(a.idDemande)
            FROM ReclamationBundle:TabReclamation p LEFT JOIN ReclamationBundle:TabReclamation a where p.rating='$user' AND p.nomDemande=a.prenomDemande
                        ");
        $total = $query->getSingleScalarResult();
        // return $this->render('@Ecommerce/Catalogue/total.html.twig', array('total' => $total));
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($total);
        return new JsonResponse($formatted);
    }
    public function gettotalperMobile2Action()
    { $user=3;
        //$user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(" select COUNT(o.id) as nbr from ReclamationBundle:Evaluation 
        as o group by o.datee order by o.id DESC
                        ");
        $total = $query->getScalarResult();
        // return $this->render('@Ecommerce/Catalogue/total.html.twig', array('total' => $total));
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($total);
        return new JsonResponse($formatted);
    }
    public function gettotalperMobile3Action()
    { $user=3;
        //$user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT r FROM ReclamationBundle:Evaluation r WHERE r.note='$user' ");
        $total = $query->getScalarResult();
        // return $this->render('@Ecommerce/Catalogue/total.html.twig', array('total' => $total));
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($total);
        return new JsonResponse($formatted);
    }
    public function gettotalperMobileAction() //somme evaluation
    { $user=3;
        //$user = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery("SELECT  SUM(a.note)
            FROM ReclamationBundle:Evaluation p LEFT JOIN ReclamationBundle:Evaluation a where p.note='$user' AND p.id=a.id
                        ");
        $total = $query->getSingleScalarResult();
        // return $this->render('@Ecommerce/Catalogue/total.html.twig', array('total' => $total));
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted= $serializer->normalize($total);
        return new JsonResponse($formatted);
    }


}