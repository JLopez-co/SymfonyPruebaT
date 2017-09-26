<?php

namespace SymplificaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use SymplificaBundle\Entity\Empleador;

class EmpleadorController extends Controller
{
    public function EmpleadorAddViewAction()
    {
        return $this->render('SymplificaBundle:Empleador:EmpleadorAddView.html.twig');
    }


    public function EmpleadorCreateAction(Request $request){
        if($request->isXmlHttpRequest()){
            $content= $request->getContent();
            if(!empty($content)){
                $params = json_decode($content, true);
                $empleador = new Empleador();
                $empleador->setNombreCompleto($params['nombre']);
                $empleador->setSexo($params['sexo']);
                $empleador->setDocumentoIdentidad($params['cedula']);
                $empleador->setTelefono($params['telefono']);
                $empleador->setDirrecion($params['dirrecion']);
                $empleador->setFechaNacimiento($params['fechaNacimiento']);    
                $em = $this->getDoctrine()->getManager();
                $em->persist($empleador);
                $em->flush();
            }
            return new JsonResponse(array('data' => 'Usuario creado corrrectamente'));
        }
        return new Response('Error!', 400);
    }
}