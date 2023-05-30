@extends('frontend.layouts.app')
@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner">
                        @foreach ($slider as $sd)
                            <div class="carousel-item @if ($sd->id == $slider->first()->id) active @endif">
                                <img src="{{ $sd->image() }}" class="d-block w-100 gambar-slider" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <p>{{ $sd->program->name ?? '-' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div> <!-- end of container -->

    <section class="campaign">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-12">
                    <h2 class="text-center">Donasi ke orang yang membutuhkan</h2>
                </div>
            </div>
            <div class="row border-0 bg-transparent">
                @forelse ($items as $item)
                    <div class="col-md-4 col-6 mb-4">
                        <a href="{{ route('campaign.show', $item->slug) }}" class="text-decoration-none text-dark">
                            <div class="card border-0 card-campaign">
                                <div class="card-body ">
                                    <img src="{{ $item->image() }}" alt="" class="img-fluid img" />
                                    <h6 class="title mt-3">
                                        {{ $item->name }}
                                    </h6>
                                    <div class="progress mb-3 mt-3">
                                        <div class="progress-bar" style="width: {{ $item->percent() }}%;" role="progressbar"
                                            aria-label="Basic example" aria-valuenow="{{ $item->percent() }}"
                                            aria-valuemin="0" aria-valuemax="100">

                                        </div>
                                    </div>
                                    <span class="nominal">Rp. {{ number_format($item->donation_target, 0, ',','.') }}</span>
                                    <div class="d-flex mt-2 justify-content-between">
                                        <span>{{ $item->transactions_success_count }} Donatur</span>
                                        <span>{{ $item->count_day() }} Hari Lagi</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p class="text-center">Campain tidak ditemukan!</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
@push('styles')
    <style>
        .gambar-slider {
            max-height: 700px;
        }
        .card-campaign{
            max-height:400px;
        }
    </style>
@endpush
