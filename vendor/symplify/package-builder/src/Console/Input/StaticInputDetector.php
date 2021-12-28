<?php

declare (strict_types=1);
namespace RectorPrefix20211228\Symplify\PackageBuilder\Console\Input;

use RectorPrefix20211228\Symfony\Component\Console\Input\ArgvInput;
/**
 * @api
 */
final class StaticInputDetector
{
    public static function isDebug() : bool
    {
        $argvInput = new \RectorPrefix20211228\Symfony\Component\Console\Input\ArgvInput();
        return $argvInput->hasParameterOption(['--debug', '-v', '-vv', '-vvv']);
    }
}
