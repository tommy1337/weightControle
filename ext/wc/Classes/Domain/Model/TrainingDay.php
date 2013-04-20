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
class TrainingDay extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * exercise
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Exercise>
	 */
	protected $exercise;

	/**
	 * __construct
	 *
	 * @return TrainingDay
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
		$this->exercise = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the date
	 *
	 * @return \DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param \DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Adds a Exercise
	 *
	 * @param \tg\Wc\Domain\Model\Exercise $exercise
	 * @return void
	 */
	public function addExercise(\tg\Wc\Domain\Model\Exercise $exercise) {
		$this->exercise->attach($exercise);
	}

	/**
	 * Removes a Exercise
	 *
	 * @param \tg\Wc\Domain\Model\Exercise $exerciseToRemove The Exercise to be removed
	 * @return void
	 */
	public function removeExercise(\tg\Wc\Domain\Model\Exercise $exerciseToRemove) {
		$this->exercise->detach($exerciseToRemove);
	}

	/**
	 * Returns the exercise
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Exercise> $exercise
	 */
	public function getExercise() {
		return $this->exercise;
	}

	/**
	 * Sets the exercise
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Exercise> $exercise
	 * @return void
	 */
	public function setExercise(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $exercise) {
		$this->exercise = $exercise;
	}

}
?>