<?php

use Octicons\Octicon;
use Octicons\Options;

class OcticonTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function it_can_create_a_icon()
    {
        $octicon = new Octicon();

        $icon = $octicon->icon('gear');

        $this->assertSame('gear', $icon->getName());
        $this->assertSame(14, $icon->getWidth());
        $this->assertSame(16, $icon->getHeight());

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon-gear"
    viewBox="0 0 14 16"
    width="14"
    height="16"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon->toSvg());
    }

    /** @test */
    public function it_can_create_a_icon_with_extra_css_classes()
    {
        $octicon = new Octicon();

        $options = new Options();
        $options->addClass('test');
        $options->addClass(['extra-class', 'background-red']);

        $icon = $octicon->icon('gear', $options);

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear test extra-class background-red"
    viewBox="0 0 14 16"
    width="14"
    height="16"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon->toSvg());

        $options->removeClass('extra-class');

        $icon = $octicon->icon('gear', $options);

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear test background-red"
    viewBox="0 0 14 16"
    width="14"
    height="16"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon->toSvg());
    }

    /** @test */
    public function it_can_create_an_icon_with_a_different_size_ratio()
    {
        $octicon = new Octicon();

        $options = new Options();
        $options->setRatio(3);

        $icon = $octicon->icon('gear', $options);

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear"
    viewBox="0 0 14 16"
    width="42"
    height="48"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon->toSvg());
    }

    /** @test */
    public function it_can_use_the_static_method_shortcut()
    {
        $icon = Octicon::gear();

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear"
    viewBox="0 0 14 16"
    width="14"
    height="16"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon);
    }

    /** @test */
    public function it_can_use_the_static_method_shortcut_with_options()
    {
        $icon = Octicon::gear(['classes' => ['background-gray', 'extra']]);

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear background-gray extra"
    viewBox="0 0 14 16"
    width="14"
    height="16"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon);

        $icon = Octicon::gear([
            'classes' => [
                'background-gray', 'extra'
            ],
            'ratio' => 3,
        ]);

        $this->assertSame(<<<SVG
<svg version="1.1"
    aria-hidden="true"
    class="octicon octicon-gear background-gray extra"
    viewBox="0 0 14 16"
    width="42"
    height="48"
>
<path fill-rule="evenodd" d="M14 8.77v-1.6l-1.94-.64-.45-1.09.88-1.84-1.13-1.13-1.81.91-1.09-.45-.69-1.92h-1.6l-.63 1.94-1.11.45-1.84-.88-1.13 1.13.91 1.81-.45 1.09L0 7.23v1.59l1.94.64.45 1.09-.88 1.84 1.13 1.13 1.81-.91 1.09.45.69 1.92h1.59l.63-1.94 1.11-.45 1.84.88 1.13-1.13-.92-1.81.47-1.09L14 8.75v.02zM7 11c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/>
</svg>
SVG
            , $icon);
    }

    /**
     * @test
     *
     * @expectedException \Octicons\Exceptions\OcticonException
     * @expectedExceptionMessage Function accepts only 1 parameter and it should be an array
     */
    public function it_validates_that_the_static_helper_function_only_accepts_one_parameter()
    {
        $icon = Octicon::gear(['test'], 123);
    }

    /**
     * @test
     *
     * @expectedException \Octicons\Exceptions\OcticonException
     * @expectedExceptionMessage Could not find icon: non-existing-icon
     */
    public function it_fails_when_selecting_a_nonexisting_icon()
    {
        $octicon = new Octicon();

        $octicon->icon('non-existing-icon');
    }

    /** @test */
    public function it_can_load_all_icons()
    {
        $octicon = new Octicon();

        $icons = $octicon->all();

        $this->assertArrayHasKey('gear', $icons);
        $this->assertArrayHasKey('credit-card', $icons);
        $this->assertArrayHasKey('git-pull-request', $icons);
    }
}
