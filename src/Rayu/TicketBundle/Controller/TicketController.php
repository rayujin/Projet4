<?php

namespace Rayu\TicketBundle\Controller;

use Rayu\TicketBundle\Entity\Ticket;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

//Controller des Tickets
class TicketController extends Controller
{
	/**
	 *@Route("/add") 
	*/
	public function addTicket(Request $request)
	{
		// ON crée un objet Ticket

		$ticket = new Ticket();

		//On crée le formulaire grâce au service form factory
		$formBuilder = $this->get('form.factory')->createBuilder(Formtype::class, $ticket);

		//ON ajoute les champs de l'entité que m'on veut à notre formulaire
		$formBuilder
			->add('prenom', TextType::class)
			->add('nom', TextType::class)
			->add('journee', CheckboxType::class)
			->add('demiJournee', CheckboxType::class)
			->add('demiTarif', CheckboxType::class, array('required' => false))
			->add('dateDeNaissance', DateType::class)
			->add('mail', EmailType::class)
			->add('dateDeReservation', DateType::class)
			->add('commander', SubmitType::class)
		;

		//à partir du formBuilder on genere le formulaire
		$form = $formBuilder->getForm();

		//on passe la mathode createView() du formulaire à la vue
		return $this->render('RayuTicketBundle:Ticket:add.html.twig', array('form' => $form->createView(),));

		//Si la requête est en POST
		if($request->isMethod('POST'))
		{
			//On fait le lien Requête <-> Formulaire
			//Maintenant la var $ticket contient les valeurs entrées dans le form par le visiteur
			$form->handleRequest($request);


			//On vérifie que les valeurs entréees sont correctes
			if($form->isValid())
			{
				// on enregistre notre objet $ticket en bdd par ex
				$em = $this->getDoctrine()->getManager();
				$em->persist($ticket);
				$em->flush();

				$request->getSession()->getFlashBag()->add('notice', 'Ticket bien enregistrée.');
			}

		}
		else
		{
			echo "erreur !";
		}




	}
}