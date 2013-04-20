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
 * Test case for class \tg\Wc\Domain\Model\ExerciseSet.
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
class ExerciseSetTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \tg\Wc\Domain\Model\ExerciseSet
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \tg\Wc\Domain\Model\ExerciseSet();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTimesReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTimesForStringSetsTimes() { 
		$this->fixture->setTimes('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTimes()
		);
	}
	
	/**
	 * @test
	 */
	public function getWeightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setWeightForStringSetsWeight() { 
		$this->fixture->setWeight('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getWeight()
		);
	}
	
}
?>