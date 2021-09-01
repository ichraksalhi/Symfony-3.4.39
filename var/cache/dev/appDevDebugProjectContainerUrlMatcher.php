<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/resto')) {
                if (0 === strpos($pathinfo, '/resto/abonneresto')) {
                    // abonneresto_index
                    if ('/resto/abonneresto' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::indexAction',  '_route' => 'abonneresto_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_abonneresto_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'abonneresto_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_abonneresto_index;
                        }

                        return $ret;
                    }
                    not_abonneresto_index:

                    // abonneresto_show
                    if (preg_match('#^/resto/abonneresto/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'abonneresto_show']), array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_abonneresto_show;
                        }

                        return $ret;
                    }
                    not_abonneresto_show:

                    // abonneresto_new
                    if ('/resto/abonneresto/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::newAction',  '_route' => 'abonneresto_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_abonneresto_new;
                        }

                        return $ret;
                    }
                    not_abonneresto_new:

                    // abonneresto_edit
                    if (preg_match('#^/resto/abonneresto/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'abonneresto_edit']), array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_abonneresto_edit;
                        }

                        return $ret;
                    }
                    not_abonneresto_edit:

                    // abonneresto_delete
                    if (preg_match('#^/resto/abonneresto/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'abonneresto_delete']), array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_abonneresto_delete;
                        }

                        return $ret;
                    }
                    not_abonneresto_delete:

                    // abonneresto_ajouterMobile
                    if ('/resto/abonneresto/newMobile' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::AjouterMobileAction',  '_route' => 'abonneresto_ajouterMobile',);
                    }

                    // abonneresto_afficherMobile
                    if ('/resto/abonneresto/AfficherMobile' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::AfficherMobileAction',  '_route' => 'abonneresto_afficherMobile',);
                    }

                    // abonneresto_rechercherMobile
                    if (0 === strpos($pathinfo, '/resto/abonneresto/RechercherMobile') && preg_match('#^/resto/abonneresto/RechercherMobile/(?P<nom>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'abonneresto_rechercherMobile']), array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::RechercheMobileAction',));
                    }

                }

                // resto_homepage
                if ('/resto' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'RestoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'resto_homepage',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_resto_homepage;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'resto_homepage'));
                    }

                    return $ret;
                }
                not_resto_homepage:

                // show_reservations
                if ('/resto/show' === $pathinfo) {
                    return array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::showMyReservationsAction',  '_route' => 'show_reservations',);
                }

                if (0 === strpos($pathinfo, '/resto/paiement')) {
                    // paiement_index
                    if ('/resto/paiement' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\paiementController::indexAction',  '_route' => 'paiement_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_paiement_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'paiement_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_paiement_index;
                        }

                        return $ret;
                    }
                    not_paiement_index:

                    // paiement_indexAdmin
                    if ('/resto/paiement/indexAdmin' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\paiementController::indexAdminAction',  '_route' => 'paiement_indexAdmin',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_paiement_indexAdmin;
                        }

                        return $ret;
                    }
                    not_paiement_indexAdmin:

                    // paiement_show
                    if (preg_match('#^/resto/paiement/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'paiement_show']), array (  '_controller' => 'RestoBundle\\Controller\\paiementController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_paiement_show;
                        }

                        return $ret;
                    }
                    not_paiement_show:

                    // paiement_new
                    if ('/resto/paiement/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\paiementController::newAction',  '_route' => 'paiement_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_paiement_new;
                        }

                        return $ret;
                    }
                    not_paiement_new:

                    // paiement_edit
                    if (preg_match('#^/resto/paiement/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'paiement_edit']), array (  '_controller' => 'RestoBundle\\Controller\\paiementController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_paiement_edit;
                        }

                        return $ret;
                    }
                    not_paiement_edit:

                    // paiement_delete
                    if (preg_match('#^/resto/paiement/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'paiement_delete']), array (  '_controller' => 'RestoBundle\\Controller\\paiementController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_paiement_delete;
                        }

                        return $ret;
                    }
                    not_paiement_delete:

                    // notification
                    if ('/resto/paiement/notification' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\paiementController::sendNotificationAction',  '_route' => 'notification',);
                    }

                    // paiement_ajouterMobile
                    if ('/resto/paiement/newMobile' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\paiementController::AjouterMobileAction',  '_route' => 'paiement_ajouterMobile',);
                    }

                    // paiement_afficherMobile
                    if ('/resto/paiement/AfficherMobile' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\paiementController::AfficherMobileAction',  '_route' => 'paiement_afficherMobile',);
                    }

                }

                elseif (0 === strpos($pathinfo, '/resto/plat')) {
                    // platss
                    if ('/resto/platss' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\abonnerestoController::platAction',  '_route' => 'platss',);
                    }

                    // plat_index
                    if ('/resto/plat' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\PlatController::indexAction',  '_route' => 'plat_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_plat_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'plat_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_plat_index;
                        }

                        return $ret;
                    }
                    not_plat_index:

                    // plat_show
                    if (preg_match('#^/resto/plat/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plat_show']), array (  '_controller' => 'RestoBundle\\Controller\\PlatController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_plat_show;
                        }

                        return $ret;
                    }
                    not_plat_show:

                    // plat_new
                    if ('/resto/plat/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\PlatController::newAction',  '_route' => 'plat_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_plat_new;
                        }

                        return $ret;
                    }
                    not_plat_new:

                    // plat_edit
                    if (preg_match('#^/resto/plat/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plat_edit']), array (  '_controller' => 'RestoBundle\\Controller\\PlatController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_plat_edit;
                        }

                        return $ret;
                    }
                    not_plat_edit:

                    // plat_delete
                    if (preg_match('#^/resto/plat/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plat_delete']), array (  '_controller' => 'RestoBundle\\Controller\\PlatController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_plat_delete;
                        }

                        return $ret;
                    }
                    not_plat_delete:

                    // plat_rating
                    if ('/resto/plat/rating' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\PlatController::updaterateAction',  '_route' => 'plat_rating',);
                    }

                    if (0 === strpos($pathinfo, '/resto/plats')) {
                        // plats_index
                        if ('/resto/plats' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::indexAction',  '_route' => 'plats_index',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_plats_index;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'plats_index'));
                            }

                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_plats_index;
                            }

                            return $ret;
                        }
                        not_plats_index:

                        // plats_indexAdmin
                        if ('/resto/plats/indexAdmin' === $pathinfo) {
                            $ret = array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::indexAdminAction',  '_route' => 'plats_indexAdmin',);
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_plats_indexAdmin;
                            }

                            return $ret;
                        }
                        not_plats_indexAdmin:

                        // plats_show
                        if (preg_match('#^/resto/plats/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plats_show']), array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::showAction',));
                            if (!in_array($canonicalMethod, ['GET'])) {
                                $allow = array_merge($allow, ['GET']);
                                goto not_plats_show;
                            }

                            return $ret;
                        }
                        not_plats_show:

                        // plats_new
                        if ('/resto/plats/new' === $pathinfo) {
                            $ret = array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::newAction',  '_route' => 'plats_new',);
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_plats_new;
                            }

                            return $ret;
                        }
                        not_plats_new:

                        // plats_edit
                        if (preg_match('#^/resto/plats/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plats_edit']), array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::editAction',));
                            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                                $allow = array_merge($allow, ['GET', 'POST']);
                                goto not_plats_edit;
                            }

                            return $ret;
                        }
                        not_plats_edit:

                        // plats_delete
                        if (preg_match('#^/resto/plats/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'plats_delete']), array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::deleteAction',));
                            if (!in_array($requestMethod, ['DELETE'])) {
                                $allow = array_merge($allow, ['DELETE']);
                                goto not_plats_delete;
                            }

                            return $ret;
                        }
                        not_plats_delete:

                        // plats_rating
                        if ('/resto/plats/rating' === $pathinfo) {
                            return array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::updaterateAction',  '_route' => 'plats_rating',);
                        }

                        // plats_stat
                        if ('/resto/plats/stat' === $pathinfo) {
                            return array (  '_controller' => 'RestoBundle\\Controller\\PlatController::statAction',  '_route' => 'plats_stat',);
                        }

                        // plats_afficherMobile
                        if ('/resto/plats/AfficherMobile' === $pathinfo) {
                            return array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::AfficherMobileAction',  '_route' => 'plats_afficherMobile',);
                        }

                        // plats_rateMobile
                        if ('/resto/plats/RateMobile' === $pathinfo) {
                            return array (  '_controller' => 'RestoBundle\\Controller\\PlatsController::RateMobileAction',  '_route' => 'plats_rateMobile',);
                        }

                    }

                }

                // admin
                if ('/resto/adminHome' === $pathinfo) {
                    return array (  '_controller' => 'RestoBundle\\Controller\\DefaultController::adminHomeAction',  '_route' => 'admin',);
                }

                // user
                if ('/resto/userHome' === $pathinfo) {
                    return array (  '_controller' => 'RestoBundle\\Controller\\DefaultController::userHomeAction',  '_route' => 'user',);
                }

                // pdf
                if ('/resto/mypdf' === $pathinfo) {
                    return array (  '_controller' => 'RestoBundle\\Controller\\DefaultController::myPdfAction',  '_route' => 'pdf',);
                }

                if (0 === strpos($pathinfo, '/resto/carte')) {
                    // cartefidelite_index
                    if ('/resto/carte' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::indexAction',  '_route' => 'cartefidelite_index',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_cartefidelite_index;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'cartefidelite_index'));
                        }

                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_cartefidelite_index;
                        }

                        return $ret;
                    }
                    not_cartefidelite_index:

                    // cartefidelite_indexAdmin
                    if ('/resto/carte/indexAdmin' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::indexAdminAction',  '_route' => 'cartefidelite_indexAdmin',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_cartefidelite_indexAdmin;
                        }

                        return $ret;
                    }
                    not_cartefidelite_indexAdmin:

                    // cartefidelite_show
                    if (preg_match('#^/resto/carte/(?P<idC>[^/]++)/show$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cartefidelite_show']), array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::showAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_cartefidelite_show;
                        }

                        return $ret;
                    }
                    not_cartefidelite_show:

                    // cartefidelite_new
                    if ('/resto/carte/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::newAction',  '_route' => 'cartefidelite_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_cartefidelite_new;
                        }

                        return $ret;
                    }
                    not_cartefidelite_new:

                    // cartefidelite_edit
                    if (preg_match('#^/resto/carte/(?P<idC>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cartefidelite_edit']), array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::editAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_cartefidelite_edit;
                        }

                        return $ret;
                    }
                    not_cartefidelite_edit:

                    // cartefidelite_delete
                    if (preg_match('#^/resto/carte/(?P<idC>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cartefidelite_delete']), array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::deleteAction',));
                        if (!in_array($requestMethod, ['DELETE'])) {
                            $allow = array_merge($allow, ['DELETE']);
                            goto not_cartefidelite_delete;
                        }

                        return $ret;
                    }
                    not_cartefidelite_delete:

                    // cartefidelite_transformer
                    if ('/resto/carte/transformer' === $pathinfo) {
                        return array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::transformerAction',  '_route' => 'cartefidelite_transformer',);
                    }

                    // cartefidelite_show1
                    if (preg_match('#^/resto/carte/(?P<idC>[^/]++)/abonnements$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'cartefidelite_show1']), array (  '_controller' => 'RestoBundle\\Controller\\cartefideliteController::showListeAboAdminAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_cartefidelite_show1;
                        }

                        return $ret;
                    }
                    not_cartefidelite_show1:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, ['GET'])) {
                            $allow = array_merge($allow, ['GET']);
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/read')) {
                // read
                if ('/read' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::readAction',  '_route' => 'read',);
                }

                // read1
                if ('/read1' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::read1Action',  '_route' => 'read1',);
                }

            }

            elseif (0 === strpos($pathinfo, '/rec')) {
                // recherche_reclamation
                if ('/rechercher' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::searchAction',  '_route' => 'recherche_reclamation',);
                }

                // recents
                if ('/recents' === $pathinfo) {
                    return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::recentsAction',  '_route' => 'recents',);
                }

                if (0 === strpos($pathinfo, '/reclamation_api')) {
                    // readMobile
                    if ('/reclamation_api/readMobile' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::readMobileAction',  '_route' => 'readMobile',);
                    }

                    // findMobile
                    if (0 === strpos($pathinfo, '/reclamation_api/findMobile') && preg_match('#^/reclamation_api/findMobile/(?P<str>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'findMobile']), array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::findMobileAction',));
                    }

                    // createMobile
                    if ('/reclamation_api/createMobile' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::createMobileAction',  '_route' => 'createMobile',);
                    }

                    if (0 === strpos($pathinfo, '/reclamation_api/a')) {
                        // ajoutMobile
                        if ('/reclamation_api/ajoutMobile' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::ajoutMobileAction',  '_route' => 'ajoutMobile',);
                        }

                        // affichageMobile
                        if ('/reclamation_api/affichageMobile' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::affichageMobileAction',  '_route' => 'affichageMobile',);
                        }

                        // allMobile
                        if ('/reclamation_api/allMobile' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle:MapLocation:allMobile',  '_route' => 'allMobile',);
                        }

                    }

                    // newMobile
                    if ('/reclamation_api/newMobile' === $pathinfo) {
                        return array (  '_controller' => 'ReclamationBundle:MapLocation:newMobile',  '_route' => 'newMobile',);
                    }

                    if (0 === strpos($pathinfo, '/reclamation_api/gettotalperMobile')) {
                        // gettotalperMobile
                        if ('/reclamation_api/gettotalperMobile' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::gettotalperMobileAction',  '_route' => 'gettotalperMobile',);
                        }

                        // gettotalperMobile1
                        if ('/reclamation_api/gettotalperMobile1' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::gettotalperMobile1Action',  '_route' => 'gettotalperMobile1',);
                        }

                        // gettotalperMobile2
                        if ('/reclamation_api/gettotalperMobile2' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::gettotalperMobile2Action',  '_route' => 'gettotalperMobile2',);
                        }

                        // gettotalperMobile3
                        if ('/reclamation_api/gettotalperMobile3' === $pathinfo) {
                            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::gettotalperMobile3Action',  '_route' => 'gettotalperMobile3',);
                        }

                    }

                }

            }

        }

        // ichh_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ichhBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ichh_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_ichh_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'ichh_homepage'));
            }

            return $ret;
        }
        not_ichh_homepage:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, ['POST'])) {
                        $allow = array_merge($allow, ['POST']);
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

            // listNonapprouve
            if ('/listNonapprouve' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::listNonapprouveAction',  '_route' => 'listNonapprouve',);
            }

            // listapprouve
            if ('/listapprouve' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::listapprouveAction',  '_route' => 'listapprouve',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        // sandbox_pdfexample
        if ('/pdf' === $pathinfo) {
            return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::pdfAction',  '_route' => 'sandbox_pdfexample',);
        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // notification_list
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_list']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',));
            }

            // notification_mark_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_seen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',));
            }

            // notification_mark_as_unseen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/mark_as_unseen/(?P<notification>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_as_unseen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',));
            }

            // notification_mark_all_as_seen
            if (preg_match('#^/notifications/(?P<notifiable>[^/]++)/markAllAsSeen$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'notification_mark_all_as_seen']), array (  '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',));
            }

        }

        // reclamation_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::createAction',  '_route' => 'reclamation_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_reclamation_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reclamation_homepage'));
            }

            return $ret;
        }
        not_reclamation_homepage:

        // create
        if ('/create' === $pathinfo) {
            return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::createAction',  '_route' => 'create',);
        }

        // update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'update']), array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::updateAction',));
        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'delete']), array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::deleteAction',));
        }

        // detaile
        if (0 === strpos($pathinfo, '/detaile') && preg_match('#^/detaile/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'detaile']), array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::showdetaileAction',));
        }

        if (0 === strpos($pathinfo, '/trier')) {
            // trier
            if ('/trier' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::trierAction',  '_route' => 'trier',);
            }

            // trier1
            if ('/trier1' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::trier1Action',  '_route' => 'trier1',);
            }

        }

        elseif (0 === strpos($pathinfo, '/affichage')) {
            // affichage
            if ('/affichage' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::affichageAction',  '_route' => 'affichage',);
            }

            // affichage1
            if ('/affichage1' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::affichage1Action',  '_route' => 'affichage1',);
            }

        }

        elseif (0 === strpos($pathinfo, '/ajout')) {
            // ajout
            if ('/ajout' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::ajoutAction',  '_route' => 'ajout',);
            }

            // ajout1
            if ('/ajout1' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::ajoutAction',  '_route' => 'ajout1',);
            }

        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'supprimer']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/search')) {
            // search
            if ('/search' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::searchAction',  '_route' => 'search',);
            }

            // searchdate
            if ('/searchdate' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::searchdateAction',  '_route' => 'searchdate',);
            }

        }

        elseif (0 === strpos($pathinfo, '/mo')) {
            // modifier
            if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'modifier']), array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::modifierAction',));
            }

            // moyNote
            if ('/moyNote' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::moyNoteAction',  '_route' => 'moyNote',);
            }

            // moyId
            if ('/moyId' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::moyIdAction',  '_route' => 'moyId',);
            }

        }

        elseif (0 === strpos($pathinfo, '/message')) {
            // message
            if ('/message' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::messageAction',  '_route' => 'message',);
            }

            // messagesorti
            if ('/messagesorti' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::message1Action',  '_route' => 'messagesorti',);
            }

        }

        // approved
        if (0 === strpos($pathinfo, '/Approved') && preg_match('#^/Approved/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'approved']), array (  '_controller' => 'ReclamationBundle\\Controller\\DefaultController::approvedAction',));
        }

        // venir
        if ('/venir' === $pathinfo) {
            return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::venirAction',  '_route' => 'venir',);
        }

        if (0 === strpos($pathinfo, '/RatingsNbre')) {
            // RatingsNbre
            if ('/RatingsNbre' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::NbreNoteAction',  '_route' => 'RatingsNbre',);
            }

            // RatingsNbre1
            if ('/RatingsNbre1' === $pathinfo) {
                return array (  '_controller' => 'ReclamationBundle\\Controller\\EvaluationController::moyNote1Action',  '_route' => 'RatingsNbre1',);
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
