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
    public string $title       = '';
    public string $description = '';
    public bool   $published   = false;

    public function mount(Reservation $reservation): void
    {
        $this->model = $reservation;
        if ($this->model->id) {
            $this->title = $this->model->title;
            $this->description = $this->model->description;
            $this->published = $this->model->published->value;
        }
    }

    protected function rules(): array
    {
        return [
            'title'       => 'required|string',
            'description' => 'required|string',
            'published'   => 'required'
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
