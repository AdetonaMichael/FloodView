@extends('layouts.app')

@section('content')

<button class="m-5 float-right btn-outline-reg first-line@aware(['propName'])inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest   focus:outline-none  focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" onclick="Livewire.emit('openModal','create-report')">Create Report</button>
        <!-- Details 2 -->

  @foreach ($reports as $report)
  <div class="py-24">
    <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-12 lg:gap-x-12">
        <div class="lg:col-span-7">
            <div class="mb-12 lg:mb-0 xl:mr-14">
                <img class="inline" src="images/details-2.jpg" alt="alternative" />
            </div>
        </div> <!-- end of col -->
        <div class="lg:col-span-5">
            <div class="xl:mt-12">
                <h2 class="mb-6">{{ $report->street.",".$report->state}}</h2>
                <ul class="list mb-7 space-y-2">
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div class="text-xl text-green-600">Coordinate: {{ $report->location}}                         <i class="fa fa-location-dot fa-2xl pl-2"></i></div>

                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div class="text-xl"><span class="text-red-600">Description:</span> {{ $report->description}}</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div class="text-xl"><span class="text-red-600">Date Reproted</span> {{ $report->created_at}}</div>
                    </li>
                    <li class="flex">
                        <i class="fas fa-chevron-right"></i>
                        <div class="text-xl"><span class="text-red-600">Posted By:</span>{{ $report->user->name}}</div>
                    </li>
                </ul>
                <a class="btn-solid-reg popup-with-move-anim mr-1.5" href="#details-lightbox">Contribute</a>
                <a class="btn-outline-reg" href="article.html">Details</a>
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of container -->
</div>
<!-- end of details 2 -->
  @endforeach

@livewire('livewire-ui-modal')
@endsection






