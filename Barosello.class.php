<?php

class Barosello {
	
	public function __construct(){}
		
	private function execute($number, $couple){
		if($number == 0) return 0;
		$res = $number;
		
		foreach($couple as $module => $custom_string){
			$res = $this->numberToString($res, $number, $module, $custom_string);
		}
		
		return $res;
	}
	
	private function numberToString($res, $number, $module, $custom_string){
		if(!($number % $module)){
			 $res != $number ? $res .= $custom_string : $res = $custom_string;
			 return $res;
		} else {
			return $number != $res ? $res : $number;
		}
	}
	
	public function standardOutput($rules, $num_max, $separetor, $filter_fuction = null) {
		$elements = $this->getElements($rules, $num_max, $filter_fuction);
		$output_standard =  implode($separetor, $elements);
		echo $output_standard;
	}
	
	public function getElements($rules, $num_max, $filter_fuction = null) {
		$elements = array();
		for($i=0; $i <= $num_max; $i++){
			$elements[] = $this->execute($i, $rules);
		}
		
		if($filter_fuction != null){
			$elements = array_filter($elements,$filter_fuction);
		}
		
		return $elements;
	}
	

	public function consoleOutput($rules, $num_max, $func_map1, $func_map2, $filter_fuction = null) {
		
		$elements = $this->getElements($rules, $num_max, $filter_fuction);
		$str_array = array_map($func_map1, $elements);
		$str_console = implode(", ", $str_array);

		$str_array_style = array_map($func_map2, $elements);
		$str_console_style = implode(",", $str_array_style);

		return '<script type="text/javascript">console.log("'.$str_console.'", '.$str_console_style.');</script>';

	}		
			
}

?>
