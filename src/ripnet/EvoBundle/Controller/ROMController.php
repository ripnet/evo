<?php

namespace ripnet\EvoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ROMController
 * @package ripnet\EvoBundle\Controller
 * @Route("/rom")
 */
class ROMController extends Controller
{
    /**
     * @Route("/", name="rom")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );
    }

    /**
     * @Route("/tree", name="rom_tree")
     * @Template()
     */
    public function treeAction()
    {
        $repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROM');
        $parents = $repository->findBy(array('parent' => null));

        return array(
                'parents'  => $parents,
            );
    }

    /**
     * @Route("/scalings", name="rom_scalings")
     * @Template()
     */
    public function scalingsAction()
    {
        $repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:Scaling');
        $scalings = $repository->findAll();

        return array(
            'scalings'  => $scalings,
        );
    }

}
