<?php

namespace App\View\Components\Request;

use App\Definitions\Method;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Method $method,
        public string $title,
        public string $subtitle
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.request.form');
    }

    public function evaluateMethod(): string
    {
        return $this->method == Method::GET ? Method::GET->value : Method::POST->value;
    }
}
