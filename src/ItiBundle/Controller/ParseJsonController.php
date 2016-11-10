<?php

namespace ItiBundle\Controller;

use ItiBundle\Entity\Data;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParseJsonController extends Controller
{

      public function bddAction()
      {
          $string = file_get_contents($this->get('kernel')->getRootDir() . "/../web/rdata.json");
          $jFile = json_decode($string, true);

          $sites = $jFile["features"];
          $em = $this->getDoctrine()->getManager();
          foreach ($sites as $site) {
              $open= new Data();
              $open->setNom($site["properties"]["nom"]);
              $open->setAdresse($site["properties"]["adresse"]);
              $open->setCodepostal($site["properties"]["codepostal"]);
              $open->setCommune($site["properties"]["commune"]);
              $open->setTelephone($site["properties"]["telephone"]);
              $open->setTarifsmin($site["properties"]["tarifsmin"]);
              $open->setEmail($site["properties"]["email"]);
              $open->setSiteweb($site["properties"]["siteweb"]);
              $open->setLongitude($site["geometry"]["coordinates"][0]);
              $open->setLatitude($site["geometry"]["coordinates"][1]);

              var_dump($open);
              $em->persist($open);
          }
        //  $em->flush();
          return $this->render('ItiBundle:ItiView:bdd.html.twig');
      }


}