<?php

use Stephenjude\FilamentFeatureFlag\Models\FeatureSegment;
use Stephenjude\FilamentFeatureFlag\Resources\FeatureSegmentResource;
use Stephenjude\FilamentFeatureFlag\Resources\ManageFeatureSegments;

use function Pest\Laravel\get;
use function Pest\Livewire\livewire;

it('can render page', function () {
get(FeatureSegmentResource::getUrl())->assertOk();
    });

it('can list feature segments', function () {
    $segments = FeatureSegment::factory()->count(1)->create();

    livewire(ManageFeatureSegments::class)
        ->assertCanSeeTableRecords($segments);
});

it('can feature segment using email scope', function () {
    $segments = FeatureSegment::factory([

    ])->count(1)->create();

    livewire(ManageFeatureSegments::class)
        ->assertCanSeeTableRecords($segments);
});
