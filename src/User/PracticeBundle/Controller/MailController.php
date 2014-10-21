<?php

namespace User\PracticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\PracticeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\SecurityContext;

class MailController extends Controller
{   
  
      public function confirmnowAction(){

        echo "go"; exit;

    }
    public function sendConfirmationEmail($id, $name, $email)
    {
        $message = \Swift_Message::newInstance()

            ->setSubject('Email Confirmation')
            ->setFrom('richtermark.baay@Chromedia.com')
            ->setTo($email)
            ->setContentType('text/html')
            ->setBody(
                $this->renderView(
                    'UserPracticeBundle:Page:confirm.html.twig',
                                                                 array(
                                                                        'authCode' => sha1($email),
                                                                        'email' => $email,
                                                                        'name' => $name,
                                                                        'id' => $id,
                                                                     )
                )
            )
        ;

          try {

                $this->get('mailer')->send($message);  

            } catch(\Doctrine\DBAL\DBALException $e) {

                $this->get('session')->getFlashBag()->add('error', 'Email confirmation not sent.');

            }   
    }
    public function sendReqPassEmail($email, $authCode)
    {
        $message = \Swift_Message::newInstance()

            ->setSubject('Request Password')
            ->setFrom('richtermark.baay@Chromedia.com')
            ->setTo($email)
            ->setContentType('text/html')
            ->setBody(
                $this->renderView(
                    'UserPracticeBundle:Page:request_password.html.twig',
                                                                 array(
                                                                        'authCode' => sha1($email),
                                                                        'email' => $email,
                                                                    
                                                                     )
                )
            )
        ;

          try {

                $this->get('mailer')->send($message);  

            } catch(\Doctrine\DBAL\DBALException $e) {

                $this->get('session')->getFlashBag()->add('error', 'Request not sent.');

            }   
    }

}
