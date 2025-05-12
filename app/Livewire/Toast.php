<?php

namespace App\Livewire;

use Livewire\Component;

class Toast extends Component
{
    protected $listeners = [
        'ToastSuccess' => 'toastSuccess',
        'ToastDanger' => 'toastDanger',
    ];

    protected $toastType;

    public function toastSuccess($message)
    {
        $this->toastType = 'success';
        session()->flash('message', $message);
    }
    public function toastDanger($message)
    {
        $this->toastType = 'danger';
        session()->flash('message', $message);
    }
    public function closeToast()
    {
        session()->forget('message');
        $this->toastType = null;}
    public function render()
    {
        return view('livewire.toast', [
            'toastType' => $this->toastType,
        ]);
    }
}
