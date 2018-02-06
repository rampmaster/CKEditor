<?php
namespace Hillrange\CKEditor;

use Hillrange\CKEditor\DependencyInjection\Compiler\ResourceCompilerPass;
use Hillrange\CKEditor\DependencyInjection\Compiler\TemplatingCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HillrangeCKEditorBundle extends Bundle
{
	/**
	 * @param ContainerBuilder $container
	 */
	public function build(ContainerBuilder $container)
	{
		$container
			->addCompilerPass(new ResourceCompilerPass())
			->addCompilerPass(new TemplatingCompilerPass());
	}
}
