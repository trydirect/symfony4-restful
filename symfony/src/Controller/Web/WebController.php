<?php
namespace App\Controller\Web;
use App\Entity\Test;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WebController extends AbstractController
{
    /**
     * @Rest\Get("/")
     */
    public function index()
    {
        $test = new Test();
        $test->setName('Test');
        $test->setDescription('Description');
        $test->setId('s');
        return $this->json($test);
    }
}