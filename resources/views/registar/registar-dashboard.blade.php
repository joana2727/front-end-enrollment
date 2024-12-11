@extends('layouts.admin.navbar')

@section('content')

<!-- Dashboard Stats -->
<div class="flex flex-wrap gap-6 mb-8 p-5 bg-light-gray rounded-2xl mx-auto mt-10">
    <!-- Card 1 -->
    <div class="bg-yellow shadow-small rounded-lg p-6 flex-1 flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Regular</h3>
            <p class="text-4xl text-dark font-bold mt-2">753</p>
           
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-lime-green shadow-small rounded-lg p-6 flex-1 flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Number of Registrar Users</h3>
            <p class="text-4xl text-dark font-bold">30</p>
        </div>
        <img src="{{ asset('assets/user-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
    </div>

    <!-- Card 3 -->
    <div class="bg-lime-green shadow-small rounded-lg p-6 flex-1 flex items-center justify-between">
        <div>
            <h3 class="text-sm font-thin text-gray">Number of Department Users</h3>
            <p class="text-4xl text-dark font-bold">25</p>
        </div>
        <img src="{{ asset('assets/user-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
    </div>

    <!-- Card 4 -->
    <div class="bg-lime-green shadow-small rounded-lg p-6 flex-1 flex items-center justify-between relative">
        <div>
            <h3 class="text-sm font-thin text-gray">Number of Department Users</h3>
            <p class="text-4xl text-dark font-bold">25</p>
        </div>
        <img src="{{ asset('assets/user-icon.svg') }}" alt="Users Icon" class="ml-4 w-9 h-9">
        <div class="absolute top-2 right-2 w-3 h-3 rounded-full bg-black"></div> <!-- Small black circle -->
    </div>
</div>

@endsection
