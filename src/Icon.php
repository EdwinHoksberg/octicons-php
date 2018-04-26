<?php declare(strict_types=1);

namespace Octicons;

class Icon
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $svgPath;

    /**
     * @var Options
     */
    private $options;

    /**
     * @param array $iconData
     * @param Options $options
     */
    public function __construct(array $iconData, Options $options)
    {
        $this->name = $iconData['name'];
        $this->width = $iconData['width'];
        $this->height = $iconData['height'];
        $this->svgPath = $iconData['path'];

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @return Options
     */
    public function getOptions(): Options
    {
        return $this->options;
    }

    /**
     * @return string
     */
    public function toSvg(): string
    {
        $ratioWidth = \round($this->getWidth() * $this->getOptions()->getRatio());
        $ratioHeight = \round($this->getHeight() * $this->getOptions()->getRatio());

        $extraClasses = '';
        if (!empty($this->getOptions()->getClasses())) {
            $extraClasses = ' ' . \implode(' ', $this->getOptions()->getClasses());
        }

        return <<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon-{$this->getName()}{$extraClasses}"
    viewBox="0 0 {$this->getWidth()} {$this->getHeight()}"
    width="{$ratioWidth}"
    height="{$ratioHeight}"
>
{$this->svgPath}
</svg>
SVG;
    }
}
