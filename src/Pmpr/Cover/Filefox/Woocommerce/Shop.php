<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecad9be7e1             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WC_Product; class Shop extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_before_shop_loop', 'woocommerce_output_all_notices')->kuieicsuscgmwigg('woocommerce_before_shop_loop', 'woocommerce_result_count', 20)->kuieicsuscgmwigg('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30); $this->kuieicsuscgmwigg('woocommerce_no_products_found', 'wc_no_products_found'); $this->kuieicsuscgmwigg('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open'); $this->kuieicsuscgmwigg('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title'); $this->kuieicsuscgmwigg('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash')->kuieicsuscgmwigg('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail'); $this->kuieicsuscgmwigg('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5)->kuieicsuscgmwigg('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price'); $this->kuieicsuscgmwigg('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5)->kuieicsuscgmwigg('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart'); parent::kgewmaycsoykyaso(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', 'woocommerce_output_all_notices', 1); $this->qcsmikeggeemccuu('woocommerce_shop_loop_item_title', [$this, 'sqkcoqsymmeimoye'], 0); $this->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'cuekgigmkgkskaek'], 1)->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'gewssokooyweyiqg'])->qcsmikeggeemccuu('woocommerce_after_main_content', [$this, 'kuaoscqceeiiosoc'], PHP_INT_MAX); $this->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'qsmmkggqokmemcie'], 0)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'oaukoisuwcsqyuug'], PHP_INT_MAX - 2)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'oaukoisuwcsqyuug'], PHP_INT_MAX - 1); } public function gewssokooyweyiqg() { $this->soguiwuqgkkeckik(['class' => 'col-12 col-lg-9 order-2 my-3']); } public function qsmmkggqokmemcie() { $this->oieqyoysigqcsqao(['class' => 'col-12 col-lg-3 order-1 mt-0 mb-3 mt-lg-3']); } public function sqkcoqsymmeimoye() { global $product; if ($product instanceof WC_Product) { $qmsqgukcgeeooswc = $this->ocksiywmkyaqseou('get_product_text_metadata', [], $product->get_id()); unset($qmsqgukcgeeooswc['last_update']); $this->iuygowkemiiwqmiw('loop_item', [Constants::woicooamkeqiaemo => $product->get_id(), Constants::sauwwsocmukoaayu => $product->get_permalink(), Constants::oguseymmyyoyaako => $product, Constants::syooqwmkmsmgwcqw => $product->get_short_description(), Constants::qescuiwgsyuikume => $product->get_title(), 'left_metadata' => $this->ocksiywmkyaqseou('get_product_taxonomies_metadata', [], $product->get_id()), 'text_metadata' => $qmsqgukcgeeooswc, 'numeric_metadata' => $this->ocksiywmkyaqseou('get_product_numeric_metadata', [], $product->get_id()), 'action_text' => __('View', PR__CVR__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } } }
