<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function addVideo(Request $request)
    {
        $video = new video;
        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $video-> setCreateAt(new \DateTime("now"));
            $entityManager->persist($video);
            $entityManager->flush();
           return $this->redirectToRoute("home");


        }
        return $this->render('video/index.html.twig', [
            'controller_name' => 'VideoController',
            'formVideo' => $form->createView()
        ]);}

        public function viewVideo(Request $request){


    }




}
