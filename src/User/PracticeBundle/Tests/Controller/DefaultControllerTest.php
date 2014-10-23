<?php

namespace User\PracticeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use User\PracticeBundle\Entity\User;

class DefaultControllerTest extends WebTestCase
{
    public function testLogin()
    {	

    	$client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $login_form = $crawler->selectButton('login')->form(array(
        														'_username' => 'richtermark.baay@chromedia.com', 
        														'_password' => 'mark'	
        													)
        												);
        $client->submit($login_form);
      	 $crawler = $client->followRedirect();
      	 $this->assertGreaterThan(0, $crawler->filter('html:contains("Hello WORLD!")')->count());

      	$link = $crawler->filter('a:contains("Home")')->eq(1)->link();
      	$crawler = $client->click($link);

    }

    public function testSignup()
    {
    	$client = static::createClient();

        $crawler = $client->request('GET', '/signup');


        $form = $crawler->selectButton('form[save]')->form();


			$form['form[firstname]'] = 'Richtermark';
			$form['form[lastname]'] = 'Baay';
			$form['form[email]'] = 'Richtermark.baay@chromedia.com';
			$form['form[password][first]'] = 'mark';
			$form['form[password][second]'] = 'mark';


		$crawler = $client->submit($form);
      	$crawler = $client->followRedirect();
      	var_dump($crawler);
       
      /*	$this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("is already exist!")')->count()
        );
*/
     }
}