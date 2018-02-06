<?php

/*
 * This file is part of the Ivory CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Hillrange\CKEditor\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class ResourceCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->hasParameter($parameter = 'templating.helper.form.resources')) {
            $container->setParameter(
                $parameter,
                array_merge(
                    ['HillrangeCKEditorBundle:Form'],
                    $container->getParameter($parameter)
                )
            );
        }

        if ($container->hasParameter($parameter = 'twig.form.resources')) {
            $container->setParameter(
                $parameter,
                array_merge(
                    ['@HillrangeCKEditor/Form/ckeditor_widget.html.twig'],
                    $container->getParameter($parameter)
                )
            );
        }
    }
}
