<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Address;

class AddressController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $addresses = $this->get('doctrine')
            ->getRepository('AppBundle:Address')
            ->findAll();

        return $this->render('address/index.html.twig', [
        	'addresses' => $addresses
        ]);
    }

    protected function createAddressForm(Request $request, Address $address)
    {
    	if (empty($address) === false) {

		    $form = $this->createFormBuilder($address)
		    	->setMethod('POST')
		        ->add('firstName',       'text')
		        ->add('lastName',        'text')
		        ->add('addressLine1',    'text')
		        ->add('addressLine2',    'text')
		        ->add('city',            'text')
		        ->add('postcode',        'text')
		        ->add('telephoneHome',   'text')
		        ->add('telephoneMobile', 'text')
		        ->add('save',            'submit', ['label' => 'Create Address'])
		        ->getForm();

		    $form->handleRequest($request);
		    return $form;
	    }
	    return null;
    }

    /**
     * @Route("/add", name="add")
     */
    public function addAction(Request $request)
    {
	    $form = $this->createAddressForm($request, new Address());

	    if ($request->getMethod() === 'POST' && $form->isValid() === true) {

	    	$address = $form->getData();

	    	$doctrineManager = $this->getDoctrine()->getManager();
	    	$doctrineManager->persist($address);
	    	$doctrineManager->flush();

	    	return $this->redirectToRoute('view', ['id' => $id]);
	    }

        return $this->render('address/add.html.twig', [
        	'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/view/{id}", name="view")
     */
    public function viewAction(Request $request, $id = 0)
    {
    	if ($id > 0) {

	        $address = $this->get('doctrine')
	            ->getRepository('AppBundle:Address')
	            ->find($id);

	        if (empty($address) === false) {

		        return $this->render('address/view.html.twig', [
		        	'address' => $address
		        ]);
	    	}
    	}
    	return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function editAction(Request $request, $id = 0)
    {
    	if ($id > 0) {

		    $doctrineManager = $this->getDoctrine()->getManager();
		    $address = $doctrineManager->getRepository('AppBundle:Address')
		    			->find($id);

		    $form = $this->createAddressForm($request, $address);

		    if ($request->getMethod() === 'POST' && $form->isValid() === true) {

		    	$doctrineManager->flush();
		    	return $this->redirectToRoute('view', ['id' => $id]);
		    }

	        return $this->render('address/edit.html.twig', [
	        	'form' => $form->createView()
	        ]);
    	}
    	return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/delete", name="delete")
     */
    public function deleteAction(Request $request)
    {
    	$id = (int) $request->request->get('id');

    	if ($id > 0) {

	    	$doctrineManager = $this->getDoctrine()->getManager();

	        $address = $this->get('doctrine')
	            ->getRepository('AppBundle:Address')
	            ->find($id);

	    	$doctrineManager->remove($address);
	    	$doctrineManager->flush();

	        return new Response('true');
    	}
    	return new Response('false');
    }
}
