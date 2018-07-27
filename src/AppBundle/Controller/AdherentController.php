<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Swagger\Annotations as SWG;
use FOS\RestBundle\Controller\Annotations as REST;
use FOS\RestBundle\Controller\Annotations\QueryParam;


class AdherentController extends Controller
{
	/**
     * Get Adherent 
     * @SWG\Tag(name="Adherents")
     * @SWG\Response(
     *     response=200,
     *     description="Success"
     * )
     
     * @REST\View()
     * @REST\Get("/adherents/{idAdherent}")
     */
    public function getAdherentAction($idAdherent)
    {
    	return $this->get('adherent_service')->getAdherentById($idAdherent);
    }

    /**
     * Get All Adherents
	 *
     * @SWG\Tag(name="Adherents")
     *
     * @SWG\Response(
     *     response=200,
     *     description="Success"
     * )
     *
     * @SWG\Response(
     *     response=404,
     *     description="File not found"
     * )
     *
     * @REST\View()
     * @REST\Get("/adherents")
     */
    public function getAdherentsAction(Request $request)
    {
    	return $this->get('adherent_service')->getAdherents();
    }

}
