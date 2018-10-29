<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 29/10/18
 * Time: 11:12
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number'=> $number,
    ]);
    }
}
