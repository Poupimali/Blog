<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
            '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, true, false, null]],
            '/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, true, false, null]],
            '/category/add' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\CategoryController::add'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
            '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
            '/tag' => [[['_route' => 'tag_index', '_controller' => 'App\\Controller\\TagController::index'], null, null, null, true, false, null]],
            '/tag/new' => [[['_route' => 'tag_new', '_controller' => 'App\\Controller\\TagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/article/(?'
                        .'|show/([^/]++)(*:194)'
                        .'|edit/([^/]++)(*:215)'
                        .'|delete/([^/]++)(*:238)'
                        .'|([^/]++)/favorite(*:263)'
                    .')'
                    .'|/blog(?'
                        .'|(?:/([a-z0-9-]+))?(*:298)'
                        .'|/(?'
                            .'|category/([^/]++)(*:327)'
                            .'|tag/([^/]++)(*:347)'
                        .')'
                    .')'
                    .'|/category/(?'
                        .'|show/([^/]++)(*:383)'
                        .'|edit/([^/]++)(*:404)'
                        .'|delete/([^/]++)(*:427)'
                    .')'
                    .'|/tag/(?'
                        .'|show/([^/]++)(*:457)'
                        .'|edit/([^/]++)(*:478)'
                        .'|delete/([^/]++)(*:501)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            194 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
            215 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            238 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            263 => [[['_route' => 'article_favorite', '_controller' => 'App\\Controller\\ArticleController::favorite'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            298 => [[['_route' => 'blog_show', 'slug' => null, '_controller' => 'App\\Controller\\BlogController::show'], ['slug'], null, null, false, true, null]],
            327 => [[['_route' => 'show_category', '_controller' => 'App\\Controller\\BlogController::showByCategory'], ['name'], null, null, false, true, null]],
            347 => [[['_route' => 'show_tag', '_controller' => 'App\\Controller\\BlogController::showByTag'], ['name'], null, null, false, true, null]],
            383 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::showCategory'], ['id'], null, null, false, true, null]],
            404 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            427 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            457 => [[['_route' => 'tag_show', '_controller' => 'App\\Controller\\TagController::show'], ['id'], null, null, false, true, null]],
            478 => [[['_route' => 'tag_edit', '_controller' => 'App\\Controller\\TagController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
            501 => [[['_route' => 'tag_delete', '_controller' => 'App\\Controller\\TagController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
