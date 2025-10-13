<div>
    <!--==============================
    Breadcrumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="/assets/img/bg/breadcrumb-bg.png" wire:ignore>
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Foretag reservation</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="{{ route('home') }}">Hjem</a></li>
                        <li class="active">Reservation</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Reservation Area
    ==============================-->
    <div class="space" >
        <div class="container">
            <div class="reservation-page">
                <div class="row gx-0 justify-content-center flex-row-reverse">
                    <div class="col-xl-5">
                        <div class="reservation-thumb">
                            <img class="w-100" src="/assets/img/normal/reservation-thumb.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="reservation-form-wrap">
                            <div class="title-area text-center mb-30">
                                <span class="sub-title style2">RSVP
                                </span>
                                <h2 class="sec-title">Foretag reservation</h2>
                            </div>
                            @if($successMessage)
                                <div class="alert alert-success text-start" wire:poll.4s="clearSuccess">{{ $successMessage }}</div>
                            @endif
                            <form wire:submit.prevent="submit" class="reservation-form" wire:loading.attr="data-loading" wire:target="submit">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-user"></i>
                                            <input type="text"
                                                   class="form-control style-border @error('name') is-invalid @enderror"
                                                   wire:model.defer="name"
                                                   id="name"
                                                   placeholder="Indtast fulde navn"
                                                   autocomplete="name"
                                            >
                                            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-envelope"></i>
                                            <input type="email"
                                                   class="form-control style-border @error('email') is-invalid @enderror"
                                                   wire:model.defer="email"
                                                   id="email"
                                                   placeholder="E-mailadresse"
                                                   autocomplete="email"
                                            >
                                            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-users"></i>
                                            <input type="number"
                                                   min="10"
                                                   class="form-control style-border @error('guest') is-invalid @enderror"
                                                   wire:model.defer="guest"
                                                   id="guest"
                                                   placeholder="Antal gæster"
                                            >
                                            @error('guest') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="far fa-calendar-alt"></i>
                                            <input type="date"
                                                   class="form-control style-border @error('date') is-invalid @enderror"
                                                   wire:model.defer="date"
                                                   id="date"
                                                   min="{{ now()->toDateString() }}"
                                            >
                                            @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group style-4 form-icon-left">
                                            <i class="fas fa-box"></i>
                                            <input type="text"
                                                   class="form-control style-border @error('description') is-invalid @enderror"
                                                   wire:model.defer="description"
                                                   id="description"
                                                   placeholder="Tilføj beskrivelse"
                                            >
                                            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn col-12 text-center">
                                    <button type="submit" class="btn" wire:loading.attr="disabled">
                                        <span wire:loading.remove>FORETAG RESERVATION</span>
                                        <span wire:loading>Sender...</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
