<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {
	/**
	 * @Route("/", name="homepage")
	 */
	public function home() {
		$textBlocks = [
			'1 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi aperiam architecto blanditiis cum cumque eaque excepturi explicabo ipsam, iste iure minima modi nesciunt nihil recusandae sunt? Atque doloribus, ducimus, explicabo fuga illo in magnam natus optio perferendis porro quisquam repellat vel? Accusamus consequatur nihil nobis reprehenderit vero voluptatem.',
			'2 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi aperiam architecto blanditiis cum cumque eaque excepturi explicabo ipsam, iste iure minima modi nesciunt nihil recusandae sunt? Atque doloribus, ducimus, explicabo fuga illo in magnam natus optio perferendis porro quisquam repellat vel? Accusamus consequatur nihil nobis reprehenderit vero voluptatem.',
			'3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet animi aperiam architecto blanditiis cum cumque eaque excepturi explicabo ipsam, iste iure minima modi nesciunt nihil recusandae sunt? Atque doloribus, ducimus, explicabo fuga illo in magnam natus optio perferendis porro quisquam repellat vel? Accusamus consequatur nihil nobis reprehenderit vero voluptatem.',
		];
		return $this->render( 'lesson_1/home.html.twig', [
			'text_block' => $textBlocks,
		] );
	}
	/**
	 * @Route("/show")
	 */
	public function show() {
		return $this->render( 'lesson_1/show.html.twig' );
	}

}