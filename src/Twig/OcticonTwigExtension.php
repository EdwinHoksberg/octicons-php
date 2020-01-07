<?php declare(strict_types=1);

namespace Octicons\Twig;

use Octicons\Octicon;
use Octicons\Options;
use Twig\Extension\AbstractExtension;

class OcticonTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new \Twig_Function('octicon', function (string $name, $classes = '', int $ratio = 1) {
                $octicon = new Octicon();
                $options = new Options();

                if (!empty($classes)) {
                    $options->addClass($classes);
                }

                $options->setRatio($ratio);

                return new \Twig_Markup($octicon->icon($name, $options)->toSvg(), 'UTF-8');
            }),
        ];
    }
}
