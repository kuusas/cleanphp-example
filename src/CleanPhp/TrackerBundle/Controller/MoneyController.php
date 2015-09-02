<?php

namespace CleanPhp\TrackerBundle\Controller;

use CleanPhp\TrackerBundle\Entity\Tag;
use CleanPhp\TrackerBundle\Form\MoneyType;
use CleanPhp\TrackerBundle\Form\TagType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MoneyController extends Controller
{
    /**
     * @Route("/tag", name="tag")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        // @TODO reikia padaryti pinigų išspausdinimą
//        $data = $this->get('tracker.get_money')->getMoney();
//
//        return $this->render(
//            'CleanPhpTrackerBundle:Money:index.html.twig',
//            ['data' => $data]
//        );
    }

    /**
     * @Route("/money/new", name="money_new")
     * @Method({"GET"})
     */
    public function newAction()
    {
        $form = $this->createForm(new MoneyType());

        return $this->render(
            'CleanPhpTrackerBundle:Money:create.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/money/create", name="money_create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {
        $service = $this->get('tracker.create_money');

        $form = $this->createForm(new MoneyType());
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
            'CleanPhpTrackerBundle:Money:create.html.twig',
            ['form' => $form->createView()]
        );
    }
}
