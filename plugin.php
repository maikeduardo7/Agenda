<?php
	function traduz_data_exibir($data)
	{
		if($data == "" || $data == "0000-00-00")
		{
			return "";
		}
		
		$dados = explode("-",$data);
		$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
		
		return $data_exibir;
	}	