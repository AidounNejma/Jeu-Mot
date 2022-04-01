<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(PostRepository $postRepository, Request $request, EntityManagerInterface $manager): Response
    {  
        
        
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }

    



    // #[Route('/{id}', name: 'showPost')]
    // public function show(int $id, PostRepository $postRepository): Response
    // {
        

    //     // ...
    //     return $this->render('post/index.html.twig', [
    //         'controller_name' => 'PostController',
    //         'posts'=> $posts
    //     ]);
    // }
}
