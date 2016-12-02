<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Blogger\BlogBundle\BlogBundle(),

            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(), //поддержка библиотеки Monolog для логирования
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(), //mail

            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle(),

            //добавляет несколько аннотаций, которые позволяют значительно упростить контроллеры,
            //вплоть до того что вся логика контроллера будет записана в аннотациях
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            //создает динамическую постраничную навигацию для сайта.
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            //управление js, css, картинки, иконки
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),

            //дает полный набор функционала для работы с пользователями:
            // регистрация, авторизация и прочее в том же духе.
            new FOS\UserBundle\FOSUserBundle(),
            new HWI\Bundle\OAuthBundle\HWIOAuthBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),

            // The SonataAdminBundle
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            //бандл и библиотека для динамической генерации меню. В качестве путей использует роуты.
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // The storage and SonataAdminBundle
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),

            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),

            new Ivory\CKEditorBundle\IvoryCKEditorBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
