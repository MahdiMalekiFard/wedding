<?php

namespace App\Livewire\Admin\Pages\Reservation;

use App\Actions\Reservation\StoreReservationAction;
use App\Actions\Reservation\UpdateReservationAction;
use App\Models\Reservation;
use Illuminate\View\View;
use Livewire\Component;
use Mary\Traits\Toast;

class ReservationUpdateOrCreate extends Component
{
    use Toast;

    public Reservation   $model;
    public string $name       = '';
    public string $email       = '';
    public string $guest       = '';
    public string $date       = '';
    public string $description = '';

    public function mount(Reservation $reservation): void
    {
        $this->model = $reservation;

        if ($this->model->id) {
            $this->name = $this->model->name;
            $this->email = $this->model->email;
            $this->guest = $this->model->guest;
            $this->date = $this->model->date;
            $this->description = $this->model->description;
        }
    }

    protected function rules(): array
    {
        return [
            'name'       => 'required|string|max:255',
            'email'       => 'required|string|email|max:255',
            'guest'       => 'required|integer|min:10',
            'date'       => 'required|date|after_or_equal:today',
            'description' => 'nullable|string|max:5000',
        ];
    }

    public function submit(): void
    {
        $payload = $this->validate();
        if ($this->model->id) {
            UpdateReservationAction::run($this->model, $payload);
            $this->success(
                title: trans('general.model_has_updated_successfully', ['model' => trans('reservation.model')]),
                redirectTo: route('admin.reservation.index')
            );
        } else {
            StoreReservationAction::run($payload);
            $this->success(
                title: trans('general.model_has_stored_successfully', ['model' => trans('reservation.model')]),
                redirectTo: route('admin.reservation.index')
            );
        }
    }

    public function render(): View
    {
        return view('livewire.admin.pages.reservation.reservation-update-or-create', [
            'edit_mode'          => $this->model->id,
            'breadcrumbs'        => [
                ['link' => route('admin.dashboard'), 'icon' => 's-home'],
                ['link' => route('admin.reservation.index'), 'label' => trans('general.page.index.title', ['model' => trans('reservation.model')])],
                ['label' => trans('general.page.create.title', ['model' => trans('reservation.model')])],
            ],
            'breadcrumbsActions' => [
                ['link' => route('admin.reservation.index'), 'icon' => 's-arrow-left']
            ],
        ]);
    }
}
