<?php

namespace App\Livewire\Web\Pages;

use App\Actions\Reservation\StoreReservationAction;
use App\Mail\ReservationRequestMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Livewire\Component;

class ReservationPage extends Component
{
    public string  $name        = '';
    public string  $email       = '';
    public int     $guest       = 10;
    public string  $date        = '';
    public ?string $description = '';

    public function rules(): array
    {
        return [
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email|max:255',
            'guest'       => 'required|integer|min:10',
            'date'        => 'required|date|after_or_equal:today',
            'description' => 'nullable|string|max:5000',
        ];
    }

    protected function validationAttributes(): array
    {
        // For friendly Danish error labels
        return [
            'name'        => 'fulde navn',
            'email'       => 'e-mailadresse',
            'guest'       => 'antal gæster',
            'date'        => 'dato',
            'description' => 'beskrivelse',
        ];
    }

    public function submit(): void
    {
        $validated = $this->validate();
        $reservation = StoreReservationAction::run($validated);

        Mail::to(config('mail.reservations_to'))?->send(new ReservationRequestMailable($reservation));

        // Reset fields and notify UI
        $this->reset(['name','email','guest','date','description']);
        $this->guest = 10;

        $this->dispatch('reservation-success', message: 'Tak! Din forespørgsel er sendt. Vi vender tilbage snarest.');
    }

    public function render(): View
    {
        return view('livewire.web.pages.reservation-page')
            ->layout('components.layouts.web');
    }
}
