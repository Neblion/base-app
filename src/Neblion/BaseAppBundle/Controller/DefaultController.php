<?php

namespace Neblion\BaseAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="welcome")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
            
        // Check if user has a profile
        if (!$user->getProfile()) {
            // Set flash message
            $this->get('session')->getFlashBag()->add('notice', 'You have not a profile, create it!');
            return $this->redirect($this->generateUrl('profile_new'));
        }
        
        return array();
    }
}
