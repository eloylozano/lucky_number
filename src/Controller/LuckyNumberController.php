<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberController extends AbstractController
{
    #[Route('/lucky/number', name: 'app_lucky_number')]
    public function number(): Response
    {
        $number = random_int(1, 100);

        return new Response(
            '<html>
                <body style="height: 100vh; width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; font-size: 4em; font-family: Arial, sans-serif; background-color: #f0f8ff; color: #333;">
                    <div>
                        Lucky number: ' . $number . '
                    </div>
                    <button onclick="location.reload()" style="margin-top: 20px; padding: 10px 20px; font-size: 0.5em; cursor: pointer; border: none; background-color: #4CAF50; color: white; border-radius: 5px;">
                        Generate new number
                    </button>
                </body>
            </html>'
        );
        
    }
}

