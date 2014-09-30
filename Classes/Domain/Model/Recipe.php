<?php
namespace Reclette\RacletteRecipe\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
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
 * Recipe
 */
class Recipe extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	const RATE_NUMBER = 5;

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * portions
	 *
	 * @var string
	 */
	protected $portions = '';

	/**
	 * ingredients
	 *
	 * @var string
	 */
	protected $ingredients = '';

	/**
	 * preparation
	 *
	 * @var string
	 */
	protected $preparation = '';

	/**
	 * nutrition
	 *
	 * @var string
	 */
	protected $nutrition = '';

	/**
	 * imageBig
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $imageBig = NULL;

	/**
	 * imageThumb
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $imageThumb = NULL;

	/**
	 * recipeScore
	 *
	 * @var integer
	 */
	protected $recipeScore = 0;

	/**
	 * rateHit
	 *
	 * @var integer
	 */
	protected $rateHit = 0;

	/**
	 * date
	 *
	 * @var \DateTime
	 */
	protected $date = NULL;

	/**
	 * showOnStartPage
	 *
	 * @var boolean
	 */
	protected $showOnStartPage = FALSE;

	/**
	 * author
	 *
	 * @var string
	 */
	protected $author = '';

	/**
	 * categoryPreparation
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryPreparation>
	 */
	protected $categoryPreparation = NULL;

	/**
	 * categoryIngredients
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryIngredients>
	 */
	protected $categoryIngredients = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->categoryPreparation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->categoryIngredients = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the portions
	 *
	 * @return string $portions
	 */
	public function getPortions() {
		return $this->portions;
	}

	/**
	 * Sets the portions
	 *
	 * @param string $portions
	 * @return void
	 */
	public function setPortions($portions) {
		$this->portions = $portions;
	}

	/**
	 * Returns the ingredients
	 *
	 * @return string $ingredients
	 */
	public function getIngredients() {
		return $this->ingredients;
	}

	/**
	 * Sets the ingredients
	 *
	 * @param string $ingredients
	 * @return void
	 */
	public function setIngredients($ingredients) {
		$this->ingredients = $ingredients;
	}

	/**
	 * Returns the preparation
	 *
	 * @return string $preparation
	 */
	public function getPreparation() {
		return $this->preparation;
	}

	/**
	 * Sets the preparation
	 *
	 * @param string $preparation
	 * @return void
	 */
	public function setPreparation($preparation) {
		$this->preparation = $preparation;
	}

	/**
	 * Returns the nutrition
	 *
	 * @return string $nutrition
	 */
	public function getNutrition() {
		return $this->nutrition;
	}

	/**
	 * Sets the nutrition
	 *
	 * @param string $nutrition
	 * @return void
	 */
	public function setNutrition($nutrition) {
		$this->nutrition = $nutrition;
	}

	/**
	 * Returns the imageBig
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageBig
	 */
	public function getImageBig() {
		return $this->imageBig;
	}

	/**
	 * Sets the imageBig
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageBig
	 * @return void
	 */
	public function setImageBig(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageBig) {
		$this->imageBig = $imageBig;
	}

	/**
	 * Returns the imageThumb
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageThumb
	 */
	public function getImageThumb() {
		return $this->imageThumb;
	}

	/**
	 * Sets the imageThumb
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageThumb
	 * @return void
	 */
	public function setImageThumb(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageThumb) {
		$this->imageThumb = $imageThumb;
	}

	/**
	 * Returns the recipeScore
	 *
	 * @return integer $recipeScore
	 */
	public function getRecipeScore() {
		return $this->recipeScore;
	}

	/**
	 * Sets the recipeScore
	 *
	 * @param integer $recipeScore
	 * @return void
	 */
	public function setRecipeScore($recipeScore) {
		$this->recipeScore = $recipeScore;
	}

	/**
	 * Returns the rateHit
	 *
	 * @return integer $rateHit
	 */
	public function getRateHit() {
		return $this->rateHit;
	}

	/**
	 * Sets the rateHit
	 *
	 * @param integer $rateHit
	 * @return void
	 */
	public function setRateHit($rateHit) {
		$this->rateHit = $rateHit;
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
	public function setDate(\DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Returns the showOnStartPage
	 *
	 * @return boolean $showOnStartPage
	 */
	public function getShowOnStartPage() {
		return $this->showOnStartPage;
	}

	/**
	 * Sets the showOnStartPage
	 *
	 * @param boolean $showOnStartPage
	 * @return void
	 */
	public function setShowOnStartPage($showOnStartPage) {
		$this->showOnStartPage = $showOnStartPage;
	}

	/**
	 * Returns the boolean state of showOnStartPage
	 *
	 * @return boolean
	 */
	public function isShowOnStartPage() {
		return $this->showOnStartPage;
	}

	/**
	 * Returns the author
	 *
	 * @return string $author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets the author
	 *
	 * @param string $author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}


	/**
	 * Return the number of not rate stars
	 *
	 * @return integer
	 */
	public function getNotRateStars() {
		return $this::RATE_NUMBER - $this->getRecipeScore();
	}

	/**
	 * Adds a CategoryPreparation
	 *
	 * @param \Reclette\RacletteRecipe\Domain\Model\CategoryPreparation $categoryPreparation
	 * @return void
	 */
	public function addCategoryPreparation(\Reclette\RacletteRecipe\Domain\Model\CategoryPreparation $categoryPreparation) {
		$this->categoryPreparation->attach($categoryPreparation);
	}

	/**
	 * Removes a CategoryPreparation
	 *
	 * @param \Reclette\RacletteRecipe\Domain\Model\CategoryPreparation $categoryPreparationToRemove The CategoryPreparation to be removed
	 * @return void
	 */
	public function removeCategoryPreparation(\Reclette\RacletteRecipe\Domain\Model\CategoryPreparation $categoryPreparationToRemove) {
		$this->categoryPreparation->detach($categoryPreparationToRemove);
	}

	/**
	 * Returns the categoryPreparation
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryPreparation> $categoryPreparation
	 */
	public function getCategoryPreparation() {
		return $this->categoryPreparation;
	}

	/**
	 * Sets the categoryPreparation
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryPreparation> $categoryPreparation
	 * @return void
	 */
	public function setCategoryPreparation(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categoryPreparation) {
		$this->categoryPreparation = $categoryPreparation;
	}

	/**
	 * Adds a CategoryIngredients
	 *
	 * @param \Reclette\RacletteRecipe\Domain\Model\CategoryIngredients $categoryIngredient
	 * @return void
	 */
	public function addCategoryIngredient(\Reclette\RacletteRecipe\Domain\Model\CategoryIngredients $categoryIngredient) {
		$this->categoryIngredients->attach($categoryIngredient);
	}

	/**
	 * Removes a CategoryIngredients
	 *
	 * @param \Reclette\RacletteRecipe\Domain\Model\CategoryIngredients $categoryIngredientToRemove The CategoryIngredients to be removed
	 * @return void
	 */
	public function removeCategoryIngredient(\Reclette\RacletteRecipe\Domain\Model\CategoryIngredients $categoryIngredientToRemove) {
		$this->categoryIngredients->detach($categoryIngredientToRemove);
	}

	/**
	 * Returns the categoryIngredients
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryIngredients> $categoryIngredients
	 */
	public function getCategoryIngredients() {
		return $this->categoryIngredients;
	}

	/**
	 * Sets the categoryIngredients
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Reclette\RacletteRecipe\Domain\Model\CategoryIngredients> $categoryIngredients
	 * @return void
	 */
	public function setCategoryIngredients(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categoryIngredients) {
		$this->categoryIngredients = $categoryIngredients;
	}

}