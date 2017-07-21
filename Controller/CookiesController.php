<?php

namespace TwinElements\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CookiesController extends Controller
{
    /**
     * @Route("/cookies-accept", options={"expose"=true}, name="accept_cookies_action")
     */
    public function acceptAction(Request $request)
    {
        if (!$request->isXmlHttpRequest()) {
            return $this->createAccessDeniedException($this->get('translator')->trans('te_core.access_denied_exception'));
        }

        $response = new Response('ok');
        if(null === $request->cookies->get('accept_cookies')){
            $response->headers->setCookie(new Cookie('accept_cookies', true, time() + (86400 * 30)));
        }

        return $response;
    }
}
