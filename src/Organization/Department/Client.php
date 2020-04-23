<?php

namespace Supen\DingDing\Organization\Departmenrt;

use Supen\DingDing\DingDingClient;

class Client extends DingDingClient
{
    /**
     * Undocumented function
     * api: https://ding-doc.dingtalk.com/doc#/serverapi2/dubakq/5e0da2d3
     * 
     * @param integer $parentId 父部门ID
     * @param string $name 部门名称
     * @param boolean $outerDeptOnlySelf 是否只能看到所在部门及下级部门通讯录
     * @param boolean $createDeptGroup 是否创建一个关联此部门的企业群
     * @param boolean $deptHiding 是否隐藏部门
     * @param boolean $outerDept 是否本部门的员工仅可见员工自己, 为true时，本部门员工默认只能看到员工自己
     * @return array
     */
    public function create(int $parentId, string $name, bool $outerDeptOnlySelf = true,bool $createDeptGroup = false,bool $deptHiding = false,bool $outerDept = true)
    {
        $requestService = new \OapiDepartmentCreateRequest();
        $requestService->setParentid($parentId);
        $requestService->setName($name);
        $requestService->setOuterDeptOnlySelf($outerDeptOnlySelf);
        $requestService->setCreateDeptGroup($createDeptGroup);
        $requestService->setDeptHiding($deptHiding);
        $requestService->setOuterDept($outerDept);

        return $this->execute($requestService);
    }

    /**
     * 删除部门
     *
     * @param integer $departmentId 部门ID
     * @return array
     */
    public function delete(int $departmentId)
    {
        $requestService = new \OapiDepartmentDeleteRequest();
        $requestService->setId($departmentId);

        return $this->execute($requestService);
    }

    /**
     * 获取部门信息
     *
     * @param integer $departmentId 部门ID
     * @return array
     */
    public function get(int $departmentId)
    {
        $requestService = new \OapiDepartmentGetRequest();
        $requestService->setId($departmentId);

        return $this->execute($requestService);
    }

    /**
     * 获取部门列表
     *
     * @param integer $departmentId
     * @param boolean $fetch_child
     * @return array
     */
    public function list(int $departmentId, bool $fetch_child = false)
    {
        $requestService = new \OapiDepartmentListRequest();
        $requestService->setFetchChild($fetch_child);
        $requestService->setId($departmentId);

        return $this->execute($requestService);
    }

    /**
     * 获取部门下的子部门ID列表
     *
     * @param integer $departmentId
     * @return array
     */
    public function list_ids(int $departmentId)
    {
        $requestService = new \OapiDepartmentListIdsRequest();
        $requestService->setId($departmentId);

        return $this->execute($requestService);
    }

    /**
     * 修改部门信息
     *
     * @param integer $departmentId 部门ID
     * @param integer $parentId 父部门ID
     * @param string $name 部门名称
     * @param boolean $outerDeptOnlySelf 是否只能看到所在部门及下级部门通讯录
     * @param boolean $createDeptGroup 是否创建一个关联此部门的企业群
     * @param boolean $deptHiding 是否隐藏部门
     * @param boolean $outerDept 是否本部门的员工仅可见员工自己, 为true时，本部门员工默认只能看到员工自己
     * @return array
     */
    public function update(int $departmentId, int $parentId, string $name, bool $outerDeptOnlySelf = true,bool $createDeptGroup = false,bool $deptHiding = false,bool $outerDept = true)
    {
        $requestService = new \OapiDepartmentUpdateRequest();
        $requestService->setParentid($parentId);
        $requestService->setId($departmentId);
        $requestService->setName($name);
        $requestService->setOuterDeptOnlySelf($outerDeptOnlySelf);
        $requestService->setCreateDeptGroup($createDeptGroup);
        $requestService->setDeptHiding($deptHiding);
        $requestService->setOuterDept($outerDept);

        return $this->execute($requestService);
    }
}
