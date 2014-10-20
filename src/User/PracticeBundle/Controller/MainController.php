<?php

namespace User\PracticeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\PracticeBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Security\Core\SecurityContextInterface;

class MainController extends Controller
{
    public function homeAction()
    {
       return $this->render('UserPracticeBundle:Page:home.html.twig');       
    }
    public function loginAction(Request $request){

           $session = $request->getSession();

            // get the login error if there is one
            if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $request->attributes->get(
                    SecurityContextInterface::AUTHENTICATION_ERROR
                );
            } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
                $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
                $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
            } else {
                $error = '';
            }

            // last username entered by the user
            $lastUsername = (null === $session) ? '' : $session->get(SecurityContextInterface::LAST_USERNAME);

            return $this->render(
                'UserPracticeBundle:Page:login.html.twig',
                array(
                    // last username entered by the user
                    'last_username' => $lastUsername,
                    'error'         => $error,
                )
            );
    }

    public function signupAction()
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('firstname', 'text', array(
                                                    'label' => false,
                                                    'attr' => array(
                                                                        'placeholder' => 'Enter you firstname',
                                                                        'class' => 'form-control',
                                                                    ),
                                                   //'constraints' => array(new NotBlank(array('message' => 'Enter your email')))
     
                                                  
                                               ))
            ->add('lastname', 'text', array(
                                                    'label' => false,
                                                    'attr' => array(
                                                                        'placeholder' => 'Enter your lastname',
                                                                        'class' => 'form-control',
                                                                    ),
                                                   //'constraints' => array(new NotBlank(array('message' => 'Enter your email')))

                                                  
                                               ))
            ->add('email', 'email', array(
                                                    'label' => false,
                                                    'attr' => array(
                                                                        'placeholder' => 'Enter your email',
                                                                        'class' => 'form-control',
                                                                    ),
                                                   //'constraints' => array(new NotBlank(array('message' => 'Enter your email')))

                                                  
                                               ))

            ->add('password', 'repeated', array(

                                                    'type' => 'password',
                                                    'invalid_message' => 'The password fields must match.',
                                                    'options' => array('attr' => array('class' => 'password-field')),
                                                    'required' => true,
                                                    'first_options'  => array(
                                                                                    'label' => false,
                                                                                    'attr' => array(
                                                                                                        'placeholder' => 'Enter password',
                                                                                                        'class' => 'form-control',

                                                                                                    ),
                                                                            ),
                                                    'second_options' => array(

                                                                                 'label' => false,
                                                                                 'attr' => array(
                                                                                                    'placeholder' => 'Confirm password',
                                                                                                    'class' => 'form-control',
                                                                                                    ),

                                                                             ),

                                                ))

            ->add('save', 'submit', array(
                                                    'label' => 'Register >>',
                                                    'attr' => array(
                                                                        'placeholder' => 'Enter password',
                                                                        'class' => 'btn btn-primary',

                                                                    ),
                                                ))
            ->getForm();

            // validating the forms    
            $request = $this->getRequest();
            $form->handleRequest($request);
            if($form->isSubmitted()) {
              //  var_dump($form->getData());
                if($form->isValid())  {

                        $user->setEmail($form['email']->getData());
                        $user->setFirstname($form['firstname']->getData());
                        $user->setLastname($form['lastname']->getData());
                        $user->setPassword($form['password']->getData());
                        $user->setStatus(false);

                        $checkData = $this->getDoctrine()
                            ->getRepository('UserPracticeBundle:User')
                            ->findByEmail($form['email']->getData());                  

                            if(!$checkData){

                                $em = $this->getDoctrine()->getManager();
                                
                                $em->persist($user);
                                $em->flush();

                                $name = $form['firstname']->getData()." ".$form['lastname']->getData();
                                $this->sendConfirmationEmail($user->getId(), $name, $form['email']->getData());

                                $this->get('session')->getFlashBag()->add('success','New account has been added! Please confirm your account.'); 
                                return $this->redirect('signup');

                        }else{

                           $this->get('session')->getFlashBag()->add('error','This account "'. $form["email"]->getData().'" is already exist!'); 
                            return $this->redirect('signup');

                        }    
                       
                }
            }

             return $this->render('UserPracticeBundle:Page:signup.html.twig', array(
                                                                                    'form' => $form->createView(),
                                                                              ));  
    }

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

}