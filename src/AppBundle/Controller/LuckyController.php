<?php
/**
 * Created by PhpStorm.
 * User: Maciek
 * Date: 27.03.2017
 * Time: 14:48
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller {

	/**
	 * @Route("/Lucky/number/{przedzial}")
	 */
	public function numberAction($przedzial)
	{
		$number = mt_rand(0, $przedzial);

		return $this->render('lucky/number.html.twig', array(
			'number' => $number,
		));
	}


}