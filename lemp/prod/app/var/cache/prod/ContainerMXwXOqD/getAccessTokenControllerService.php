<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDALu/RYzNXv/Kj'."\n".'0oy9Sf+S9zrujb2C8WKO0URHKftPcFjlPFC8+yqGMVBVyB8MSr+M0qLFmOina1gC'."\n".'HADgpCYRos5FAvlMQ/NSRWttyIXxUarOG8p853khQWApicyVNtmzTclYfFAhnzMf'."\n".'yU4EQ83pk0CR/IXmrvzv66mmTonj5Qlwq/jnfNN2OQmXz22f3c22C6dcVu8Wr7T1'."\n".'RY5xM7qtLFvEIjmJ/Otq3A7f/DHbJ9vNHvsXWdCe6PDemQx8OKFsUDf/XPDjJ6vK'."\n".'L9bz/XVi6wcapv2mjZOdLg1R4YkIZvFtbHIHRRZehivIj6AK3yXI+s89f/2FCpBp'."\n".'tEMpIQiBAgMBAAECggEAIqUDdfFmWsn/PXGSDfiGQlHftYvnLzEBFaJbZuHGTEyC'."\n".'NfbgziSQBqdipkggcriR3drF3Y2iWTX0ZFL0hIqK01CQUygFVW6FcV4SzvRgUv+o'."\n".'JSYk403eC/TrVymgcAC2j4h1BMbKMjlu/6qsLgAkIVh6giat48dFUSHgUBrl6Cc8'."\n".'X4ggn+eJIWha3/B6IMqlss0cp/IrYIStwOzp5guahlQOc+R/yA/23XLjv4Uj655c'."\n".'2lddP8zt4H9+ntmuIEejz6Pa/McL7r4vy95trLevB/LCZkbd6oCYmvWvbnFdCmuE'."\n".'qiC7m0po+Bx/eqpVAJocdIpn6WFe49JtTPcPXPbhDQKBgQDsvq0ZhAG6giAeoZk/'."\n".'XRhbdxJ7vJg/pS+HwAX1OQBIfwikHLmfiUDqkxewtdgTd5FYg9Ozr69O6bySs/aF'."\n".'4BGRxVHcxOCI/c0RuwRcIqOqhTC8K7n+VTI8Xnp6qu7LB0KlZGztT6tcD1DCAzDr'."\n".'FO7biEOeR0FC+FpiMZBDh86utQKBgQDP0G9MKj6rAewcj4FHF8Ida1xF+jRv6BIk'."\n".'aIH1G1PKX55L/QtmiGhtsprlHpl3k8+fFpss0Famctp9ao57lNmQ+eZnerCRnOFU'."\n".'8K61zWeZ067xC44kxQecRP7PIduYTNRWZoXMzDqRupKU1ujTRBAWc0sf9OETcQFD'."\n".'KLiNaIMGHQKBgG87h4kdhNJkoULDGoWy7+bJo12P1tjQe+yEREhbZ86oIR86f9x9'."\n".'WIreYZsdVVCQNTIpfiZGvU+OcpNbCtEL3jVnSHc56WV0Gg3imMHRZKSRv7wpr1HY'."\n".'JapHmbRY66lo199tt+AoNpMifwcpCKrrQu7SrzKGuBsHJTBNqUKRZIKhAoGBAM4E'."\n".'+kGM4+HOnw/VaLldIVDfHXQ2TwPeExZLEQM4W0IWtyzoKQQ2GSkfVpXsVwKH4934'."\n".'oE+2HyEWXerV13lGoMYsKLHPnPpOh8kYbmvHvXxvslA/P2TOe/P9JoucKkJ7cEpT'."\n".'izP0B+BvEWBDCkBfin9nP0PoFbabYj/9P7DYuoQ1AoGAaUWESEilop26YaVEp1V2'."\n".'rOuzUJKk95l9kRfvZManl4+GfjAjkLTwOHAInNAzOyjpJjTai64TdBIuCndQW6kz'."\n".'YOfeTdIf8rllQC5V05VXqcTQGDaeqSaNFcuPsyGMabqJw1HPBbBhNXhRWRZ5OWMC'."\n".'OsIRxi+V1JT3Xzu5/WvwMQQ='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000cf306533a95544aed9e78a0e3145c1e46af904dcfdc4cd938c314f19a6c3f7557940ea49bed590f157e04d9e7ba2955bb67af6af4a0bb33ff289f90712faebc6');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);