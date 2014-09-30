<?php
namespace Reclette\RacletteRecipe\Controller;


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
 * RecipeController
 */
class RecipeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * recipeRepository
	 *
	 * @var \Reclette\RacletteRecipe\Domain\Repository\RecipeRepository
	 * @inject
	 */
	protected $recipeRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$recipes = $this->recipeRepository->findAll();
		$this->view->assign('recipes', $recipes);
	}

	/**
	 * action show
	 *
	 * @param \Reclette\RacletteRecipe\Domain\Model\Recipe $recipe
	 * @return void
	 */
	public function showAction(\Reclette\RacletteRecipe\Domain\Model\Recipe $recipe) {
		$this->view->assign('recipe', $recipe);
	}

}