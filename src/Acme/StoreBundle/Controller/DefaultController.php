<?php

namespace Acme\StoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\StoreBundle\Model\Product;
use Acme\StoreBundle\Model\ProductQuery;
use Acme\StoreBundle\Form\Type\ProductType;

use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

    	$productlist = ProductQuery::create()->find();
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name, 'productlist' => $productlist));
    }

    public function createAction()
	{	
		$price = rand(10,100);
		$name = 'A Foo Bar '.rand(10,2);
	    $product = new Product();
	    $product->setName($name);
	    $product->setPrice($price);
	    $product->setDescription('Lorem ipsum dolor');

	    $product->save();

	    #return new Response('Created product id '.$product->getId());
	    return $this->redirect($this->generateUrl('homepage'));
	}

	public function showAction($id)
	{
	    $product = ProductQuery::create()
	        ->findPk($id);

	    if (!$product) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }

	    return $this->render('AcmeStoreBundle:Default:show.html.twig', array('product' => $product));
	}

	public function newAction()
	{
	    
	    $product = new Product();
        $form = $this->createForm(new ProductType(), $product);
        $name = "Add Form";

        $request = $this->getRequest();

        if ('POST' === $request->getMethod()) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $product->save();

                $request->getSession()->getFlashBag()->add(
		            'notice',
		            'Product created successfully!'
		        );
                return $this->redirect($this->generateUrl('homepage'));
            }
        }

       

	    return $this->render('AcmeStoreBundle:Default:edit.html.twig', array(
            'form' => $form->createView(), 'name' => $name ) );
	}



	public function editAction($id, Request $request)
	{
	    $product_det = ProductQuery::create()
	        ->findPk($id);

	    $name = "Edit Form";

	    if (!$product_det) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }

	    $form = $this->createFormBuilder($product_det)
        ->add('name', 'text')
        ->add('price', 'text')
        ->add('description', 'textarea')
        ->getForm();

	    $form->handleRequest($request);
	 
	    if ($form->isValid()) {
	        $product_det->save();
	        #return new Response('Product updated successfully');
	        $request->getSession()->getFlashBag()->add(
	            'notice',
	            'Product updated successfully!'
	        );
	        return $this->redirect($this->generateUrl('homepage'));
	    }
	    
	   


	    return $this->render('AcmeStoreBundle:Default:edit.html.twig', array('name' => $name, 'product'=> $product_det, 'form' => $form->createView() ));
	}


	public function updateAction($id)
	{
	    $product = ProductQuery::create()
	        ->findPk($id);

	    if (!$product) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }

	    $product->setName('New product name!');
	    $product->save();

	    return $this->redirect($this->generateUrl('homepage'));
	}

	public function deleteAction($id)
	{
	    $product = ProductQuery::create()
	        ->findPk($id);

	    if (!$product) {
	        throw $this->createNotFoundException(
	            'No product found for id '.$id
	        );
	    }

	    $product->delete();
	    return $this->redirect($this->generateUrl('homepage'));
	    // ... do something, like pass the $product object into a template
	}

}
