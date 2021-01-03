<?php
require_once("../Service/PromoService.php");
require_once("../Model/Promo.php");
class PromoController{
	private $PromoService = NULL; 

	public function __construct()	
	{
		$this->PromoService = new PromoService();
	}
	
	public function insertPromo($name, $discount, $desc, $pic){
		
		return $this->PromoService->insertPromo($name, $discount, $desc, $pic);
    }
    
    public function getAllPromo(){
        $datas = $this->PromoService->getAllPromo();
        $promos = array();
        foreach($datas as $data){
            $Promo = new Promo();
            $Promo->name = $data['name'];
            $Promo->discount = $data['discount'];
            $Promo->description = $data['description'];
            $Promo->pic = $data['pic'];
            array_push($promos, $Promo);
        }
        return $promos;
    
    }

}
?>