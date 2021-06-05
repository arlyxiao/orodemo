<?php

namespace Acme\Bundle\UserBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Oro\Bundle\UserBundle\Entity\User;
use Oro\Bundle\UserBundle\Controller\UserController as OroUserController;

class UserController extends OroUserController
{
    
    /**
     * @Route("/acme/widget/info/{id}", name="acme_user_widget_info", requirements={"id"="\d+"})
     * @Template("AcmeUserBundle:User/widget:info.html.twig")
     * @param Request $request
     * @param User $user
     * @return array
     */
    public function infoAction(Request $request, User $user)
    {
        $isViewProfile = (bool)$request->query->get('viewProfile', false);

        if (!(($isViewProfile && $this->getUser()->getId() === $user->getId())
            || $this->isGranted('oro_user_user_view', $user))
        ) {
            throw new AccessDeniedException();
        }

        return [
            'entity'      => $user,
            'viewProfile' => $isViewProfile
        ];
    }

}
