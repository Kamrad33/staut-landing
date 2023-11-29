<?php

namespace staut;

class B24Order
{
	private $queryUrl;
	private $queryData = [
		"fields" => [],
		"params" => []
	];

	private $errorText;

	public function __construct($url, $userId)
	{
		$this->queryUrl = $url;
		$this->queryData["fields"]["ASSIGNED_BY_ID"] = $userId;
		$this->queryData["params"]["REGISTER_SONET_EVENT"] = "Y"; // значение по-умолчанию, отключить можно через DontRegisterSonetEvent
	}

	public function SetName($name)
	{
		$this->queryData["fields"]["NAME"] = $name;

		if (!strlen($this->queryData["fields"]["TITLE"])) {
			$this->queryData["fields"]["TITLE"] = "Новый лид: $name";
		}
	}

    public function SetTitle($title)
	{
		$this->queryData["fields"]["TITLE"] = $title;
	}

	public function AddPhone($tel, $type = "MOBILE")
	{
		if (!is_array($this->queryData["fields"]["PHONE"])) {
			$this->queryData["fields"]["PHONE"] = [];
		}
		$this->queryData["fields"]["PHONE"][] = ["VALUE" => $tel, "VALUE_TYPE" => $type];
	}

	public function SetComment($msg)
	{
		$this->queryData["fields"]["COMMENT"] = $msg;
	}

	public function Send()
	{
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_SSL_VERIFYPEER => 0,
			CURLOPT_POST => 1,
			CURLOPT_HEADER => 0,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $this->queryUrl,
			CURLOPT_POSTFIELDS => http_build_query($this->queryData),
		]);

		$result = curl_exec($curl);
		curl_close($curl);

		if ($result === false) {
			$this->errorText = "curl_exec has returned false";
			return false;
		}

		$result = json_decode($result, true);

		if (array_key_exists('error', $result)) {
			$this->errorText = "B24 has returned error: " . $result['error_description'];
			return false;
		}
		return true;
	}

	public function GetError()
	{
		return $this->errorText;
	}

	public function GetQueryData()
	{
		return $this->queryData;
	}
}