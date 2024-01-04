<?php

namespace App\View\Components\Faq;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqInfoPrint extends Component
{
    public $faq ;
    public $printdes ;
    public $btn ;
    public function __construct(
        $faq = array(),
        $printdes = null,
        $btn = true,
    )
    {
        $this->faq = $faq ;
        $this->printdes = $printdes ;
        $this->btn = $btn ;
    }


    public function render(): View|Closure|string
    {
        return view('components.faq.faq-info-print');
    }
}
