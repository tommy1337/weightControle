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
class ExerciseSet extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * times
	 *
	 * @var \string
	 */
	protected $times;

	/**
	 * weight
	 *
	 * @var \string
	 */
	protected $weight;

	/**
	 * Returns the times
	 *
	 * @return \string $times
	 */
	public function getTimes() {
		return $this->times;
	}

	/**
	 * Sets the times
	 *
	 * @param \string $times
	 * @return void
	 */
	public function setTimes($times) {
		$this->times = $times;
	}

	/**
	 * Returns the weight
	 *
	 * @return \string $weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Sets the weight
	 *
	 * @param \string $weight
	 * @return void
	 */
	public function setWeight($weight) {
		$this->weight = $weight;
	}

}
?>