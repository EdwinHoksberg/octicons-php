<?php declare(strict_types=1);

namespace Octicons\Twig;

use Octicons\{Octicon, Options};
use Twig\Extension\AbstractExtension;
use Twig\{TwigFunction, Markup};

class OcticonTwigExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('octicon', function (string $name, $classes = '', int $ratio = 1) {
                $octicon = new Octicon();
                $options = new Options();

                if (!empty($classes)) {
                    $options->addClass($classes);
                }

                $options->setRatio($ratio);

                return new Markup($octicon->icon($name, $options)->toSvg(), 'UTF-8');
            }),
        ];
    }
}
