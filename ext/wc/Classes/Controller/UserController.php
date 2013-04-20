<?php
namespace tg\Wc\Controller;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Thomas Geyer <thomas.geyer.bsns@gmail.com>
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
 *
 *
 * @package wc
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class UserController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var tg\Wc\Domain\Repository\UserRepository
	 * @inject
	 */
	protected $userRepository;
	
	/**
	 * @var tg\Wc\Domain\Repository\WeightStepRepository
	 * @inject
	 */
	protected $weightStepRepository;
	
	
	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$users = $this->userRepository->findAll();
		$this->view->assign('users', $users);
		$this->view->assign('detailPid', $this->settings['detailPid']);
	}

	/**
	 * action show
	 *
	 * @param \tg\Wc\Domain\Model\User $user
	 * @return void
	 */
	public function showAction(\tg\Wc\Domain\Model\User $user) {
		$this->view->assign('user', $user);
	}

}
?>