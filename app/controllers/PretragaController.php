<?php

class PretragaController extends ControllerBase
{


     public function initialize()
    {
        $this->view->setTemplateAfter('main');
        Phalcon\Tag::setTitle('Pretraga');
        parent::initialize();
    }
    
        
    public function indexAction()
    {
        
    }
    
    public function getPackingListAction(){
        $this->view->disable();
        $sNumber = $_POST['sNumber'];
        $sCode = $_POST['sCode'];
        $rCode = $_POST['rCode'];
        $pListe = array();
        if($sCode!="" && $sNumber!="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND
                                                   packinglist.Sender_Code=:sCode: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'sCode'=>$sCode, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($sNumber=="" && $sCode!="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Sender_Code=:sCode: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sCode'=>$sCode, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         }
        }
        
        else if($sNumber=="" && $sCode=="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber!="" && $sCode=="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber:");
        $pLista = $query->execute(array('sNumber'=>$sNumber));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber=="" && $sCode!="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Sender_Code=:sCode:");
        $pLista = $query->execute(array('sCode'=>$sCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        else if($sNumber!="" && $sCode=="" && $rCode!=""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND packinglist.Receiver_Code=:rCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'rCode'=>$rCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
         else if($sNumber!="" && $sCode!="" && $rCode==""){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist WHERE packinglist.Shipment_Number=:sNumber: AND packinglist.Sender_Code=:sCode:");
        $pLista = $query->execute(array('sNumber'=>$sNumber, 'sCode'=>$sCode));
         
         foreach($pLista as $packet){
            $pListe[] = $packet;
         } 
        }
        
        if(count($pListe)==0){
            echo json_encode(null);
        }
        else{
        echo json_encode($pListe);
        }
    }
   

}

