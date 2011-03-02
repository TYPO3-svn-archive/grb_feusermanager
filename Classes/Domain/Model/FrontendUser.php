<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Juerg Langhard <langhard@greenbanana.ch>, GreenBanana GmbH - www.greenbanana.ch
*  	
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * FrontendUser
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

 class Tx_GrbFeusermanager_Domain_Model_FrontendUser extends Tx_Extbase_Domain_Model_FrontendUser {

	/**
	 * pid
	 *
	 * @var string $pid
	 */
	protected $pid;
	
	
	/**
	 * lastlogin
	 *
	 * @var DateTime $lastlogin
	 */
	protected $lastlogin;	
	

	/**
	 * language
	 *
	 * @var string
	 */
	protected $language;

	/**
	 * birthday
	 *
	 * @var string
	 */
	protected $birthday;

	/**
	 * nickname
	 *
	 * @var string
	 */
	protected $nickname;

	/**
	 * professional
	 *
	 * @var string
	 */
	protected $professional;

	/**
	 * companyStreet
	 *
	 * @var string
	 */
	protected $companyStreet;

	/**
	 * companyZip
	 *
	 * @var string
	 */
	protected $companyZip;

	/**
	 * companyCity
	 *
	 * @var string
	 */
	protected $companyCity;

	/**
	 * wouldNewsletter
	 *
	 * @var string
	 */
	protected $wouldNewsletter;

	/**
	 * agreesAgb
	 *
	 * @var string
	 */
	protected $agreesAgb;

  	/**
	 * Getter for pid
	 *
	 * @return int pid
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * Setter for pid
	 *
	 * @param string $pid pid
	 * @return void
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}
	
  	/**
	 * Getter for lastlogin
	 *
	 * @return int lastlogin
	 */
	public function getLastlogin() {
		return $this->lastlogin;
	}

	/**
	 * Setter for lastlogin
	 *
	 * @param int $lastlogin lastlogin
	 * @return void
	 */
	public function setLastlogin($lastlogin) {
		$this->lastlogin = $lastlogin;
	}	

	/**
	 * Returns the language
	 *
	 * @return string $language
	 */
	public function getLanguage() {
		return $this->language;
	}

	/**
	 * Sets the language
	 *
	 * @param string $language
	 * @return void
	 */
	public function setLanguage($language) {
		$this->language = $language;
	}

	/**
	 * Returns the birthday
	 *
	 * @return string $birthday
	 */
	public function getBirthday() {
		return $this->birthday;
	}

	/**
	 * Sets the birthday
	 *
	 * @param string $birthday
	 * @return void
	 */
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
	}

	/**
	 * Returns the nickname
	 *
	 * @return string $nickname
	 */
	public function getNickname() {
		return $this->nickname;
	}

	/**
	 * Sets the nickname
	 *
	 * @param string $nickname
	 * @return void
	 */
	public function setNickname($nickname) {
		$this->nickname = $nickname;
	}

	/**
	 * Returns the professional
	 *
	 * @return string $professional
	 */
	public function getProfessional() {
		return $this->professional;
	}

	/**
	 * Sets the professional
	 *
	 * @param string $professional
	 * @return void
	 */
	public function setProfessional($professional) {
		$this->professional = $professional;
	}

	/**
	 * Returns the companyStreet
	 *
	 * @return string $companyStreet
	 */
	public function getCompanyStreet() {
		return $this->companyStreet;
	}

	/**
	 * Sets the companyStreet
	 *
	 * @param string $companyStreet
	 * @return void
	 */
	public function setCompanyStreet($companyStreet) {
		$this->companyStreet = $companyStreet;
	}

	/**
	 * Returns the companyZip
	 *
	 * @return string $companyZip
	 */
	public function getCompanyZip() {
		return $this->companyZip;
	}

	/**
	 * Sets the companyZip
	 *
	 * @param string $companyZip
	 * @return void
	 */
	public function setCompanyZip($companyZip) {
		$this->companyZip = $companyZip;
	}

	/**
	 * Returns the companyCity
	 *
	 * @return string $companyCity
	 */
	public function getCompanyCity() {
		return $this->companyCity;
	}

	/**
	 * Sets the companyCity
	 *
	 * @param string $companyCity
	 * @return void
	 */
	public function setCompanyCity($companyCity) {
		$this->companyCity = $companyCity;
	}

	/**
	 * Returns the wouldNewsletter
	 *
	 * @return string $wouldNewsletter
	 */
	public function getWouldNewsletter() {
		return $this->wouldNewsletter;
	}

	/**
	 * Sets the wouldNewsletter
	 *
	 * @param string $wouldNewsletter
	 * @return void
	 */
	public function setWouldNewsletter($wouldNewsletter) {
		$this->wouldNewsletter = $wouldNewsletter;
	}

	/**
	 * Returns the agreesAgb
	 *
	 * @return string $agreesAgb
	 */
	public function getAgreesAgb() {
		return $this->agreesAgb;
	}

	/**
	 * Sets the agreesAgb
	 *
	 * @param string $agreesAgb
	 * @return void
	 */
	public function setAgreesAgb($agreesAgb) {
		$this->agreesAgb = $agreesAgb;
	}

}
?>