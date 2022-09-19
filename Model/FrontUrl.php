<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */

namespace MageWorx\MirasvitBlogSeoCompatibility\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Url;
use Magento\Store\Model\StoreManagerInterface;

class FrontUrl extends \Mirasvit\BlogMx\Model\Url
{

    /**
     * FrontUrl constructor.
     *
     * Use Url from frontend
     *
     * @param StoreManagerInterface $storeManager
     * @param \Mirasvit\BlogMx\Model\Config $config
     * @param ScopeConfigInterface $scopeConfig
     * @param \Mirasvit\BlogMx\Model\PostFactory $postFactory
     * @param \Mirasvit\BlogMx\Model\CategoryFactory $categoryFactory
     * @param \Mirasvit\BlogMx\Model\TagFactory $tagFactory
     * @param \Mirasvit\BlogMx\Model\AuthorFactory $authorFactory
     * @param Url $urlManager
     */
    public function __construct(
        StoreManagerInterface $storeManager,
        \Mirasvit\BlogMx\Model\Config $config,
        ScopeConfigInterface $scopeConfig,
        \Mirasvit\BlogMx\Model\PostFactory $postFactory,
        \Mirasvit\BlogMx\Model\CategoryFactory $categoryFactory,
        \Mirasvit\BlogMx\Model\TagFactory $tagFactory,
        \Mirasvit\BlogMx\Model\AuthorFactory $authorFactory,
        Url $urlManager
    ) {
        parent::__construct(
            $storeManager,
            $config,
            $scopeConfig,
            $postFactory,
            $categoryFactory,
            $tagFactory,
            $authorFactory,
            $urlManager
        );
    }
}