<?php

namespace CleanPhp\TrackerBundle\Controller;

use CleanPhp\TrackerBundle\Entity\Tag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagController extends Controller
{
    /**
     * @Route("/tag/create/{name}", name="tag_create")
     */
    public function createAction($name)
    {
        $service = $this->get('tracker.create_tag');

        $tag = new Tag($name);
        $service->create($tag);

        return $this->render(
            'CleanPhpTrackerBundle:Tag:create.html.twig',
            ['tag' => $tag]
        );
    }
}
