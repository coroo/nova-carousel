<?php

namespace Coroowicaksono\NovaSlider;

use Laravel\Nova\Card;

class Slider extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function __construct($component = null)
    {

        parent::__construct($component);

    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'slider';
    }

    public function card(array $card): self
    {
        return $this->withMeta([ 'card' => $card ]);
    }

    public function type(string $type): self
    {
        return $this->withMeta([ 'type' => $type ]);
    }

    public function options(array $options): self
    {
        return $this->withMeta([ 'options' => (object) $options ]);
    }

    public function animations(array $animations): self
    {
        return $this->withMeta([ 'animations' => $animations ]);
    }

    public function title(string $title): self
    {
        return $this->withMeta([ 'title' => $title ]);
    }

    public function subTitle(string $subTitle): self
    {
        return $this->withMeta([ 'subTitle' => $subTitle ]);
    }

    public function model(string $model): self
    {
        return $this->withMeta([ 'model' => $model ]);
    }
}
