<?php

namespace App\Controller;

use App\Entity\Drugs;
use App\Form\DrugsType;
use App\Repository\DrugsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/drugs')]
class DrugsController extends AbstractController
{
    #[Route('/', name: 'app_drugs_index', methods: ['GET'])]
    public function index(DrugsRepository $drugsRepository): Response
    {
        return $this->render('drugs/index.html.twig', [
            'drugs' => $drugsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_drugs_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DrugsRepository $drugsRepository): Response
    {
        $drug = new Drugs();
        $form = $this->createForm(DrugsType::class, $drug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $drugsRepository->add($drug);
            return $this->redirectToRoute('app_drugs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('drugs/new.html.twig', [
            'drug' => $drug,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_drugs_show', methods: ['GET'])]
    public function show(Drugs $drug): Response
    {
        return $this->render('drugs/show.html.twig', [
            'drug' => $drug,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_drugs_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Drugs $drug, DrugsRepository $drugsRepository): Response
    {
        $form = $this->createForm(DrugsType::class, $drug);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $drugsRepository->add($drug);
            return $this->redirectToRoute('app_drugs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('drugs/edit.html.twig', [
            'drug' => $drug,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_drugs_delete', methods: ['POST'])]
    public function delete(Request $request, Drugs $drug, DrugsRepository $drugsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$drug->getId(), $request->request->get('_token'))) {
            $drugsRepository->remove($drug);
        }

        return $this->redirectToRoute('app_drugs_index', [], Response::HTTP_SEE_OTHER);
    }
}
