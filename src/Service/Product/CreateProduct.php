<?php

namespace App\Service\Product;

use App\Entity\Product;
use App\Form\Model\ProductDto;
use App\Form\ProductType;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;

class CreateProduct
{
    private $entityManager;
    private $formFactory;

    public function __construct(
        EntityManagerInterface $entityManager,
        FormFactoryInterface $formFactory)
    {
        $this->entityManager = $entityManager;
        $this->formFactory   = $formFactory;
    }

    public function __invoke($requestData): array
    {
        $products = new ArrayCollection();

        foreach ($requestData as $data) {
            $productDto = new ProductDto();

            $form = $this->formFactory->create(ProductType::class, $productDto);
            $form->submit($data);

            if ( $form->isSubmitted() && $form->isValid() ) {
                $product = new Product();
                $product->setSku($productDto->sku);
                $product->setName($productDto->name);
                $product->setDescription($productDto->description);

                $this->entityManager->persist($product);
                $products->add($product);
            } else {
                return [
                    'status'  => false,
                    'message' => 'Form Fail.',
                    'error'   => $form,
                ];
            }
        }
        $this->entityManager->flush();

        return [
            'status'  => true,
            'message' => 'Products created.',
            'data'    => $products,
        ];
    }
}