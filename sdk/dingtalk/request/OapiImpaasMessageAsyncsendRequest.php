<?php
/**
 * dingtalk API: dingtalk.oapi.impaas.message.asyncsend request
 * 
 * @author auto create
 * @since 1.0, 2019.07.01
 */
class OapiImpaasMessageAsyncsendRequest
{
	/** 
	 * 发送消息的结构
	 **/
	private $request;
	
	private $apiParas = array();
	
	public function setRequest($request)
	{
		$this->request = $request;
		$this->apiParas["request"] = $request;
	}

	public function getRequest()
	{
		return $this->request;
	}

	public function getApiMethodName()
	{
		return "dingtalk.oapi.impaas.message.asyncsend";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
