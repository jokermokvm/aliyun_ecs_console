<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Ecs\Request\V20140526;

class ImportImageRequest extends \RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Ecs", "2014-05-26", "ImportImage");
	}

	private  $diskDeviceMapping;

	private  $ownerId;

	private  $resourceOwnerAccount;

	private  $resourceOwnerId;

	private  $imageName;

	private  $description;

	private  $architecture;

	private  $oSType;

	private  $platform;

	private  $roleName;

	public function getDiskDeviceMapping() {
		return $this->diskDeviceMapping;
	}

	public function setDiskDeviceMapping($diskDeviceMapping) {
		$this->diskDeviceMapping = $diskDeviceMapping;
		$this->queryParameters["DiskDeviceMapping"]=$diskDeviceMapping;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getImageName() {
		return $this->imageName;
	}

	public function setImageName($imageName) {
		$this->imageName = $imageName;
		$this->queryParameters["ImageName"]=$imageName;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
		$this->queryParameters["Description"]=$description;
	}

	public function getArchitecture() {
		return $this->architecture;
	}

	public function setArchitecture($architecture) {
		$this->architecture = $architecture;
		$this->queryParameters["Architecture"]=$architecture;
	}

	public function getOSType() {
		return $this->oSType;
	}

	public function setOSType($oSType) {
		$this->oSType = $oSType;
		$this->queryParameters["OSType"]=$oSType;
	}

	public function getPlatform() {
		return $this->platform;
	}

	public function setPlatform($platform) {
		$this->platform = $platform;
		$this->queryParameters["Platform"]=$platform;
	}

	public function getRoleName() {
		return $this->roleName;
	}

	public function setRoleName($roleName) {
		$this->roleName = $roleName;
		$this->queryParameters["RoleName"]=$roleName;
	}
	
}