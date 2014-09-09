<?php

namespace ripnet\EvoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;


class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request, SecurityContext $securityContext)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');


        $menu->addChild('Home', array('route' => 'home'));
        $menu->addChild('Download ROM XMLs (from EcuFlash)', array(
            'route' => 'download',
            //'routeParameters' => array('id' => 42)
        ));
        $menu->addChild('ROMs (new)', array('route' => 'rom'));

        $routeName = $request->get('_route');
        switch (true)
        {
            case preg_match('/^rom/', $routeName):
                $menu->getChild('ROMs (new)')->setCurrent(true);
            default:
        }


        if ($securityContext->isGranted('ROLE_ADMIN')) {
            $menu->addChild('Admin', array('route' => 'menu_admin'));
        }

        // ... add more children

        return $menu;
    }

    public function createRomSideMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-sidebar');
        $menu->addChild('ROMs', array('route' => 'rom'));
        $menu->addChild('ROM Tree', array('route' => 'rom_tree'));
        $menu->addChild('ROM Scalings', array('route' => 'rom_scalings'));
        $menu->addChild('ROM Tables', array('route' => 'rom_tables'));

        return $menu;
    }
}