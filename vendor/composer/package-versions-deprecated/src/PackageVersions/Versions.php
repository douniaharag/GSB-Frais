<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'doctrine/annotations' => '1.11.1@ce77a7ba1770462cd705a91a151b6c3746f9c6ad',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.0.2@a3c6479858989e242a2465972b4f7a8642baf0d4',
  'doctrine/dbal' => '2.12.1@adce7a954a1c2f14f85e94aed90c8489af204086',
  'doctrine/doctrine-bundle' => '2.2.1@9e07bb1ff35d35d9ec4597b79e5d05502d7d4d43',
  'doctrine/doctrine-migrations-bundle' => '3.0.1@96e730b0ffa0bb39c0f913c1966213f1674bf249',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.0.1@69eaf2ca5bc48357b43ddbdc31ccdffc0e2a0882',
  'doctrine/orm' => '2.7.4@7d84a4998091ece4d645253ac65de9f879eeed2f',
  'doctrine/persistence' => '2.1.0@9899c16934053880876b920a3b8b02ed2337ac1d',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v4.4.17@627761b47f94affdd8405e65245a8e1bbb810399',
  'symfony/cache' => 'v4.4.17@6d330ca81ce5c98f22224c980507a7f7a7df82e8',
  'symfony/cache-contracts' => 'v2.2.0@8034ca0b61d4dd967f3698aaa1da2507b631d0cb',
  'symfony/config' => 'v4.4.17@4da4a6b07cc7d8d7d3e29842bc9c20401d555065',
  'symfony/console' => 'v4.4.17@c8e37f6928c19816437a4dd7bf16e3bd79941470',
  'symfony/debug' => 'v4.4.20@157bbec4fd773bae53c5483c50951a5530a2cc16',
  'symfony/dependency-injection' => 'v4.4.17@7126a3a25466a29b844c21394aabf6e7cf717b24',
  'symfony/deprecation-contracts' => 'v2.2.0@5fa56b4074d1ae755beb55617ddafe6f5d78f665',
  'symfony/doctrine-bridge' => 'v4.4.17@cc9cc380f51c3ab7ad396fad8b30fc184894e6c1',
  'symfony/dotenv' => 'v4.4.17@6dd958a0c30bdf816ddef5052655a06d87fa343c',
  'symfony/error-handler' => 'v4.4.17@b0887cf8fc692eef2a4cf11cee3c5f5eb93fcfdf',
  'symfony/event-dispatcher' => 'v4.4.17@f029d6f21eac61ab23198e7aca40e7638e8c8924',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/filesystem' => 'v4.4.17@17b83e36a911aefa2cfe04bbf6328ec4c040c1b2',
  'symfony/finder' => 'v4.4.17@9f1d1d883b79a91ef320c0c6e803494e042ef36e',
  'symfony/flex' => 'v1.11.0@ceb2b4e612bd0b4bb36a4d7fb2e800c861652f48',
  'symfony/form' => 'v4.4.17@214e940d48cae3e33483d3ddadfc4d6cb80d1b62',
  'symfony/framework-bundle' => 'v4.4.17@3aea107a3cf50c351a492ab855caa6b2fd0f66a2',
  'symfony/http-client-contracts' => 'v2.3.1@41db680a15018f9c1d4b23516059633ce280ca33',
  'symfony/http-foundation' => 'v4.4.17@9eeb37ec0ff3049c782ca67041648e28ddd75a94',
  'symfony/http-kernel' => 'v4.4.17@9f5605ee05406d8afa40dc4f2954c6a61de3a984',
  'symfony/inflector' => 'v4.4.17@a2ca868d7fc02800db67d1e1b6e5c83882d2aaa6',
  'symfony/intl' => 'v4.4.17@193aef23cdc5d27785e78aaf1ba3f9bfb6e99850',
  'symfony/maker-bundle' => 'v1.24.2@87620ef23319ebbdfc5b51dd6b6e7d12003f4564',
  'symfony/mime' => 'v4.4.17@4148b752f7e961931887410513ce3d9e267d25f2',
  'symfony/options-resolver' => 'v4.4.17@157a252222251310fe50c71012b4e72f01325850',
  'symfony/polyfill-intl-icu' => 'v1.20.0@c44d5bf6a75eed79555c6bf37505c6d39559353e',
  'symfony/polyfill-intl-idn' => 'v1.20.0@3b75acd829741c768bc8b1f84eb33265e7cc5117',
  'symfony/polyfill-intl-normalizer' => 'v1.20.0@727d1096295d807c309fb01a851577302394c897',
  'symfony/polyfill-mbstring' => 'v1.20.0@39d483bdf39be819deabf04ec872eb0b2410b531',
  'symfony/polyfill-php72' => 'v1.20.0@cede45fcdfabdd6043b3592e83678e42ec69e930',
  'symfony/polyfill-php73' => 'v1.20.0@8ff431c517be11c78c48a39a66d37431e26a6bed',
  'symfony/polyfill-php80' => 'v1.20.0@e70aa8b064c5b72d3df2abd5ab1e90464ad009de',
  'symfony/property-access' => 'v4.4.17@ab8184f093095b40c3e7688bc4eb1d0484da327c',
  'symfony/requirements-checker' => 'v2.0.0@e3d5565eb69a4a2195905c8669f32e988c8e6be0',
  'symfony/routing' => 'v4.4.17@08712c5dd5041c03e997e13892f45884faccd868',
  'symfony/service-contracts' => 'v2.2.0@d15da7ba4957ffb8f1747218be9e1a121fd298a1',
  'symfony/stopwatch' => 'v4.4.17@c7a594108ed01c89555c4e1bb123b4a54aee2595',
  'symfony/translation-contracts' => 'v2.3.0@e2eaa60b558f26a4b0354e1bbb25636efaaad105',
  'symfony/twig-bridge' => 'v4.4.17@7d119d2cffb4d11a42690205c2427625c80a060e',
  'symfony/twig-bundle' => 'v4.4.17@9acacb72d30ee1ea0331762906a129a66a9d9883',
  'symfony/var-dumper' => 'v4.4.20@a1eab2f69906dc83c5ddba4632180260d0ab4f7f',
  'symfony/var-exporter' => 'v4.4.17@f04b7d187b120e0a44c18a2d479c2dd0abe99d9c',
  'symfony/yaml' => 'v4.4.17@7531361cf38e4816821b4a12a42542b3c6143ad1',
  'twig/extra-bundle' => 'v3.1.1@a7c5799cf742ab0827f5d32df37528ee8bf5a233',
  'twig/twig' => 'v3.1.1@b02fa41f3783a2616eccef7b92fbc2343ffed737',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'doctrine/data-fixtures' => '1.5.0@51d3d4880d28951fff42a635a2389f8c63baddc5',
  'doctrine/doctrine-fixtures-bundle' => '3.4.0@870189619a7770f468ffb0b80925302e065a3b34',
  'symfony/process' => 'v4.4.17@ec1482f13d53911a8a32e54ba6f9a3b43a57d943',
  'symfony/web-server-bundle' => 'v4.4.17@6e86c6523bc452b595650fc07d621216eac5f373',
  'paragonie/random_compat' => '2.*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  'symfony/polyfill-ctype' => '*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  'symfony/polyfill-iconv' => '*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  'symfony/polyfill-php71' => '*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  'symfony/polyfill-php70' => '*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  'symfony/polyfill-php56' => '*@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
  '__root__' => 'dev-master@b7b577bf890976f4c0c97d0fccdca00eb74fad98',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
