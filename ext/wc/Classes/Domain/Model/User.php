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
class User extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * firstname
	 *
	 * @var \string
	 */
	protected $firstname;

	/**
	 * lastname
	 *
	 * @var \string
	 */
	protected $lastname;

	/**
	 * dateOfBirth
	 *
	 * @var \DateTime
	 */
	protected $dateOfBirth;

	/**
	 * gender
	 *
	 * @var \integer
	 */
	protected $gender;

	/**
	 * origPhoto
	 *
	 * @var \string
	 */
	protected $origPhoto;

	/**
	 * startWeight
	 *
	 * @var \string
	 */
	protected $startWeight;

	/**
	 * desiredWeight
	 *
	 * @var \string
	 */
	protected $desiredWeight;

	/**
	 * weightStep
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\WeightStep>
	 */
	protected $weightStep;

	/**
	 * meal
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Meal>
	 */
	protected $meal;

	/**
	 * trainingDay
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\TrainingDay>
	 */
	protected $trainingDay;

	/**
	 * __construct
	 *
	 * @return User
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
		$this->weightStep = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->meal = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		
		$this->trainingDay = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the firstname
	 *
	 * @return \string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Sets the firstname
	 *
	 * @param \string $firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * Returns the lastname
	 *
	 * @return \string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Sets the lastname
	 *
	 * @param \string $lastname
	 * @return void
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * Returns the dateOfBirth
	 *
	 * @return \DateTime $dateOfBirth
	 */
	public function getDateOfBirth() {
		return $this->dateOfBirth;
	}

	/**
	 * Sets the dateOfBirth
	 *
	 * @param \DateTime $dateOfBirth
	 * @return void
	 */
	public function setDateOfBirth($dateOfBirth) {
		$this->dateOfBirth = $dateOfBirth;
	}

	/**
	 * Returns the gender
	 *
	 * @return \integer $gender
	 */
	public function getGender() {
		$val = "";
		if($this->gender == 0)
			$val = 'Männlich';
		else
			$val = 'Weiblich';
		return $val;
	}

	/**
	 * Sets the gender
	 *
	 * @param \integer $gender
	 * @return void
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

	/**
	 * Returns the origPhoto
	 *
	 * @return \string $origPhoto
	 */
	public function getOrigPhoto() {
		return $this->origPhoto;
	}

	/**
	 * Sets the origPhoto
	 *
	 * @param \string $origPhoto
	 * @return void
	 */
	public function setOrigPhoto($origPhoto) {
		$this->origPhoto = $origPhoto;
	}

	/**
	 * Returns the startWeight
	 *
	 * @return \string $startWeight
	 */
	public function getStartWeight() {
		return $this->startWeight;
	}

	/**
	 * Sets the startWeight
	 *
	 * @param \string $startWeight
	 * @return void
	 */
	public function setStartWeight($startWeight) {
		$this->startWeight = $startWeight;
	}

	/**
	 * Returns the desiredWeight
	 *
	 * @return \string $desiredWeight
	 */
	public function getDesiredWeight() {
		return $this->desiredWeight;
	}

	/**
	 * Sets the desiredWeight
	 *
	 * @param \string $desiredWeight
	 * @return void
	 */
	public function setDesiredWeight($desiredWeight) {
		$this->desiredWeight = $desiredWeight;
	}

	/**
	 * Adds a WeightStep
	 *
	 * @param \tg\Wc\Domain\Model\WeightStep $weightStep
	 * @return void
	 */
	public function addWeightStep(\tg\Wc\Domain\Model\WeightStep $weightStep) {
		$this->weightStep->attach($weightStep);
	}

	/**
	 * Removes a WeightStep
	 *
	 * @param \tg\Wc\Domain\Model\WeightStep $weightStepToRemove The WeightStep to be removed
	 * @return void
	 */
	public function removeWeightStep(\tg\Wc\Domain\Model\WeightStep $weightStepToRemove) {
		$this->weightStep->detach($weightStepToRemove);
	}

	/**
	 * Returns the weightStep
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\WeightStep> $weightStep
	 */
	public function getWeightStep() {
		return $this->weightStep;
	}

	/**
	 * Sets the weightStep
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\WeightStep> $weightStep
	 * @return void
	 */
	public function setWeightStep(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $weightStep) {
		$this->weightStep = $weightStep;
	}

	/**
	 * Adds a Meal
	 *
	 * @param \tg\Wc\Domain\Model\Meal $meal
	 * @return void
	 */
	public function addMeal(\tg\Wc\Domain\Model\Meal $meal) {
		$this->meal->attach($meal);
	}

	/**
	 * Removes a Meal
	 *
	 * @param \tg\Wc\Domain\Model\Meal $mealToRemove The Meal to be removed
	 * @return void
	 */
	public function removeMeal(\tg\Wc\Domain\Model\Meal $mealToRemove) {
		$this->meal->detach($mealToRemove);
	}

	/**
	 * Returns the meal
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Meal> $meal
	 */
	public function getMeal() {
		return $this->meal;
	}

	/**
	 * Sets the meal
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Meal> $meal
	 * @return void
	 */
	public function setMeal(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $meal) {
		$this->meal = $meal;
	}

	/**
	 * Adds a TrainingDay
	 *
	 * @param \tg\Wc\Domain\Model\TrainingDay $trainingDay
	 * @return void
	 */
	public function addTrainingDay(\tg\Wc\Domain\Model\TrainingDay $trainingDay) {
		$this->trainingDay->attach($trainingDay);
	}

	/**
	 * Removes a TrainingDay
	 *
	 * @param \tg\Wc\Domain\Model\TrainingDay $trainingDayToRemove The TrainingDay to be removed
	 * @return void
	 */
	public function removeTrainingDay(\tg\Wc\Domain\Model\TrainingDay $trainingDayToRemove) {
		$this->trainingDay->detach($trainingDayToRemove);
	}

	/**
	 * Returns the trainingDay
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\TrainingDay> $trainingDay
	 */
	public function getTrainingDay() {
		return $this->trainingDay;
	}

	/**
	 * Sets the trainingDay
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\TrainingDay> $trainingDay
	 * @return void
	 */
	public function setTrainingDay(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $trainingDay) {
		$this->trainingDay = $trainingDay;
	}

	/**
	 * Returns the complete Name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->firstname . ' ' . $this->lastname;
	}
	
	/**
	 * Returns the complete Name
	 *
	 * @return intager
	 */
	public function getAge() {
		return intval((time() - $this->dateOfBirth->getTimestamp()) / (3600 * 24 * 365));
	}
	
}
?>