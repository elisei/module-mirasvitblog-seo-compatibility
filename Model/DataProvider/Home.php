<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MageWorx\MirasvitBlogSeoCompatibility\Model\DataProvider;

use MageWorx\MirasvitBlogSeoCompatibility\Helper\Data;
use MageWorx\MirasvitBlogSeoCompatibility\Model\FrontUrl;
use Mirasvit\BlogMx\Api\Repository\CategoryRepository;

/**
 * Data Provider for Mirasvit Blog Home Page
 */
class Home extends \MageWorx\MirasvitBlogSeoCompatibility\Model\DataProvider
{
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * Home constructor.
     *
     * @param CategoryRepository $categoryRepository
     * @param FrontUrl $url
     * @param Data $helper
     * @param int $storeId
     */
    public function __construct(
        CategoryRepository $categoryRepository,
        FrontUrl $url,
        Data $helper,
        int $storeId = 0
    ) {
        parent::__construct($url, $helper, $storeId);
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return array
     */
    public function getGeneratedData()
    {
        $code       = 'mirasvit_blogmx_root';
        $title      = __('Mirasvit Blog Home');
        $collection = $this->categoryRepository->getCollection();
        $collection->addRootFilter();

        return $this->getItemsForSitemap($collection, $code, $title);
    }
}
