<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ToastDanger extends Component
{
    /**
     * Create a new component instance.
     */
    public string $message;
    public string $toastType;
    public function __construct(string $message, string $toastType)
    {
        $this->toastType = $toastType;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.toast-danger');
    }
}
