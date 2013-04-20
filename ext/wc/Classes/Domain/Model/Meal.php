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
class Meal extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date;

	/**
	 * photo
	 *
	 * @var \string
	 */
	protected $photo;

	/**
	 * ingredient
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Ingredient>
	 */
	protected $ingredient;

	/**
	 * __construct
	 *
	 * @return Meal
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
		$this->ingredient = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
	 * Returns the photo
	 *
	 * @return \string $photo
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Sets the photo
	 *
	 * @param \string $photo
	 * @return void
	 */
	public function setPhoto($photo) {
		$this->photo = $photo;
	}

	/**
	 * Adds a Ingredient
	 *
	 * @param \tg\Wc\Domain\Model\Ingredient $ingredient
	 * @return void
	 */
	public function addIngredient(\tg\Wc\Domain\Model\Ingredient $ingredient) {
		$this->ingredient->attach($ingredient);
	}

	/**
	 * Removes a Ingredient
	 *
	 * @param \tg\Wc\Domain\Model\Ingredient $ingredientToRemove The Ingredient to be removed
	 * @return void
	 */
	public function removeIngredient(\tg\Wc\Domain\Model\Ingredient $ingredientToRemove) {
		$this->ingredient->detach($ingredientToRemove);
	}

	/**
	 * Returns the ingredient
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Ingredient> $ingredient
	 */
	public function getIngredient() {
		return $this->ingredient;
	}

	/**
	 * Sets the ingredient
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\tg\Wc\Domain\Model\Ingredient> $ingredient
	 * @return void
	 */
	public function setIngredient(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $ingredient) {
		$this->ingredient = $ingredient;
	}

}
?>