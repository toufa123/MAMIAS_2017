<?php
namespace MAMIAS\NISBundle\Controller\admin;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sonata\AdminBundle\Route\RouteCollection;
use MAMIAS\NISBundle\Form\AlienTaxonomyType;
use MAMIAS\NISBundle\Entity\AlienSpecies;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Description of TaxonomyController
 *
 * @author HABITATS
 */
class TaxonomyCRUDController extends Controller

{
   
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MAMIASSpeciesBundle:AlienTaxonomy')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AlienTaxonomy entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MAMIASSpeciesBundle:AlienTaxonomy:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function taxonomyAction()
    {
        $taxonomy = new \MAMIAS\NISBundle\Entity\AlienTaxonomy();
        $em = $this->getDoctrine()->getManager();
        
        if (isset($_POST['state']) && !empty($_POST['state'])) {
            $statut = $em->getRepository('MAMIAS\NISBundle:AlienStatus')->find(5);
        } else if (isset($_POST['state']) && empty($_POST['state'])) {
            $statut = $em->getRepository('MAMIAS\NISBundle:AlienStatus')->find(1);
        }
        
        if (!is_null($id)) {
            /* DISTRIBUTION */
            $enty = $em->getRepository('MAMIASSpeciesBundle:AlienSpecies')->find($id);
            $taxo = $enty->getTaxonomy();
            $taxo1 = $em->getRepository('MAMIASSpeciesBundle:AlienTaxonomy')->findBY(array('speciesCode' => $enty->getSpeciesCode()));
        if (!is_null($taxo)) {
                if (!is_null($form["taxo"]->getData()->getKingdomL1())) {
                    $taxo->setKingdomL1($form["taxo"]->getData()->getKingdomL1());
                } else {
                    $taxo->setKingdomL1(null);
                }
                if (!is_null($form["taxo"]->getData()->getOrderL4())) {
                    $taxo->setOrderL4($form["taxo"]->getData()->getOrderL4());
                } else {
                    $taxo->setOrderL4(null);
                }
                if (!is_null($form["taxo"]->getData()->getPhylumL2())) {
                    $taxo->setPhylumL2($form["taxo"]->getData()->getPhylumL2());
                } else {
                    $taxo->setPhylumL2(null);
                }
                if (!is_null($form["taxo"]->getData()->getClassL3())) {
                    $taxo->setClassL3($form["taxo"]->getData()->getClassL3());
                } else {
                    $taxo->setClassL3(null);
                }
                if (!is_null($form["taxo"]->getData()->getRefTax())) {
                    $taxo->setRefTax($form["taxo"]->getData()->getRefTax());
                } else {
                    $taxo->setRefTax(null);
                }
                $em->persist($taxo);
            } else if (!is_null($taxo1[0])) {

                if (!is_null($form["taxo"]->getData()->getKingdomL1())) {
                    $taxo1[0]->setKingdomL1($form["taxo"]->getData()->getKingdomL1());
                } else {
                    $taxo1[0]->setKingdomL1(null);
                }
                if (!is_null($form["taxo"]->getData()->getOrderL4())) {
                    $taxo1[0]->setOrderL4($form["taxo"]->getData()->getOrderL4());
                } else {
                    $taxo->setOrderL4(null);
                }
                if (!is_null($form["taxo"]->getData()->getPhylumL2())) {
                    $taxo1[0]->setPhylumL2($form["taxo"]->getData()->getPhylumL2());
                } else {
                    $taxo1[0]->setPhylumL2(null);
                }
                if (!is_null($form["taxo"]->getData()->getClassL3())) {
                    $taxo1[0]->setClassL3($form["taxo"]->getData()->getClassL3());
                } else {
                    $taxo[0]->setClassL3(null);
                }
                if (!is_null($form["taxo"]->getData()->getRefTax())) {
                    $taxo1[0]->setRefTax($form["taxo"]->getData()->getRefTax());
                } else {
                    $taxo1[0]->setRefTax(null);
                }
                $em->persist($taxo1[0]);
            } else {

                if (!is_null($form["taxo"]->getData()->getKingdomL1())) {
                    $taxonomy->setKingdomL1($form["taxo"]->getData()->getKingdomL1());
                } else {
                    $taxonomy->setKingdomL1(null);
                }
                if (!is_null($form["taxo"]->getData()->getOrderL4())) {
                    $taxonomy->setOrderL4($form["taxo"]->getData()->getOrderL4());
                } else {
                    $taxo->setOrderL4(null);
                }
                if (!is_null($form["taxo"]->getData()->getPhylumL2())) {
                    $taxonomy->setPhylumL2($form["taxo"]->getData()->getPhylumL2());
                } else {
                    $taxonomy->setPhylumL2(null);
                }
                if (!is_null($form["taxo"]->getData()->getClassL3())) {
                    $taxonomy->setClassL3($form["taxo"]->getData()->getClassL3());
                } else {
                    $taxonomy->setClassL3(null);
                }
                if (!is_null($form["taxo"]->getData()->getRefTax())) {
                    $taxonomy->setRefTax($form["taxo"]->getData()->getRefTax());
                } else {
                    $taxonomy->setRefTax(null);
                }

                $taxonomy->setSpeciesCode($enty->getSpeciesCode());
                $em->persist($taxonomy);
                //$em->flush();
                $taxono = $em->getRepository('MAMIASSpeciesBundle:AlienTaxonomy')->findBY(array('speciesCode' => $enty->getSpeciesCode()));
                $enty->setTaxonomy($taxono[0]);
        }}
        return $this->render('MAMIASNISBundle:CRUD:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    
    public function datadetailitis($z) {
        $data1 = file_get_contents("http://www.itis.gov/ITISWebService/services/ITISService/searchByCommonNameBeginsWith?srchKey=" . $z);
        // var_dump($data1);exit();
        $arrayofdata = explode("<ax21:tsn>", $data1);

        $l = count($arrayofdata);
        $y1 = array();
        for ($i = 1; $i < $l; $i++) {
            $x = array();
            $x = explode("</ax21:tsn>", $arrayofdata[$i]);
            $y1[$i] = $x[0];
        }


        $authortab = file_get_contents("http://www.itis.gov/ITISWebService/services/ITISService/getTaxonAuthorshipFromTSN?tsn=" . $y1[1]);
        $arrayofdata = explode("<ax21:authorship>", $authortab);
        $l = count($arrayofdata);
        $y1 = array();
        for ($i = 1; $i < $l; $i++) {
            $x = array();
            $x = explode("</ax21:authorship>", $arrayofdata[$i]);
            $y1[$i] = $x[0];
        }
        $author = $y1[1];
        echo '<pre>';
        \Doctrine\Common\Util\Debug::dump($author);

        echo '</pre>';
        die;
    }

    public function datadetailworms($name, $type) {
        $client = new \SoapClient("http://www.marinespecies.org/aphia.php?p=soap&wsdl=1");

        $Aphia = $client->getAphiaRecords($name);
        $idap = $client->getAphiaID($name);
        $synonyms = $client->getAphiaSynonymsByID($idap);
        $ressynonyms = array();
        if (!is_null($synonyms)) {
            foreach ($synonyms as $value) {
                $ressynonyms[] = $value->scientificname;
            }
        }
        $author = $Aphia[0]->authority;


        $stmt = $this->getDoctrine()->getEntityManager()
                ->getConnection()
                ->prepare("select count(*) from alien_author where taxon_author like '%" . "$author" . "%'");
        $stmt->execute();
        $All = $stmt->fetchAll();

        if ($All[0]['count'] != 0) {
            $stmt = $this->getDoctrine()->getEntityManager()
                    ->getConnection()
                    ->prepare("select* from alien_author where taxon_author like '%" . "$author" . "%'");
            $stmt->execute();
            $All2 = $stmt->fetchAll();
            $id_author = $All2[0]['id'];
        } else {
            $id_author = $author;
        }
        if ($type == 2) {
            $em = $this->getDoctrine()->getManager();
            $en = $em->getRepository('MAMIASSpeciesBundle:AlienSpecies')->findBy(array('speciesName' => $name));
            $jz = new JsonResponse();
            if (is_array($en) && !empty($en)) {
                return $jz->setData(array(
                            'scientificname' => $Aphia[0]->scientificname,
                            'authorname' => $id_author,
                            'kingdom' => $Aphia[0]->kingdom,
                            'phylum' => $Aphia[0]->phylum,
                            'class' => $Aphia[0]->class,
                            'order' => $Aphia[0]->order,
                            'family' => $Aphia[0]->family,
                            'allsynonyms' => $ressynonyms,
                            'ref_tax' => 6
                ));
            } else {

                return $jz->setData(array(
                            'scientificname' => null,
                            'authorname' => null,
                            'kingdom' => null,
                            'phylum' => null,
                            'class' => null,
                            'order' => null,
                            'family' => null,
                            'allsynonyms' => null,
                            'ref_tax' => null
                ));
            }
        } else {
            return array(
                'scientificname' => $Aphia[0]->scientificname,
                'authorname' => $id_author,
                'kingdom' => $Aphia[0]->kingdom,
                'phylum' => $Aphia[0]->phylum,
                'class' => $Aphia[0]->class,
                'order' => $Aphia[0]->order,
                'family' => $Aphia[0]->family,
                'allsynonyms' => $ressynonyms,
                'ref_tax' => 6
            );
        }
    }

    public function dataworms($name) {
        $client = new \SoapClient("http://www.marinespecies.org/aphia.php?p=soap&wsdl=1");

        $Aphia = $client->getAphiaRecords($name);
        $response = new JsonResponse();
        $res = array();
        if (is_array($Aphia) && !empty($Aphia)) {

            foreach ($Aphia as $value) {
                $res[] = $value->valid_name;
            }
        }
        return $response->setData($res);
    }

    public function dataitis($name) {
        $data = file_get_contents("http://www.itis.gov/ITISWebService/services/ITISService/searchByCommonNameBeginsWith?srchKey=" . $name);
        $mysongs = simplexml_load_file("http://www.itis.gov/ITISWebService/services/ITISService/searchByCommonNameBeginsWith?srchKey=" . $name);

        echo '<pre>';
        var_dump($mysongs);
        echo '</pre>';
        die;
        $arrayofdata = explode("<ax21:commonName>", $data);
        $arrayofdata = explode("<ax21:tsn>", $data);
        echo '<pre>';
        \Doctrine\Common\Util\Debug::dump($arrayofdata);
        echo '</pre>';
        $l = count($arrayofdata);
        $table = array();
        for ($i = 1; $i < $l; $i++) {
            $x = array();
            $x = explode("</ax21:commonName>", $arrayofdata[$i]);
            $table[] = $x[0];
        }
        print_r($table);
        $response = new JsonResponse();
        return $response->setData($table);
    }

}
