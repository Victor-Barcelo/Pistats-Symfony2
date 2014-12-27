<?php

namespace Vbv\PistatsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Vbv\PistatsBundle\Lib\Twitter;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('VbvPistatsBundle:Main:index.html.twig');
    }

    public function getTemperaturesAction()
    {
        $repo = $this->get('doctrine')->getManager('temperature')->getRepository('VbvPistatsBundle:Temperature');
        $temps = $repo->findAll();
        $tempsArray = array();
		foreach ($temps as $temp) 
		{
			array_push($tempsArray, array('id' => $temp->getId(),'temperature' => $temp->getTemperature(), 'time' => $temp->getTime()));
		}
		$return=array("success"=>true, "data"=>$tempsArray);
		$return=json_encode($return);
		return new Response($return, 200, array('Content-Type'=>'application/json'));
    }

    public function notifyTemperatureAlertAction(Request $request)
    {
        $temperature = $request->request->get('temperature');
        // $time = $request->request->get('time');
        $time = date("Y-m-d H:m:s",time());
        $emails = $this->getAlertEmails();
        $this->emailAlerts($emails, $temperature, $time);
        $this->tweetTempAlert($temperature, $time);
        return new Response('{ success: true }', 200, array('Content-Type'=>'application/json'));
    }

    private function getAlertEmails()
    {
        $em = $this->getDoctrine()->getManager();
        $usersToNotify = $em->getRepository('VbvPistatsBundle:User')->findByNotify(1);
        $emails = array();
        foreach ($usersToNotify as $user) {
            array_push($emails, $user->getEmail());
        }
        return $emails;
    }

    private function emailAlerts($emails, $temperature, $time)
    {
        foreach ($emails as $email) {
            $message = \Swift_Message::newInstance()
            ->setSubject('Alerta!')
            ->setFrom('pistats@none.com')
            ->setTo($email)
            ->setBody('['. $time. '] - Alerta!: ' . $temperature);
            $this->get('mailer')->send($message);
        }
    }

    private function tweetTempAlert($temperature, $time) 
    {
        $tweet = '['. $time. '] - Alerta!: ' . $temperature; 
        $twitter = $this->get('endroid.twitter');
        $twitter->query('statuses/update', 'POST', 'json', array( 'status' => $tweet ));
    }


    public function configModalAction()
    {
        return $this->render('VbvPistatsBundle:Main:userConfigModal.html.twig');
    }
}