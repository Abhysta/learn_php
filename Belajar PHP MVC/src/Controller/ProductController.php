<?php

namespace Abhysta\BelajarMvcPhp\Controller;

class ProductController
{
    function categories(?string $productId = null, ?string $categoryId = null): void
    {
        echo "Product : $productId Category : $categoryId";
    }
}
