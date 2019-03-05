<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Client;

class ClientController extends FOSRestController
{
    /**
     * @Rest\Get("/client")
     */
    public function getAllAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Client')->findAll();
        if (!empty($restresult)) {
          return new View("pas de client(s)", Response::HTTP_NOT_FOUND);
     }else
        return $restresult;
    }


        /**
         * @Rest\Get("/client/{id}")
         */
        public function getOneAction($id)
        {
          $singleresult = $this->getDoctrine()->getRepository('AppBundle:Client')->find($id);
          if (empty($singleresult)) {
          return new View("client non trouvé", Response::HTTP_NOT_FOUND);
          }
          else  return $singleresult;
        }




            /**
           * @Rest\Put("/client/{id}")
           */

          public function updateAction($id,Request $request)
          { 
         
//          $name = $request->get('name');
//          $role = $request->get('role');
          $em = $this->getDoctrine()->getManager();
          $client = $this->getDoctrine()->getRepository('AppBundle:Client')->find($id);
          if (empty($user)) {
            return new View("user not found", Response::HTTP_NOT_FOUND);
          } 
         
          }



        /**
      * @Rest\Delete("/client/{id}")
      */
    public function deleteAction($id)
    {
       // $data = new Client();
        $em = $this->getDoctrine()->getManager();
        $client = $this->getDoctrine()->getRepository('AppBundle:Client')->find($id);
      if (empty($client)) {
        return new View("user not found", Response::HTTP_NOT_FOUND);
      }
      else {
        $em->remove($client);
        $em->flush();
      }
        return new View("supprimé avec succès", Response::HTTP_OK);
      }
}
