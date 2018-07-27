<?php

namespace AppBundle\Service;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdherentService
{
	public $file = "file_csv.csv";
	public $sep = ';';
	public $data = [];
	public $fields = [];


	public function __construct(){
		$this->mapCsv();
	}

	public function getAdherentById($id)
	{
		foreach($this->data as $data){
			if($data['identifiant'] == $id){
				return $data;
			}
		}
		return "Aucun adhérent ne correspond à votre demande  identifiant introuvable dans le fichier csv!!";				
	}

	public function getAdherents()
	{
		if(file_exists($this->file)){
			if(count($this->data)){
				return ['count' => count($this->data), 'data' => $this->data];
			}else{
				return " Aucun adhérent n’est présent ";						
			}	
		}
		throw new NotFoundHttpException('Le fichier d’entrée est introuvable dans votre rep de travail');		
	}



	private function mapCsv() {
		$i = 0;
		$handle = @fopen($this->file, "r");
		if ($handle) {
		    while (($row = fgetcsv($handle, 4096)) !== false) {
		        if (empty($this->fields)) {
		            $this->fields = explode($this->sep, $row[0]);
		            //dump($this->fields); exit;
		            continue;
		        }
		        foreach ($row as $k=>$value) {
		        	//dump($value); exit;
		        	$data = explode($this->sep, $value);
		        	foreach($this->fields as $key => $field){
		        		$this->data[$i][$field] = $data[$key];	
		        	}
		            
		        }
		        $i++;
		    }
		    if (!feof($handle)) {
		        echo "Error: unexpected fgets() fail\n";
		    }
		    fclose($handle);
		}



		usort($this->data, function($a, $b){
		    return strcmp($a["nom"].$a["prenom"], $b["nom"].$b["prenom"]);
		});
	}
}