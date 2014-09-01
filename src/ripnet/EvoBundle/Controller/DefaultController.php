<?php

namespace ripnet\EvoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/download", name="download")
     * @Template()
     */
    public function downloadAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('ripnetEvoBundle:XMLFile');
        $files = $repository->findAll();

        return array(
            'files'     =>  $files,
        );
    }

    /**
     * @Route("/getDownload/{id}", name="getDownload")
     *
     */
    public function getDownloadAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('ripnetEvoBundle:XMLFile');
        $file = $repository->find($id);
        return new Response(htmlentities($file->getContents()));
    }

    /**
     * @Route("/fileDownload/{id}", name="fileDownload")
     */
    public function fileDownloadAction($id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('ripnetEvoBundle:XMLFile');
        $file = $repository->find($id);
        $length = strlen($file->getContents());

        $response = new Response;
        $response->headers->set('Content-type', 'text/xml');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $file->getName() . '"');
        $response->setContent($file->getContents());

        return $response;

    }
}
