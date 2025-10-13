<?php

namespace App\Livewire\Web\Pages;

use App\Actions\ContactUs\StoreContactUsAction;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Exception;

class ContactUsPage extends Component
{
    #[Rule('required|string|min:2|max:255')]
    public string $name = '';

    #[Rule('required|email|max:255')]
    public string $email = '';

    #[Rule('nullable|numeric|digits_between:6,20')]
    public ?string $phone = null;

    #[Rule('nullable|string|max:255')]
    public ?string $subject = null;

    #[Rule('required|string|min:10|max:1000')]
    public string $message = '';

    public bool $isSubmitted = false;
    public ?string $successMessage = null;
    public ?string $errorMessage = null;

    public function clearSuccess(): void
    {
        $this->successMessage = null;
    }

    public function clearError(): void
    {
        $this->errorMessage = null;
    }

    public function submitForm(StoreContactUsAction $storeAction)
    {
        $this->validate();

        try {
            $storeAction->handle([
                'name'    => $this->name,
                'email'   => $this->email,
                'phone'   => $this->phone,
                'subject' => $this->subject,
                'message' => $this->message,
            ]);

            $this->reset(['name', 'email', 'phone', 'subject', 'message']);
            $this->isSubmitted = true;

            $this->successMessage = 'Din besked er blevet sendt! Vi vender tilbage til dig snarest.';
        } catch (Exception $e) {
            $this->errorMessage = 'Der opstod desværre en fejl under afsendelsen af ​​din besked. Prøv igen.';
        }
    }

    public function render(): View
    {
        return view('livewire.web.pages.contact-us-page')
            ->layout('components.layouts.web');
    }
}
