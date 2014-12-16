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
        $repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROM');

        $roms = $repository->findAll();
        return array(
            'roms'      => $roms,
        );
    }

    /**
     * @Route("/tree", name="rom_tree")
     * @Template()
     */
    public function treeAction()
    {
        $repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROM');
        //$parents = $repository->findBy(array('parent' => null));
        $parents = $repository->getParents();

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

    /**
     * @Route("/tables", name="rom_tables")
     * @Template()
     */
    public function tablesAction()
    {
        //$repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:Table');
        //$tables = $repository->findAll();
        $tables = $this->getDoctrine()->getEntityManager()
            ->createQuery('SELECT t, c, s FROM ripnetEvoBundle:Table t JOIN t.category c JOIN t.scaling s ORDER BY c.weight')
            ->getResult();
        return array(
            'tables'  => $tables,
        );
    }

    /**
     * @Route("/generate/{romid}", name="rom_generate")
     * @Template()
     */
    public function generateAction($romid)
    {
        $repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROM');
        $rom = $repository->findOneBy(array('xmlid' => $romid));

        //$repository = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROMTable');
        //$tables = $repository->findBy(array('rom' => $rom));
        $tables = $this->getDoctrine()->getEntityManager()
            ->createQuery('SELECT rt, r, t, c, s FROM ripnetEvoBundle:ROMTable rt JOIN rt.rom r JOIN rt.table t JOIN t.category c JOIN t.scaling s WHERE r.id = ' . $rom->getId() . ' ORDER BY c.weight')
            ->getResult();

        /*$r = $this->getDoctrine()->getEntityManager()
            ->createQuery('SELECT r, c FROM ripnetEvoBundle:ROM r JOIN r.children c')
            ->getResult();
        */
        return array(
            'rom'       => $rom,
            'tables'    => $tables,
        );
    }

    /**
     * @Route("/chart", name="rom_chart")
     * @Template()
     */
    public function chartAction()
    {
        $romRepo = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROM');
        $roms = $romRepo->getParents();

        $tableRepo = $this->getDoctrine()->getRepository('ripnetEvoBundle:Table');
        $tables = $tableRepo->findAll();

        $defs = $this->getDoctrine()->getRepository('ripnetEvoBundle:ROMTable');
        $allDefs = $defs->findAll();

        $r = array();
        $rindex = 0;
        $rindexes = array();
        foreach ($roms as $rom)
        {
            $r[$rindex] = 0;
            $rindexes[$rom->getId()] = $rindex;
            $rindex++;
        }

        $a = array();
        foreach ($tables as $table)
        {
            $a[$table->getId()] = $r;
        }

        foreach ($allDefs as $def)
        {

            $romid = $def->getRom()->getId();
            if (array_key_exists($romid, $rindexes))
            {

                if ($def->getNa())
                {
                    $a[$def->getTable()->getId()][$rindexes[$romid]] = 1;
                } elseif ($def->getValidated())
                {
                    $a[$def->getTable()->getId()][$rindexes[$romid]] = 2;
                } else {
                    $a[$def->getTable()->getId()][$rindexes[$romid]] = 3;

                }
            }
        }



        return array(
            'roms'      => $roms,
            'tables'    => $tables,
            'a'         => $a,
            'num'       => count($roms) -1,
        );
    }
}
