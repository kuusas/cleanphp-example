<?php

namespace CleanPhp\TrackerBundle\Controller;

use CleanPhp\TrackerBundle\Entity\LabelEntity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LabelController extends Controller
{
    /**
     * @Route("/label/create/{name}", name="label_create")
     */
    public function createAction($name)
    {
        $service = $this->get('tracker.create_label');

        $label = new LabelEntity($name);
        $service->create($label);

        return $this->render(
            'CleanPhpTrackerBundle:Label:create.html.twig',
            ['label' => $label]
        );
    }
}
