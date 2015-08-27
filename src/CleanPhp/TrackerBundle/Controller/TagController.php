<?php

namespace CleanPhp\TrackerBundle\Controller;

use CleanPhp\TrackerBundle\Entity\Tag;
use CleanPhp\TrackerBundle\Form\TagType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagController extends Controller
{
    /**
     * @Route("/tag", name="tag")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        $data = $this->get('tracker.get_tags')->getTags();

        return $this->render(
            'CleanPhpTrackerBundle:Tag:index.html.twig',
            ['data' => $data]
        );
    }

    /**
     * @Route("/tag/new", name="tag_new")
     * @Method({"GET"})
     */
    public function newAction()
    {
        $form = $this->createForm(new TagType());

        return $this->render(
            'CleanPhpTrackerBundle:Tag:create.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/tag/create", name="tag_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {
        $service = $this->get('tracker.create_tag');

        $form = $this->createForm(new TagType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $service->create($form->getData());
            $this->addFlash(
                'notice',
                'Your changes were saved!'
            );

            return $this->redirectToRoute('tag');
        }

        return $this->render(
            'CleanPhpTrackerBundle:Tag:create.html.twig',
            ['form' => $form->createView()]
        );
    }
}
