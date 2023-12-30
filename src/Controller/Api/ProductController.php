<?php

namespace App\Controller\Api;

use App\Repository\ProductRepository;
use App\Service\Product\CreateProduct;
use App\Service\Product\EditProductPatch;
use App\Service\Product\EditProductPut;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products', name: 'get_products', methods: ['GET'])]
    public function getProducts(ProductRepository $productRepository): JsonResponse
    {
        $products = $productRepository->findAll();

        return $this->json([
            'status'  => true,
            'message' => 'Products.',
            'data'    => $products,
        ]);
    }

    #[Route('/api/product/create', name: 'create_products', methods: ['POST'])]
    public function createProduct(Request $request, CreateProduct $createProduct): JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);
        return $this->json(($createProduct)($requestData));
    }

    #[Route('/api/product/edit', name: 'edit_products_put', methods: ['PUT'])]
    public function editProductPut(Request $request, EditProductPut $editProductPut): JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);
        return $this->json(($editProductPut)($requestData));
    }

    #[Route('/api/product/edit', name: 'edit_products_patch', methods: ['PATCH'])]
    public function editProductPatch(Request $request, EditProductPatch $editProductPatch): JsonResponse
    {
        $requestData = json_decode($request->getContent(), true);
        return $this->json(($editProductPatch)($requestData));
    }


}
