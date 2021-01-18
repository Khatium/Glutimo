<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Properties;
use App\Entity\Pictures;
use App\Form\PropertyType;
use App\Form\PicturesType;
use Doctrine\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class PropertiesController extends AbstractController
{
    /**
     * @Route("/properties", name="properties")
     */
    public function index(): Response
    {
      $repo = $this->getDoctrine()->getRepository(Properties::class);

      $properties = $repo->findAll();

        return $this->render('properties/index.html.twig', [
            'controller_name' => 'PropertiesController',
            'properties' => $properties
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home() {

      $repo = $this->getDoctrine()->getRepository(Properties::class);

      $properties = $repo->findAll();

        return $this->render('properties/home.html.twig', [
          'properties' => $properties
        ]);
    }

    /**
    *@Route("/properties/new", name="properties_create")
    *@Route("/properties/{id}/edit", name="properties_edit")
    */
    public function formProperty(Properties $property = null, Request $request, EntityManagerInterface $manager){

      if(!$property) {
        $property = new Properties();
      }

      $form = $this->createForm(PropertyType::class, $property);

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        if(!$property->getId()) {
          $property->setCreatedAt(new \DateTime());
        }

        $manager->persist($property);
        $manager->flush();

        return $this->redirectToRoute('property_show', ['id' => $property->getId()]);
      }

      return $this->render('properties/create.html.twig', [
        'formProperty' => $form->createView(),
        'editMode' => $property->getId() != null
      ]);
    }

    /**
    *@Route("/properties/{id}/picturesAdd", name="properties_picturesAdd")
    */
    public function picturesAdd(Properties $property, Request $request, EntityManagerInterface $manager) {

      $pictures = new Pictures();
      $form = $this->createForm(PicturesType::class, $pictures);

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
        $pictures->setRelatedProperty($property);
        $manager->persist($pictures);
        $manager->flush();
        $property->addPicture($pictures);
        $manager->persist($property);
        $manager->flush();

        return $this->redirectToRoute('property_show', ['id' => $property->getId()]);
      }

      return $this->render('properties/picturesadd.html.twig', [
        'formPictures' => $form->createView()
      ]);
    }

    /**
    *@Route("/properties/{id}/delete", name="properties_delete")
    */
    public function delete(Properties $property, EntityManagerInterface $manager) {
      $manager->remove($property);
      $manager->flush();

      return $this->redirectToRoute('home');
    }

    /**
    *@Route("/property/{id_prop}/picture/{id_pic}/delete", name="picture_delete")
    */
    public function deletePicture($id_prop, $id_pic, EntityManagerInterface $manager) {

      $repo = $this->getDoctrine()->getRepository(Properties::class);
      $picrepo = $this->getDoctrine()->getRepository(Pictures::class);

      $property = $repo->findOneBy(array('id' => $id_prop));
      $picture = $picrepo->findOneBy(array('id' => $id_pic));

      $property->removePicture($picture);
      $manager->persist($property);
      $manager->flush();
      return $this->redirectToRoute('property_show', ['id' => $property->getId()]);
    }

    /**
    * @Route("/properties/{id}", name="property_show")
    */
    public function show($id) {
      $repo = $this->getDoctrine()->getRepository(Properties::class);

      $property = $repo->find($id);

      return $this->render('properties/show.html.twig', [
        'property' => $property
      ]);
    }
}
