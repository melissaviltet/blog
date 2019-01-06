<?php
/**
 * Created by PhpStorm.
 * User: wilder16
 * Date: 06/01/19
 * Time: 14:26
 */


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     * @route("/lucky/number")
     */
    public function number()
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig',[
            'number'=> $number,
        ]);

    }
}
