<?php

/*
 * This file is part of the Ivory CKEditor package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Hillrange\CKEditor\Twig;

use Hillrange\CKEditor\Renderer\CKEditorRenderer;
use Hillrange\CKEditor\Renderer\CKEditorRendererInterface;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class CKEditorExtension extends \Twig_Extension implements CKEditorRendererInterface
{
    /**
     * @var CKEditorRenderer
     */
    private $renderer;

    /**
     * @param CKEditorRenderer $renderer
     */
    public function __construct(CKEditorRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        $options = ['is_safe' => ['html']];

        return [
            new \Twig_SimpleFunction('ckeditor_base_path', [$this, 'renderBasePath'], $options),
            new \Twig_SimpleFunction('ckeditor_js_path', [$this, 'renderJsPath'], $options),
            new \Twig_SimpleFunction('ckeditor_widget', [$this, 'renderWidget'], $options),
            new \Twig_SimpleFunction('ckeditor_destroy', [$this, 'renderDestroy'], $options),
            new \Twig_SimpleFunction('ckeditor_plugin', [$this, 'renderPlugin'], $options),
            new \Twig_SimpleFunction('ckeditor_styles_set', [$this, 'renderStylesSet'], $options),
            new \Twig_SimpleFunction('ckeditor_template', [$this, 'renderTemplate'], $options),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function renderBasePath($basePath)
    {
        return $this->renderer->renderBasePath($basePath);
    }

    /**
     * {@inheritdoc}
     */
    public function renderJsPath($jsPath)
    {
        return $this->renderer->renderJsPath($jsPath);
    }

    /**
     * {@inheritdoc}
     */
    public function renderWidget($id, array $config, array $options = [])
    {
        return $this->renderer->renderWidget($id, $config, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function renderDestroy($id)
    {
        return $this->renderer->renderDestroy($id);
    }

    /**
     * {@inheritdoc}
     */
    public function renderPlugin($name, array $plugin)
    {
        return $this->renderer->renderPlugin($name, $plugin);
    }

    /**
     * {@inheritdoc}
     */
    public function renderStylesSet($name, array $stylesSet)
    {
        return $this->renderer->renderStylesSet($name, $stylesSet);
    }

    /**
     * {@inheritdoc}
     */
    public function renderTemplate($name, array $template)
    {
        return $this->renderer->renderTemplate($name, $template);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hillrange_ckeditor';
    }
}
