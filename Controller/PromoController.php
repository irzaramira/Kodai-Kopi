<?php
require_once("../Service/PromoService.php");
require_once("../Model/Promo.php");
class PromoController{
	private $PromoService = NULL; 

	public function __construct()	
	{
		$this->PromoService = new PromoService();
	}
	
	public function insertPromo($name, $discount, $desc){
		
		return $this->PromoService->insertPromo($name, $discount, $desc);
    }
    
    public function getAllPromo(){
        $datas = $this->PromoService->getAllPromo();
        $promos = array();
        foreach($datas as $data){
            $Promo = new Promo();
            $Promo->name = $data['name'];
            $Promo->discount = $data['discount'];
            $Promo->description = $data['description'];
            array_push($promos, $Promo);
        }
        return $promos;
    
    }
    public function checkPromoExists($name, $discount){
        return $this->PromoService->checkPromoExists($name, $discount);
    }

    public function checkPromoUsed($email, $name, $discount){
        return $this->PromoService->checkPromoUsed($email,$name, $discount);
    }

    public function insertPromoUsed($email, $name, $discount){
        return $this->PromoService->insertPromoUsed($email,$name,$discount);
	}
}
?>