<?php

namespace tg\Wc\Tests;
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
 * Test case for class \tg\Wc\Domain\Model\User.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Geweichtskontrolle
 *
 * @author Thomas Geyer <thomas.geyer.bsns@gmail.com>
 */
class UserTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \tg\Wc\Domain\Model\User
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \tg\Wc\Domain\Model\User();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFirstnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstnameForStringSetsFirstname() { 
		$this->fixture->setFirstname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstname()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastnameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastnameForStringSetsLastname() { 
		$this->fixture->setLastname('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastname()
		);
	}
	
	/**
	 * @test
	 */
	public function getDateOfBirthReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateOfBirthForDateTimeSetsDateOfBirth() { }
	
	/**
	 * @test
	 */
	public function getGenderReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getGender()
		);
	}

	/**
	 * @test
	 */
	public function setGenderForIntegerSetsGender() { 
		$this->fixture->setGender(12);

		$this->assertSame(
			12,
			$this->fixture->getGender()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrigPhotoReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrigPhotoForStringSetsOrigPhoto() { 
		$this->fixture->setOrigPhoto('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrigPhoto()
		);
	}
	
	/**
	 * @test
	 */
	public function getStartWeightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStartWeightForStringSetsStartWeight() { 
		$this->fixture->setStartWeight('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStartWeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getDesiredWeightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDesiredWeightForStringSetsDesiredWeight() { 
		$this->fixture->setDesiredWeight('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDesiredWeight()
		);
	}
	
	/**
	 * @test
	 */
	public function getWeightStepReturnsInitialValueForWeightStep() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getWeightStep()
		);
	}

	/**
	 * @test
	 */
	public function setWeightStepForObjectStorageContainingWeightStepSetsWeightStep() { 
		$weightStep = new \tg\Wc\Domain\Model\WeightStep();
		$objectStorageHoldingExactlyOneWeightStep = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWeightStep->attach($weightStep);
		$this->fixture->setWeightStep($objectStorageHoldingExactlyOneWeightStep);

		$this->assertSame(
			$objectStorageHoldingExactlyOneWeightStep,
			$this->fixture->getWeightStep()
		);
	}
	
	/**
	 * @test
	 */
	public function addWeightStepToObjectStorageHoldingWeightStep() {
		$weightStep = new \tg\Wc\Domain\Model\WeightStep();
		$objectStorageHoldingExactlyOneWeightStep = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneWeightStep->attach($weightStep);
		$this->fixture->addWeightStep($weightStep);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneWeightStep,
			$this->fixture->getWeightStep()
		);
	}

	/**
	 * @test
	 */
	public function removeWeightStepFromObjectStorageHoldingWeightStep() {
		$weightStep = new \tg\Wc\Domain\Model\WeightStep();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($weightStep);
		$localObjectStorage->detach($weightStep);
		$this->fixture->addWeightStep($weightStep);
		$this->fixture->removeWeightStep($weightStep);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getWeightStep()
		);
	}
	
	/**
	 * @test
	 */
	public function getMealReturnsInitialValueForMeal() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMeal()
		);
	}

	/**
	 * @test
	 */
	public function setMealForObjectStorageContainingMealSetsMeal() { 
		$meal = new \tg\Wc\Domain\Model\Meal();
		$objectStorageHoldingExactlyOneMeal = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMeal->attach($meal);
		$this->fixture->setMeal($objectStorageHoldingExactlyOneMeal);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMeal,
			$this->fixture->getMeal()
		);
	}
	
	/**
	 * @test
	 */
	public function addMealToObjectStorageHoldingMeal() {
		$meal = new \tg\Wc\Domain\Model\Meal();
		$objectStorageHoldingExactlyOneMeal = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneMeal->attach($meal);
		$this->fixture->addMeal($meal);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMeal,
			$this->fixture->getMeal()
		);
	}

	/**
	 * @test
	 */
	public function removeMealFromObjectStorageHoldingMeal() {
		$meal = new \tg\Wc\Domain\Model\Meal();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($meal);
		$localObjectStorage->detach($meal);
		$this->fixture->addMeal($meal);
		$this->fixture->removeMeal($meal);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMeal()
		);
	}
	
	/**
	 * @test
	 */
	public function getTrainingDayReturnsInitialValueForTrainingDay() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getTrainingDay()
		);
	}

	/**
	 * @test
	 */
	public function setTrainingDayForObjectStorageContainingTrainingDaySetsTrainingDay() { 
		$trainingDay = new \tg\Wc\Domain\Model\TrainingDay();
		$objectStorageHoldingExactlyOneTrainingDay = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTrainingDay->attach($trainingDay);
		$this->fixture->setTrainingDay($objectStorageHoldingExactlyOneTrainingDay);

		$this->assertSame(
			$objectStorageHoldingExactlyOneTrainingDay,
			$this->fixture->getTrainingDay()
		);
	}
	
	/**
	 * @test
	 */
	public function addTrainingDayToObjectStorageHoldingTrainingDay() {
		$trainingDay = new \tg\Wc\Domain\Model\TrainingDay();
		$objectStorageHoldingExactlyOneTrainingDay = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneTrainingDay->attach($trainingDay);
		$this->fixture->addTrainingDay($trainingDay);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneTrainingDay,
			$this->fixture->getTrainingDay()
		);
	}

	/**
	 * @test
	 */
	public function removeTrainingDayFromObjectStorageHoldingTrainingDay() {
		$trainingDay = new \tg\Wc\Domain\Model\TrainingDay();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($trainingDay);
		$localObjectStorage->detach($trainingDay);
		$this->fixture->addTrainingDay($trainingDay);
		$this->fixture->removeTrainingDay($trainingDay);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getTrainingDay()
		);
	}
	
}
?>