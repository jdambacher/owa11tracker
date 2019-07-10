<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Services\TrackerManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends AbstractController
{
    /**
     * @Route("/store", name="store", methods={"POST"})
     */
    public function store(Request $request, TrackerManager $trackerManager)
    {
        $json = json_decode($request->getContent());

        foreach ($json->messages as $message) {
            $trackerManager->handleMessage($json->imei, $message);
        }

        return new Response('Message(s) valid', 200);

    }
}