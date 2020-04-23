<?php

/**
 * 请求入参
 * @author auto create
 */
class TaskCreate
{
	
	/** 
	 * 任务所属项目(虚拟企业），基于项目空间的项目
	 **/
	public $corp_id;
	
	/** 
	 * 创建者id, 传staffId（工号）
	 **/
	public $creator_userid;
	
	/** 
	 * 任务描述
	 **/
	public $description;
	
	/** 
	 * 执行者id, 传staffId（工号）
	 **/
	public $executor_userid;
	
	/** 
	 * 任务的扩展字段
	 **/
	public $extension;
	
	/** 
	 * 任务实际完成时间
	 **/
	public $finish_date;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 是否归档
	 **/
	public $is_archived;
	
	/** 
	 * 是否放入回收站
	 **/
	public $is_recycled;
	
	/** 
	 * 更新者id, 传staffId（工号）
	 **/
	public $modifier_userid;
	
	/** 
	 * 父任务id
	 **/
	public $parent_id;
	
	/** 
	 * 任务计划完成时间
	 **/
	public $plan_finish_date;
	
	/** 
	 * 任务计划开始时间
	 **/
	public $plan_start_date;
	
	/** 
	 * 优先级, 较低:10, 普通:20, 紧急:30, 非常紧急:40
	 **/
	public $priority;
	
	/** 
	 * 此字段用于数据迁移的场景，表示任务在源系统中的唯一ID，ISV接入时必填，用于跳转至各自的任务详情页
	 **/
	public $source_id;
	
	/** 
	 * 任务实际开始日期
	 **/
	public $start_date;
	
	/** 
	 * 状态id，工作流状态, 可以为空
	 **/
	public $status_id;
	
	/** 
	 * 状态阶段: 开始阶段(0)，进行阶段(1)，完成阶段(2)
	 **/
	public $status_stage;
	
	/** 
	 * 任务标题
	 **/
	public $subject;
	
	/** 
	 * 任务类型分类:// 任务 TASK("task"),     // 需求     REQ("req"),     // 缺陷     BUG("bug"),     // 风险     RISK("risk"),     // 工作项     WORKITEM("workitem")
	 **/
	public $task_type_category;
	
	/** 
	 * 任务类型id，任务类型，可以不传
	 **/
	public $task_type_id;
	
	/** 
	 * 任务参与者列表, 传staffId（工号）
	 **/
	public $tracker_userids;	
}
?>