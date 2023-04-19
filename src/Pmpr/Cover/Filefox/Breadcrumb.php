<?php

namespace Pmpr\Cover\Filefox;

/**
 * Class Breadcrumb
 * @package Pmpr\Cover\Filefox
 */
class Breadcrumb extends Container
{
    public function addFilters()
    {
        $this->customAddFilter('breadcrumb_generate_args', [$this, 'breadcrumbArgs'])
             ->customAddFilter('breadcrumb_allow_render', [$this, 'disableBreadcrumbOnFrontPage'], 99);
    }

    /**
     * @param array $args
     *
     * @return array
     */
    public function breadcrumbArgs(array $args = []): array
    {
        return $this->getHelper()->getFormat()->arrayParseArgs([
            'divider'           => '/',
            'wrap_attrs'        => [
                'class' => 'px-0 py-3 m-0',
            ],
            'link_attrs'        => [
                'class' => 'fs-xs font-weight-bold',
            ],
            'item_attrs'        => [
                'class' => 'd-table-cell text-nowrap',
            ],
            'divider_attrs'     => [
                'class' => 'mx-2 text-primary',
            ],
            'link_container'    => null,
            'active_item_attrs' => [
                'class' => 'active text-muted fs-xs d-table-cell text-nowrap',
            ],
        ], $args);
    }

    /**
     * @param $let
     *
     * @return bool
     */
    public function disableBreadcrumbOnFrontPage($let): bool
    {
        return $let && !$this->getWrapper()->getQuery()->isFrontPage();
    }
}
