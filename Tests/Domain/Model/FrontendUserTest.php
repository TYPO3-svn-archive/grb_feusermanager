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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Testcase for class Tx_GrbFeusermanager_Domain_Model_FrontendUser.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage FE-User Manager
 * 
 * @author Juerg Langhard <langhard@greenbanana.ch>
 */
class Tx_GrbFeusermanager_Domain_Model_FrontendUserTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_GrbFeusermanager_Domain_Model_FrontendUser
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_GrbFeusermanager_Domain_Model_FrontendUser();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getUsernameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUsernameForStringSetsUsername() { 
		$this->fixture->setUsername('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUsername()
		);
	}
	
	/**
	 * @test
	 */
	public function getPasswordReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPasswordForStringSetsPassword() { 
		$this->fixture->setPassword('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPassword()
		);
	}
	
	/**
	 * @test
	 */
	public function getUsergroupReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setUsergroupForStringSetsUsergroup() { 
		$this->fixture->setUsergroup('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getUsergroup()
		);
	}
	
	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() { 
		$this->fixture->setFirstName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstName()
		);
	}
	
	/**
	 * @test
	 */
	public function getMiddleNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMiddleNameForStringSetsMiddleName() { 
		$this->fixture->setMiddleName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMiddleName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() { 
		$this->fixture->setLastName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastName()
		);
	}
	
	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() { 
		$this->fixture->setAddress('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAddress()
		);
	}
	
	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() { 
		$this->fixture->setTelephone('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTelephone()
		);
	}
	
	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax() { 
		$this->fixture->setFax('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFax()
		);
	}
	
	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() { 
		$this->fixture->setEmail('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getEmail()
		);
	}
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() { 
		$this->fixture->setZip('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getZip()
		);
	}
	
	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() { 
		$this->fixture->setCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() { 
		$this->fixture->setCountry('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCountry()
		);
	}
	
	/**
	 * @test
	 */
	public function getWwwReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWwwForStringSetsWww() { 
		$this->fixture->setWww('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWww()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCompany() { 
		$this->fixture->setCompany('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompany()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastloginReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastloginForStringSetsLastlogin() { 
		$this->fixture->setLastlogin('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastlogin()
		);
	}
	
	/**
	 * @test
	 */
	public function getIsOnlineReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setIsOnlineForStringSetsIsOnline() { 
		$this->fixture->setIsOnline('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getIsOnline()
		);
	}
	
	/**
	 * @test
	 */
	public function getLanguageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLanguageForStringSetsLanguage() { 
		$this->fixture->setLanguage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLanguage()
		);
	}
	
	/**
	 * @test
	 */
	public function getBirthdayReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setBirthdayForStringSetsBirthday() { 
		$this->fixture->setBirthday('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getBirthday()
		);
	}
	
	/**
	 * @test
	 */
	public function getNicknameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNicknameForStringSetsNickname() { 
		$this->fixture->setNickname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNickname()
		);
	}
	
	/**
	 * @test
	 */
	public function getProfessionalReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setProfessionalForStringSetsProfessional() { 
		$this->fixture->setProfessional('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getProfessional()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanyStreetReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyStreetForStringSetsCompanyStreet() { 
		$this->fixture->setCompanyStreet('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompanyStreet()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanyZipReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyZipForStringSetsCompanyZip() { 
		$this->fixture->setCompanyZip('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompanyZip()
		);
	}
	
	/**
	 * @test
	 */
	public function getCompanyCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCompanyCityForStringSetsCompanyCity() { 
		$this->fixture->setCompanyCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCompanyCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getWouldNewsletterReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getWouldNewsletter()
		);
	}

	/**
	 * @test
	 */
	public function setWouldNewsletterForBooleanSetsWouldNewsletter() { 
		$this->fixture->setWouldNewsletter(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getWouldNewsletter()
		);
	}
	
	/**
	 * @test
	 */
	public function getAgreesAgbReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getAgreesAgb()
		);
	}

	/**
	 * @test
	 */
	public function setAgreesAgbForBooleanSetsAgreesAgb() { 
		$this->fixture->setAgreesAgb(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getAgreesAgb()
		);
	}
	
}
?>