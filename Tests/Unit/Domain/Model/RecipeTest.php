<?php

namespace Reclette\RacletteRecipe\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
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
 * Test case for class \Reclette\RacletteRecipe\Domain\Model\Recipe.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class RecipeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Reclette\RacletteRecipe\Domain\Model\Recipe
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Reclette\RacletteRecipe\Domain\Model\Recipe();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPortionsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPortions()
		);
	}

	/**
	 * @test
	 */
	public function setPortionsForStringSetsPortions() {
		$this->subject->setPortions('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'portions',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIngredientsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getIngredients()
		);
	}

	/**
	 * @test
	 */
	public function setIngredientsForStringSetsIngredients() {
		$this->subject->setIngredients('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ingredients',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPreparationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPreparation()
		);
	}

	/**
	 * @test
	 */
	public function setPreparationForStringSetsPreparation() {
		$this->subject->setPreparation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'preparation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNutritionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNutrition()
		);
	}

	/**
	 * @test
	 */
	public function setNutritionForStringSetsNutrition() {
		$this->subject->setNutrition('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nutrition',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageBigReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImageBig()
		);
	}

	/**
	 * @test
	 */
	public function setImageBigForFileReferenceSetsImageBig() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImageBig($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'imageBig',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageThumbReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImageThumb()
		);
	}

	/**
	 * @test
	 */
	public function setImageThumbForFileReferenceSetsImageThumb() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImageThumb($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'imageThumb',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRecipeScoreReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getRecipeScore()
		);
	}

	/**
	 * @test
	 */
	public function setRecipeScoreForIntegerSetsRecipeScore() {
		$this->subject->setRecipeScore(12);

		$this->assertAttributeEquals(
			12,
			'recipeScore',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRateHitReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getRateHit()
		);
	}

	/**
	 * @test
	 */
	public function setRateHitForIntegerSetsRateHit() {
		$this->subject->setRateHit(12);

		$this->assertAttributeEquals(
			12,
			'rateHit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDate()
		);
	}

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShowOnStartPageReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getShowOnStartPage()
		);
	}

	/**
	 * @test
	 */
	public function setShowOnStartPageForBooleanSetsShowOnStartPage() {
		$this->subject->setShowOnStartPage(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'showOnStartPage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAuthorReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAuthor()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorForStringSetsAuthor() {
		$this->subject->setAuthor('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'author',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryPreparationReturnsInitialValueForCategoryPreparation() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategoryPreparation()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryPreparationForObjectStorageContainingCategoryPreparationSetsCategoryPreparation() {
		$categoryPreparation = new \Reclette\RacletteRecipe\Domain\Model\CategoryPreparation();
		$objectStorageHoldingExactlyOneCategoryPreparation = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategoryPreparation->attach($categoryPreparation);
		$this->subject->setCategoryPreparation($objectStorageHoldingExactlyOneCategoryPreparation);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategoryPreparation,
			'categoryPreparation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryPreparationToObjectStorageHoldingCategoryPreparation() {
		$categoryPreparation = new \Reclette\RacletteRecipe\Domain\Model\CategoryPreparation();
		$categoryPreparationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryPreparationObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($categoryPreparation));
		$this->inject($this->subject, 'categoryPreparation', $categoryPreparationObjectStorageMock);

		$this->subject->addCategoryPreparation($categoryPreparation);
	}

	/**
	 * @test
	 */
	public function removeCategoryPreparationFromObjectStorageHoldingCategoryPreparation() {
		$categoryPreparation = new \Reclette\RacletteRecipe\Domain\Model\CategoryPreparation();
		$categoryPreparationObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryPreparationObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($categoryPreparation));
		$this->inject($this->subject, 'categoryPreparation', $categoryPreparationObjectStorageMock);

		$this->subject->removeCategoryPreparation($categoryPreparation);

	}

	/**
	 * @test
	 */
	public function getCategoryIngredientsReturnsInitialValueForCategoryIngredients() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategoryIngredients()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryIngredientsForObjectStorageContainingCategoryIngredientsSetsCategoryIngredients() {
		$categoryIngredient = new \Reclette\RacletteRecipe\Domain\Model\CategoryIngredients();
		$objectStorageHoldingExactlyOneCategoryIngredients = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategoryIngredients->attach($categoryIngredient);
		$this->subject->setCategoryIngredients($objectStorageHoldingExactlyOneCategoryIngredients);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategoryIngredients,
			'categoryIngredients',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryIngredientToObjectStorageHoldingCategoryIngredients() {
		$categoryIngredient = new \Reclette\RacletteRecipe\Domain\Model\CategoryIngredients();
		$categoryIngredientsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryIngredientsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($categoryIngredient));
		$this->inject($this->subject, 'categoryIngredients', $categoryIngredientsObjectStorageMock);

		$this->subject->addCategoryIngredient($categoryIngredient);
	}

	/**
	 * @test
	 */
	public function removeCategoryIngredientFromObjectStorageHoldingCategoryIngredients() {
		$categoryIngredient = new \Reclette\RacletteRecipe\Domain\Model\CategoryIngredients();
		$categoryIngredientsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryIngredientsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($categoryIngredient));
		$this->inject($this->subject, 'categoryIngredients', $categoryIngredientsObjectStorageMock);

		$this->subject->removeCategoryIngredient($categoryIngredient);

	}
}
