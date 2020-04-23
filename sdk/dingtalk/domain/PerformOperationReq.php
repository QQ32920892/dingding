<?php

/**
 * 工序请求
 * @author auto create
 */
class PerformOperationReq
{
	
	/** 
	 * 上下文
	 **/
	public $context;
	
	/** 
	 * 设备id
	 **/
	public $device_ids;
	
	/** 
	 * flow版本
	 **/
	public $flow_version;
	
	/** 
	 * 工序类型
	 **/
	public $operation_type;
	
	/** 
	 * 工序唯一id
	 **/
	public $operation_uid;
	
	/** 
	 * 执行状态
	 **/
	public $perform_status;
	
	/** 
	 * 优先级
	 **/
	public $priority;
	
	/** 
	 * 工序类型码
	 **/
	public $process_type_code;
	
	/** 
	 * 工段
	 **/
	public $section_code;
	
	/** 
	 * 工号
	 **/
	public $work_nos;
	
	/** 
	 * 工作站
	 **/
	public $workstation_code;	
}
?>