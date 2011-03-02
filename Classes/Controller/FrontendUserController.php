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
 * Controller for the FrontendUser object
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

 class Tx_GrbFeusermanager_Controller_FrontendUserController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * frontendUserRepository
	 *
	 * @var Tx_GrbFeusermanager_Domain_Repository_FrontendUserRepository
	 */
	protected $frontendUserRepository;

	/**
	 * Initializes the current action
	 *
	 * @return void
	 */
	protected function initializeAction() {
		$this->frontendUserRepository = t3lib_div::makeInstance('Tx_GrbFeusermanager_Domain_Repository_FrontendUserRepository');
	}

   	/**
	 * Display FrontendUsers
	 * @return string The rendered list view
	 */
	public function listNewAction() {
		$frontendUsers = $this->frontendUserRepository->findByPid($this->settings['pid']['new']);
		$this->view->assign('frontendUsers', $frontendUsers);
	}
	
   	/**
	 * Display FrontendUsers
	 * @return string The rendered list view
	 */
	public function listAcceptedAction() {
		$frontendUsers = $this->frontendUserRepository->findByPid($this->settings['pid']['accepted']);
		$this->view->assign('frontendUsers', $frontendUsers);
	}

   	/**
	 * Display FrontendUsers
	 * @return string The rendered list view
	 */
	public function listRejectedAction() {
		$frontendUsers = $this->frontendUserRepository->findByPid($this->settings['pid']['rejected']);
		$this->view->assign('frontendUsers', $frontendUsers);
	}

   	/**
	 * Display FrontendUsers
	 * @return string The rendered list view
	 */
	public function listActiveAction() {
		$frontendUsers = $this->frontendUserRepository->findByPid($this->settings['pid']['active']);
		$this->view->assign('frontendUsers', $frontendUsers);
	}	
	
 	/**
	 * Move a FrontendUsers to a new Page
	 * @param Tx_GrbFeusermanager_Domain_Model_FrontendUser $frontendUser the FrontendUser to display
	 * @param string $pid the Page-Id to move
	 * @param string $redirect the Action to redirect after the move
	 * @return string The rendered list view
	 * 
	 */
	public function moveFrontendUserToPidAction(Tx_GrbFeusermanager_Domain_Model_FrontendUser $frontendUser, $pid, $redirect='listNew') {
		$frontendUser->setPid($pid);
		$this->frontendUserRepository->update($frontendUser);
		$this->flashMessageContainer->add('Your FrontendUser was moved to PID: '.$pid);
		$this->redirect($redirect);
	}	
	
 	/**
	 * Move a FrontendUsers to a new Page
	 * @param string $fromPid the Page-Id where the fe_users are stored
	 * @param string $toPid the Page-Id to move
	 * @return string The rendered list view
	 * 
	 */
	public function moveAllFrontendUserToPidAction($fromPid, $toPid) {
		$frontendUsers = $this->frontendUserRepository->findByPid($fromPid);
		foreach ($frontendUsers as $frontendUser){
			$frontendUser->setPid($toPid);
			$this->frontendUserRepository->update($frontendUser);
		}
		$this->redirect('listAccepted');
	}		
	
    /**
	 * Export FrontendUsers
	 * @param string $export export
	 * @return string The rendered list view
	 */
	public function csvExportAction($export) {
		$frontendUsers = $this->frontendUserRepository->findByPid($this->settings['pid'][$export]);
	    $this->view->assign('frontendUsers', $frontendUsers);
		header('Content-Type: application/csv');
        header('Content-disposition: attachment; filename='.$export.'_websiteuser_'.date('j-M-Y').'.csv');
	}

}
?>