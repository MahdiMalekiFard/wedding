<?php

namespace App\Livewire\Web\Pages;

use App\Enums\BooleanEnum;
use App\Enums\PageTypeEnum;
use App\Models\Blog;
use App\Models\Opinion;
use App\Models\Page;
use App\Models\Portfolio;
use App\Actions\Reservation\StoreReservationAction;
use App\Mail\ReservationRequestMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Slider;
use Illuminate\View\View;
use Livewire\Component;

class HomePage extends Component
{
    public string  $name        = '';
    public string  $email       = '';
    public int     $guest       = 10;
    public string  $date        = '';
    public ?string $description = '';
    public ?string $successMessage = null;

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

        $this->successMessage = 'Tak! Din forespørgsel er sendt. Vi vender tilbage snarest.';
    }

    public function clearSuccess(): void
    {
        $this->successMessage = null;
    }
    
    public function render(): View
    {
        $sliders = Slider::where('published', BooleanEnum::ENABLE)->get();
        $blogs = Blog::where('published', BooleanEnum::ENABLE)->limit(3)->get();
        $aboutUsPage = Page::where('type', PageTypeEnum::ABOUT_US)->first();
        $portfolios = Portfolio::where('published', BooleanEnum::ENABLE)->limit(3)->get();
        $opinions = Opinion::where('published', BooleanEnum::ENABLE)->orderByDesc('ordering')->get();

        return view('livewire.web.pages.home-page', [
            'blogs'       => $blogs ?? [],
            'sliders'     => $sliders ?? [],
            'aboutUsPage' => $aboutUsPage,
            'portfolios'  => $portfolios ?? [],
            'opinions'    => $opinions ?? [],
        ])
            ->layout('components.layouts.web');
    }
}
