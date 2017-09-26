<?php

namespace SymplificaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReporteController extends Controller{
    public function ReporteSelectViewAction(){

        $em= $this->getDoctrine()->getManager();
        $em = $this->getDoctrine()->getRepository('SymplificaBundle:Empleador');
        
        $query = $this->getDoctrine()->getManager()->createQuery('
        select t1.nombre_completo,t1.documento_identidad,
        t1.dirrecion,t2.nombre_completo,t2.documento_identidad,
        t3.nombre_contrato
        from Empleador t1 
        inner join  Empleado t2 on t1.id = t2.fk_empleador
        inner join tipo_contrato t3 on t2.fk_tipo_contrato = t3.id;');

        try {
            
            $reporte =$query->getResult();
            var_dump($reporte);
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
//        return $this->render('SymplificaBundle:Reporte:ReporteSelectView.html.twig');
    }
}