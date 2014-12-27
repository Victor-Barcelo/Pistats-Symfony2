<?php

namespace Vbv\PistatsBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Vbv\PistatsBundle\Lib\Twitter;
use Symfony\Component\HttpFoundation\Request;
use Ob\HighchartsBundle\Highcharts\Highchart;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('VbvPistatsBundle:Main:index.html.twig', array('tempChart' => $this->getTempChart(), 'lightChart' => $this->getLightChart()));
    }

    private function getTempChart()
    {
        $unfilteredDataArray = $this->getTemperaturesArray();
        $data = array();
        foreach ($unfilteredDataArray as $dataArray) 
        {
            array_push($data, array($dataArray['time'] *1000 , $dataArray['temperature']));
        }
        $ob = new Highchart();
        $ob->chart->renderTo('tempChart');
        $ob->chart->type('spline');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => false
        ));
        $ob->title->text('Sensor: LM35');
        $ob->xAxis->title(array('text'  => "Tiempo"));
        $ob->xAxis->type('datetime'); 
        $ob->yAxis->title(array('text'  => "Temperatura"));
        $ob->series(array(array('name' => 'Temperatura', 'data' => $data)));
        return $ob;
    }
    
    public function getTemperaturesAction()
    {
        $tempsArray = $this->getTemperaturesArray();
		$return=array("success"=>true, "data"=>$tempsArray);
		$return=json_encode($return);
		return new Response($return, 200, array('Content-Type'=>'application/json'));
    }

    private function getTemperaturesArray(){
        $repo = $this->get('doctrine')->getManager('crocweb')->getRepository('VbvPistatsBundle:Temperature');
        $temps = $repo->findAll();
        $tempsArray = array();
        foreach ($temps as $temp) 
        {
            array_push($tempsArray, array('id' => $temp->getId(),'temperature' => $temp->getTemperature(), 'time' => $temp->getTime()));
        }
        return $tempsArray;   
    }

    private function getLightChart()
    {
        $unfilteredDataArray = $this->getLightsArray();
        $data = array();
        foreach ($unfilteredDataArray as $dataArray) 
        {
            array_push($data, array($dataArray['time'] *1000 , $dataArray['light']));
        }
        $ob = new Highchart();
        $ob->chart->renderTo('lightChart');
        $ob->chart->type('spline');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => false
        ));
        $ob->title->text('Sensor: Fotoresistor generico');
        $ob->xAxis->title(array('text'  => "Tiempo"));
        $ob->xAxis->type('datetime'); 
        $ob->yAxis->title(array('text'  => "Luminosidad"));
        $ob->series(array(array('name' => 'Luminosidad', 'data' => $data)));
        return $ob;
    }
    
    public function getLightsAction()
    {
        $lightsArray = $this->getlightsArray();
        $return=array("success"=>true, "data"=>$lightsArray);
        $return=json_encode($return);
        return new Response($return, 200, array('Content-Type'=>'application/json'));
    }

    private function getLightsArray(){
        $repo = $this->get('doctrine')->getManager('crocweb')->getRepository('VbvPistatsBundle:Light');
        $lights = $repo->findAll();
        $lightsArray = array();
        foreach ($lights as $light) 
        {
            array_push($lightsArray, array('id' => $light->getId(),'light' => $light->getLight(), 'time' => $light->getTime()));
        }
        return $lightsArray;   
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