<?php

namespace SoporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller {

    public function indexAction() {
        return new RedirectResponse($this->generateUrl('sonata_admin_dashboard'));
    }

}
