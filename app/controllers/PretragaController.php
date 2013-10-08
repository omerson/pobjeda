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
    
    public function onakoAction()
    {
    
    }
    
    private function getLists(){
        $query = $this->modelsManager->createQuery("SELECT * FROM packinglist");
        $pLista = $query->execute();
        return $pLista;
    }
    
    private function getPalete(){
        $query = $this->modelsManager->createQuery("SELECT * FROM palete");
        $palete = $query->execute();
        return $palete;
    }
    
    public function getShipmentNumberAction(){
        $this->view->disable();
        $sNumbers = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        else{
            foreach($pLista as $p){
                $sNumbers[]= $p->Shipment_Number;
            }
        }
        echo json_encode($sNumbers);
    }
    
    public function getSenderCodeAction(){
        $this->view->disable();
        $sCodes = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        foreach($pLista as $p){
            $sCodes[] = $p->Sender_Code;
        }
      
        echo json_encode($sCodes);
    }
    
    public function getReceiverCodeAction(){
        $this->view->disable();
        $rCodes = array();
        $pLista = $this->getLists();
        if(count($pLista)==0){
            return null;
        }
        foreach($pLista as $p){
            $rCodes[] = $p->Receiver_Code;
        }
      
        echo json_encode($rCodes);
    }
    
    
    public function getGS1CodeAction(){
        $this->view->disable();
        $gsCodes = array();
        $palete = $this->getPalete();
        if(count($palete)==0){
            return null;
        }
        foreach($palete as $p){
            $gsCodes[] = $p->GS1_Code;
        }
        echo json_encode($gsCodes);
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
    
    //funkcija za dobavljanje paleta
    public function getPaleteAction(){
        $this->view->disable();
        $gsCode = $_POST['gsCode'];
        $iType = $_POST['iType'];
        $palete = array();
        if($gsCode!="" && $iType!=""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.GS1_Code=:gsCode: AND palete.Item_Type=:iType:");
            $palet = $query->execute(array('gsCode'=>$gsCode, 'iType'=>$iType));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        else if($gsCode!="" && $iType==""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.GS1_Code=:gsCode:");
            $palet = $query->execute(array('gsCode'=>$gsCode));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        else if($gsCode=="" && $iType!=""){
            $query = $this->modelsManager->createQuery("SELECT * FROM palete WHERE palete.Item_Type=:iType:");
            $palet = $query->execute(array('iType'=>$iType));
            foreach($palet as $p){
            $palete[]= $p;
            }
        }
        if(count($palete)==0){
            return null;
        }
        else{
        echo json_encode($palete);
        }
    }
    
    public function getArtupalsForPaleteAction(){
        $this->view->disable();
        $idPalete = $_POST["idPalete"];
        $query = $this->modelsManager->createQuery("SELECT * FROM artupal WHERE artupal.Palete=:palete:");
        $palet = $query->execute(array('palete'=>$idPalete));
        if(count($palet)==0){
            return null;
        }
        else{
            $artupali = array();
            foreach($palet as $o){
                $artupali[]=$o;
            }
            echo json_encode($artupali);
        }
    }
   

}

