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
 * Test case for class \tg\Wc\Domain\Model\Meal.
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
class MealTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \tg\Wc\Domain\Model\Meal
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \tg\Wc\Domain\Model\Meal();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate() { }
	
	/**
	 * @test
	 */
	public function getPhotoReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPhotoForStringSetsPhoto() { 
		$this->fixture->setPhoto('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPhoto()
		);
	}
	
	/**
	 * @test
	 */
	public function getIngredientReturnsInitialValueForIngredient() { 
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getIngredient()
		);
	}

	/**
	 * @test
	 */
	public function setIngredientForObjectStorageContainingIngredientSetsIngredient() { 
		$ingredient = new \tg\Wc\Domain\Model\Ingredient();
		$objectStorageHoldingExactlyOneIngredient = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneIngredient->attach($ingredient);
		$this->fixture->setIngredient($objectStorageHoldingExactlyOneIngredient);

		$this->assertSame(
			$objectStorageHoldingExactlyOneIngredient,
			$this->fixture->getIngredient()
		);
	}
	
	/**
	 * @test
	 */
	public function addIngredientToObjectStorageHoldingIngredient() {
		$ingredient = new \tg\Wc\Domain\Model\Ingredient();
		$objectStorageHoldingExactlyOneIngredient = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$objectStorageHoldingExactlyOneIngredient->attach($ingredient);
		$this->fixture->addIngredient($ingredient);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneIngredient,
			$this->fixture->getIngredient()
		);
	}

	/**
	 * @test
	 */
	public function removeIngredientFromObjectStorageHoldingIngredient() {
		$ingredient = new \tg\Wc\Domain\Model\Ingredient();
		$localObjectStorage = new \TYPO3\CMS\Extbase\Persistence\Generic\ObjectStorage();
		$localObjectStorage->attach($ingredient);
		$localObjectStorage->detach($ingredient);
		$this->fixture->addIngredient($ingredient);
		$this->fixture->removeIngredient($ingredient);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getIngredient()
		);
	}
	
}
?>