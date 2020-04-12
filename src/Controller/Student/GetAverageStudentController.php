<?php

declare(strict_types=1);

namespace App\Controller\Student;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetAverageStudentController extends AbstractController
{
    /**
     * @Route("/students/{id}/average", name="get_student_average", methods={"get"})
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function __invoke(int $id, Request $request): Response
    {
        return new Response(null, 200);
    }
}