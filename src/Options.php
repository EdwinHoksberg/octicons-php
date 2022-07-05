<?php declare(strict_types=1);

namespace Octicons;

class Options
{
    /**
     * @var array
     */
    private $classes = [];

    /**
     * @var int
     */
    private $height = 16;

    /**
     * @var int
     */
    private $ratio = 1;

    /**
     * @return array
     */
    public function getClasses(): array
    {
        return $this->classes;
    }

    /**
     * @param string|array $class
     *
     * @return Options
     */
    public function addClass($class): Options
    {
        if (\is_string($class)) {
            $this->classes[] = $class;
        }

        if (\is_array($class)) {
            $this->classes = array_merge($this->classes, $class);
        }

        return $this;
    }

    /**
     * @param string $class
     *
     * @return $this
     */
    public function removeClass(string $class)
    {
        $this->classes = \array_diff($this->classes, [$class]);

        return $this;
    }

    /**
     * @return int
     */
    public function getRatio(): int
    {
        return $this->ratio;
    }

    /**
     * @param int $ratio
     *
     * @return Options
     */
    public function setRatio(int $ratio): Options
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Options
     */
    public function setHeight(int $height): Options
    {
        $this->height = $height;

        return $this;
    }
}
