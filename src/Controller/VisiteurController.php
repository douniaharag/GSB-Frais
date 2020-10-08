<?php

namespace App\Controller;

use App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class VisiteurController extends AbstractController
{
    public function visiteur()
    {
        return $this->render('visiteur/visiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }
    
    public function seConnecterVisiteur(Request $test_session)
    {
        
        $request = Request::createFromGlobals() ;
                
        $form = $this->createFormBuilder(  )
            ->add( 'identifiant' , TextType::class )
            ->add( 'motDePasse' , PasswordType::class )
            ->add( 'valider' , SubmitType::class )
            ->add( 'annuler' , ResetType::class )
            ->getForm() ;
            
        $form->handleRequest( $request ) ;
        
        if ( $form->isSubmitted() && $form->isValid() ) {
            $data = $form->getData() ;
            
                array( 'data' => $data ) ;
                $pdo = new \PDO('mysql:host=localhost; dbname=gsbFrais', 'developpeur', 'azerty');
                
                $rqt = $pdo->prepare("select * from Visiteur where login = :identifiant") ;
                $rqt->bindParam(':identifiant', $data['identifiant']);
                $rqt->execute() ;
                $resultat1 = $rqt->fetch(\PDO::FETCH_ASSOC) ;
                
                $sql = $pdo->prepare("select * from Visiteur where mdp = :motDePasse") ;
                $sql->bindParam(':motDePasse', $data['motDePasse']);
                $sql->execute() ;
                $resultat2 = $sql->fetch(\PDO::FETCH_ASSOC) ;
                
                if ( $resultat1['login'] == $data['identifiant'] && $resultat2['mdp'] == $data['motDePasse'] ) {


                    $session = $test_session->getSession() ;
                    $session->set('id',$resultat1['id']) ;

                    return $this->redirectToRoute( 'menuV', array( 'data' => $data ) ) ;
                    }

                else{
                    return $this->redirectToRoute( 'visiteur/seConnecterVisiteur', array( 'data' => $data ) ) ;
                }
    
        }		
        return $this->render( 'visiteur/seConnecterVisiteur.html.twig', array( 'formulaire' => $form->createView() ) ) ;
        
    }
    public function choixMois(){
        $request = Request::createFromGlobals() ;
        
        $formulaire = $this->createFormBuilder( )
                ->add('mois', ChoiceType::class, [
                    'choices' =>[
                        'Janvier'=>'01',
                        'Février'=>'02',
                        'Mars'=>'03',
                        'Avril'=>'04',
                        'Mai'=>'05',
                        'Juin'=>'06',
                        'Juillet'=>'07',
                        'Août'=>'08',
                        'Septembre'=>'09',
                        'Octobre'=>'10',
                        'Novembre'=>'11',
                        'Décembre'=>'12',
                    ]
                ])
                ->add('annee', ChoiceType::class, [
                    'choices' => [
                        Date('Y') => Date('Y'),
                        Date('Y') - 1 => Date('Y') - 1,
                        Date('Y') - 2 => Date('Y') - 2,
                        Date('Y') - 3 => Date('Y') - 3,
                        Date('Y') - 4 => Date('Y') - 4,
                        Date('Y') - 5 => Date('Y') - 5,
                        Date('Y') - 6 => Date('Y') - 6,
                        Date('Y') - 7 => Date('Y') - 7,
                        Date('Y') - 8 => Date('Y') - 8,
                        Date('Y') - 9 => Date('Y') - 9,
                        Date('Y') - 10 => Date('Y') - 10,
                    ]
                ])
                ->add( 'valider' , SubmitType::class )
                ->add( 'annuler' , ResetType::class )
                ->getForm();
        
        $formulaire->handleRequest($request);
        
        if ( $formulaire->isSubmitted() && $formulaire->isValid() ) {
            $data = $formulaire->getData() ;
            
            array( 'data' => $data ) ;
            $m = $data['mois'];
            $a = $data['annee'];
            $s=sprintf("%02d%04d", $m, $a);
            
            $pdo = new \PDO('mysql:host=localhost; dbname=gsbFrais', 'developpeur', 'azerty');
            
            $rq = $pdo->prepare("select * from FicheFrais where mois = ".$s) ;
            $rq->execute() ;
            $resultat1 = $rq->fetch(\PDO::FETCH_ASSOC) ;
            
             if ($resultat1 == $s) {
                        return $this->redirectToRoute( 'visiteur/consulter', array( 'data' => $data ) ) ;
            }
        }

    return $this->render( 'visiteur/ChoixMois.html.twig', array( 'formulaire' => $formulaire->createView() ) ) ;              
    }        
    
    public function consulter()
    {
        
         
        return $this->render('visiteur/consulter.html.twig', [
            'controller_name' => 'VisiteurController'
        ]);
    }
   
    public function saisir()
    {
        return $this->render('visiteur/saisir.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }
}
