<?php
namespace ClassesTdd\Classes;


class Classes
{
	private $dataInvertida;

	public function inverterData($data)
	{
		if(empty($data)){
			return false;
		}

		if( strstr($data, ' ') ){

			$dataTemp1 = explode(' ', $data);
			$dataTemp = explode('/', $dataTemp1[0]);

			return $dataTemp[2] . '-' . $dataTemp[1] . '-' . $dataTemp[0] . ' ' . $dataTemp1[1];
		}

		$dataTemp = explode('/', $data);
		return $dataTemp[2] . '-' . $dataTemp[1] . '-' . $dataTemp[0];

	}
}