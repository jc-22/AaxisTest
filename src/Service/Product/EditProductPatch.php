<?php

namespace App\Service\Product;

use App\Entity\Product;
use App\Form\Model\ProductDto;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;

class EditProductPatch
{
    private $entityManager;
    private $formFactory;
    private $productRepository;
    private $productDto;

    public function __construct(
        EntityManagerInterface $entityManager,
        FormFactoryInterface $formFactory,
        ProductRepository $productRepository,
        ProductDto $productDto)
    {
        $this->entityManager     = $entityManager;
        $this->formFactory       = $formFactory;
        $this->productRepository = $productRepository;
        $this->productDto        = $productDto;
    }

    public function __invoke($requestData): array
    {
        $products = new ArrayCollection();

        foreach ($requestData as $data) {

            $product    = $this->productRepository->findOneBy(['sku' => $data['sku']]);
            if (!$product) {
                return [
                    'status'  => false,
                    'message' => 'Product doesnt exists.',
                    'error'   => $data['sku'],
                ];
            }

            $product->patch($data);
            $products->add($product);

        }
        $this->entityManager->flush();

        return [
            'status'  => true,
            'message' => 'Products edited.',
            'data'    => $products,
        ];
    }
}