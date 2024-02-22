<?php

namespace ARSOFT\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListarController extends Controller {

    /**
     * @Route("/articulos", name="_listar_listar")
     */
    public function listarAction($id) {
        $articulos = [
            ['id' => 1, 'title' => 'Artículo 1', 'nombre_producto' => 'iPhone 12', 'precio' => 799.00],
            ['id' => 2, 'title' => 'Artículo 2', 'nombre_producto' => 'iPhone 12 Pro', 'precio' => 999.00],
            ['id' => 3, 'title' => 'Artículo 3', 'nombre_producto' => 'iPhone 13', 'precio' => 899.00],
            ['id' => 4, 'title' => 'Artículo 4', 'nombre_producto' => 'iPhone 13 Pro Max', 'precio' => 1099.00],
        ];



        return $this->render('ARSOFTDemoBundle:MisVistas:listarArticulos.html.twig', [
                    'articulos' => $articulos,
                    'id_deseado' => $id
        ]);
    }

}
