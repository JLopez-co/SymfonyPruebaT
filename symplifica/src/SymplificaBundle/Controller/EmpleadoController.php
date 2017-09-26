<?php

namespace SymplificaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use SymplificaBundle\Entity\Empleado;
class EmpleadoController extends Controller
{
    public function EmpleadoAddViewAction(){
        $em= $this->getDoctrine()->getManager();
        $empleadores=$em->getRepository("SymplificaBundle:Empleador")->findAll();
        $contratos  =$em->getRepository("SymplificaBundle:tipoContrato")->findAll();
        return $this->render('SymplificaBundle:Empleado:EmpleadoAddView.html.twig',array(
            "contratos"=>$contratos,
            "empleadores"=>$empleadores
        ));
    }
    public function EmpleadoCreateAction(Request $request){
        if($request->isXmlHttpRequest()){
            $content= $request->getContent();
            if(!empty($content)){
                $params = json_decode($content, true);
                $empleado = new Empleado();
                $empleado->setNombreCompleto($params['nombre']);
                $empleado->setSexo($params['sexo']);
                $empleado->setDocumentoIdentidad($params['cedula']);
                $empleado->setTelefono($params['telefono']);
                $empleado->setFkTipoContrato($params['tipoContrato']);
                $empleado->setFkEmpleador($params['empleadorI']);    
                $em = $this->getDoctrine()->getManager();
                $em->persist($empleado);
                $em->flush();
            }
            return new JsonResponse(array('data' => 'Se agrego correctamente el empleado'));
        }
        return new Response('Error!', 400);
    }
}