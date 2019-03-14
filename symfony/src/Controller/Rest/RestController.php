<?php

namespace App\Controller\Rest;

use App\Entity\Test;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RestController extends FOSRestController
{
    /**
     * @Rest\Post("/articles")
     */
    public function index(Request $request): View
    {
        $test = new Test();
        $em = $this->getDoctrine()->getManager();
        $test->setName($request->get('name'));
        $test->setDescription($request->get('descr'));
        $test->setId($request->get('id'));
        $em->persist($test);
        $em->flush();
        return View::create($test, Response::HTTP_CREATED);
    }


    /**
     * @Rest\Get("/article/{id}")
     */
    public function getInfo(Request $request, $id): View
    {
        $rep = $this->getDoctrine()->getRepository(Test::class);
        $getInfo = $rep->findOneBy(['id' => $id]);
        return View::create($getInfo, Response::HTTP_ACCEPTED);
    }

    /**
     * @Rest\Get("/articles/list")
     */
    public function getList(Request $request): View
    {
        $rep = $this->getDoctrine()->getRepository(Test::class);
        $getInfo = $rep->findAll();
        return View::create($getInfo, Response::HTTP_ACCEPTED);
    }

    /**
     * Replaces Article resource
     * @Rest\Put("/article/edit/{articleId}")
     */
    public function putArticle($articleId, Request $request): View
    {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository(Test::class);
        $id = $article->find($articleId);
        if ($article) {
            $id->setName($request->get('name'));
            $id->setDescription($request->get('descr'));
            $id->setId($request->get('id'));
            $em->flush();
        }
        // In case our PUT was a success we need to return a 200 HTTP OK response with the object as a result of PUT
        return View::create($article, Response::HTTP_OK);
    }


    /**
     * @Rest\Delete("/article/del/{articleId}")
     */
    public function delArticle($articleId, Request $request): View
    {
        $em = $this->getDoctrine()->getManager();
        $article = $this->getDoctrine()->getRepository(Test::class);
        $id = $article->find($articleId);
        $em->remove($id);
        $em->flush();
        // In case our PUT was a success we need to return a 200 HTTP OK response with the object as a result of PUT
        return View::create($article, Response::HTTP_NO_CONTENT);
    }


}