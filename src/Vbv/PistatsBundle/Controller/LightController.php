<?php

namespace Vbv\PistatsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Vbv\PistatsBundle\Entity\Light;

/**
 * Light controller.
 *
 * @Route("/light")
 */
class LightController extends Controller
{

    /**
     * Lists all Light entities.
     *
     * @Route("/", name="light")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VbvPistatsBundle:Light')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Light entity.
     *
     * @Route("/{id}", name="light_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VbvPistatsBundle:Light')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Light entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
