<?php
namespace App\Controller\Web;
use App\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class WebController extends Controller
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