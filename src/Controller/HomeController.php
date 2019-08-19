<?php

namespace App\Controller;

use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {

        $repository = $this->getDoctrine()->getRepository(video::class);
        $videos = $repository->findall(


        );

        return $this->render(
            "home/index.html.twig",
            array(
                'controller_name' => 'HomeController',
                "videos" => $videos,

            )
        );}





}
