<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MageWorx\MirasvitBlogSeoCompatibility\Model\DataProvider;

use MageWorx\MirasvitBlogSeoCompatibility\Helper\Data;
use MageWorx\MirasvitBlogSeoCompatibility\Model\FrontUrl;
use Mirasvit\BlogMx\Api\Repository\TagRepository;

/**
 * Data Provider for Mirasvit Blog Tags
 */
class Tag extends \MageWorx\MirasvitBlogSeoCompatibility\Model\DataProvider
{
    /**
     * @var TagRepository
     */
    protected $tagRepository;

    /**
     * Tag constructor.
     *
     * @param TagRepository $tagRepository
     * @param FrontUrl $url
     * @param Data $helper
     * @param int $storeId
     */
    public function __construct(
        TagRepository $tagRepository,
        FrontUrl $url,
        Data $helper,
        int $storeId = 0
    ) {
        parent::__construct($url, $helper, $storeId);
        $this->tagRepository = $tagRepository;
    }

    /**
     * @return array
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getGeneratedData()
    {
        $code       = 'mirasvit_blogmx_tag';
        $title      = __('Mirasvit Blog Tags');
        $collection = $this->tagRepository->getCollection();

        return $this->getItemsForSitemap($collection, $code, $title);
    }
}
