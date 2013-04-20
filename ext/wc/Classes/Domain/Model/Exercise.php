<?php
namespace tg\Wc\Domain\Model;

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
class Exercise extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * desc
	 *
	 * @var \string
	 */
	protected $desc;

	/**
	 * time
	 *
	 * @var \string
	 */
	protected $time;

	/**
	 * equipment
	 *
	 * @var \string
	 */
	protected $equipment;

	/**
	 * exerciseSet
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\ExerciseSet>
	 */
	protected $exerciseSet;

	/**
	 * __construct
	 *
	 * @return Exercise
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->exerciseSet = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the desc
	 *
	 * @return \string $desc
	 */
	public function getDesc() {
		return $this->desc;
	}

	/**
	 * Sets the desc
	 *
	 * @param \string $desc
	 * @return void
	 */
	public function setDesc($desc) {
		$this->desc = $desc;
	}

	/**
	 * Returns the time
	 *
	 * @return \string $time
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * Sets the time
	 *
	 * @param \string $time
	 * @return void
	 */
	public function setTime($time) {
		$this->time = $time;
	}

	/**
	 * Returns the equipment
	 *
	 * @return \string $equipment
	 */
	public function getEquipment() {
		return $this->equipment;
	}

	/**
	 * Sets the equipment
	 *
	 * @param \string $equipment
	 * @return void
	 */
	public function setEquipment($equipment) {
		$this->equipment = $equipment;
	}

	/**
	 * Adds a ExerciseSet
	 *
	 * @param \tg\Wc\Domain\Model\ExerciseSet $exerciseSet
	 * @return void
	 */
	public function addExerciseSet(\tg\Wc\Domain\Model\ExerciseSet $exerciseSet) {
		$this->exerciseSet->attach($exerciseSet);
	}

	/**
	 * Removes a ExerciseSet
	 *
	 * @param \tg\Wc\Domain\Model\ExerciseSet $exerciseSetToRemove The ExerciseSet to be removed
	 * @return void
	 */
	public function removeExerciseSet(\tg\Wc\Domain\Model\ExerciseSet $exerciseSetToRemove) {
		$this->exerciseSet->detach($exerciseSetToRemove);
	}

	/**
	 * Returns the exerciseSet
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\ExerciseSet> $exerciseSet
	 */
	public function getExerciseSet() {
		return $this->exerciseSet;
	}

	/**
	 * Sets the exerciseSet
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\ExerciseSet> $exerciseSet
	 * @return void
	 */
	public function setExerciseSet(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $exerciseSet) {
		$this->exerciseSet = $exerciseSet;
	}

}
?>