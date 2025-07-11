<?php

namespace App\Controller;

use App\Entity\Faq;
use App\Service\FaqService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InfoController extends AbstractController
{
    /**
     * Wyświetla stronę FAQ z formularzem dodawania nowego pytania (dla administratora).
     *
     * @param Request    $request    bieżące żądanie
     *                               HTTP
     * @param FaqService $faqService serwis do zarządzania pytaniami
     *                               FAQ
     *
     * @return Response odpowiedź HTML ze stroną FAQ
     */
    #[Route('/faq', name: 'app_faq')]
    public function faq(Request $request, FaqService $faqService): Response
    {
        $faqs = $faqService->getAll();
        $form = null;

        if ($this->isGranted('ROLE_ADMIN')) {
            $faq = new Faq();
            $form = $faqService->buildForm($faq);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $faqService->save($faq);
                $this->addFlash('success', 'Dodano pytanie do FAQ.');

                return $this->redirectToRoute('app_faq');
            }
        }

        return $this->render('info/faq.html.twig', [
            'faqs' => $faqs,
            'form' => $form?->createView(),
        ]);
    }

    /**
     * about.
     */
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('info/about.html.twig');
    }

    /**
     * rules.
     */
    #[Route('/rules', name: 'app_rules')]
    public function rules(): Response
    {
        return $this->render('info/rules.html.twig');
    }

    /**
     * contact.
     */
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('info/contact.html.twig');
    }

    /**
     * menu.
     */
    #[Route('/menu', name: 'app_menu')]
    public function menu(): Response
    {
        return $this->render('info/menu.html.twig');
    }
}
