<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.main' shared service.

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'};
$b = ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'};

$c = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $a, [], $b);
$c->setOptions(['login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']);

return $this->services['security.authentication.listener.form.main'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.main']) ? $this->services['security.authentication.session_strategy.main'] : ($this->services['security.authentication.session_strategy.main'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'}, $a, 'main', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \RestoBundle\EventListener\LoginSuccessHandler(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}), ['login_path' => 'fos_user_security_login', 'default_target_path' => '/admin', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false], 'main'), $c, ['check_path' => 'fos_user_security_check', 'use_forward' => false, 'require_previous_session' => false, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], $b, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->load('getSecurity_Csrf_TokenManagerService.php')) && false ?: '_'});
