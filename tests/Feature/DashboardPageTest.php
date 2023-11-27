<?php

it('renders the dashboard page', function () {
    $this->get(route('dashboard'))
        ->assertStatus(200)
        ->assertSeeLivewire('dashboard.dashboard');
})->group('dashboard');
