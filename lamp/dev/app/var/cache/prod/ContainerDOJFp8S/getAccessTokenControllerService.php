<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC9TVAZFxCEJrn0'."\n".'x0icqNldyeEfOuN9/D8J7+88ABczItL64b2lv3Y5vIxA2AGUIs79XvXx82gUmzqu'."\n".'27GJrj9QoxRW3XUkf61j1tSLwmogGzpn1Q5QOgEWY09TwDCHR85TNCCJP03JHMX1'."\n".'tyoY6GRa0lZB22DheL3FUoBdhsXrjrhUUiUgcxsaLuD7H/0h3evb2CD/zoixfFBY'."\n".'dzkGhHcZx6TKc5QNeO7rLkQlpXqsKM4s2nOq1FD36zSmDgPyHlNshAWRQ+FUjGW8'."\n".'5TaNxAFCSKaP5GRCbGORIudJ74T44U3rYBxpf9BUDqyQ3l3CpEbuEniuERJ77XO8'."\n".'trx4+QnlAgMBAAECggEABZlsVZmnjOkiVfmxDaU27L3EcWqKARd9e9tDfchY51PP'."\n".'3sjflbAAnLuVgHODNHEFI1x0NOhouzdOOI7aBQMI72crelhJlz9JjyrzFYE2J2X2'."\n".'x8x3BGt6zcE5PvZv2QiIM1DW54heUiUOO/LjhWIWWdNf5snI51JtdpE2p82NPCbr'."\n".'CN+wH8KVGxbtx+VmU1VCM2ZCxq4zp6ZB/mAQ00tWxDPmzJw4GS5l9NBk6OOkiXi3'."\n".'BRHafwDMC4kMQDXUAItDJvykEtt+oim2Ooyk2sWNWhVX1UD3gqQITbH+GmINvfL+'."\n".'1GRpp1B9xLe3vk1gPytNcE5M5bmOX0wxJRdZj/dXDwKBgQDh2Qfc7tg/VJOCNjar'."\n".'X4oJr1uY0dgkpHxFxsRdKghcesqWISdmSWgwrM121gkERWFWYqzd/JwKE0yvXqGm'."\n".'a7NWM9Tu9w/QfJtzrt1KuxsBxLcaH4VRcicArpyrG5LgNkfKIifVfam9fiQLBffK'."\n".'UNwFuXaqLwGzWlOn5ALh7i/EwwKBgQDWkzrUx4hjPl87y9IdCTu2Ph8kSIJ2jxd2'."\n".'k83F01nTgDI2JV3IBrDIYmJsV0OHfP+HZsDCAYLzc+Sbbl7u3/x+isl+EoB21vie'."\n".'js6elBNbUikqXvc9H/bRQfcblBgWZe13+z0oQMxbLWifS37m1b7uH/m9uKUMvpzX'."\n".'XUrYUkbsNwKBgBLKqSHT6cBTPDbQZfoaZ/ToV1m+1BowaXqw0DPkRG/Vc7fMKGgV'."\n".'YYrzReFGa9ekIjY63aFW3HDmLDJHUHH1ciWRCH2dpv408AZPHXCTYurhwE53IvOk'."\n".'6OPgo36FO9JWEeEauG/GFfKDZWJZa8W0tqnvRZVhdeXDdUR571d3JxhbAoGBAJV4'."\n".'Mb8Ozz7yr7wjmtWHHQUx+Nd5ewfDXYDILMrlEul1n4SAOvefUX4EqrL1hqDWvdlA'."\n".'Bn4eN24HCPQMyixz8prjasBbewlNbhplOCDW3TT74pkVVfxKS9Awt0WKv8y6a9Ts'."\n".'OgnUOYY592sfV+LMehe+RmWWPcLG9NJAtmZByg25AoGAVO1KmWngDmnrrF5FBqlh'."\n".'U2wZ6U+T5cZrJsxtVVY4AtNWmk+AJfNfua3oQvBBfn1LajQz3O9o0VXneMI9G3Rm'."\n".'xNnwzJJwMTw54Xvjk23zud707ndiK63823U8GiyKEHvBpuHLMaOEAQ1UCx+jLGI/'."\n".'Jj9uvJky8Jk/zzf3wWcbz7Q='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000808b76609d57109e46eb6736dd6123ef43ed5d14295a61085a7667e43a5139837968b4e3eb85b30f8b6eaf59c9fba46a3cc6ce047c04a510cd0a3465e32282ed');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);