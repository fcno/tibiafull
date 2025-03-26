<?php

use Modules\Erig\Models\GameWorldType;
use Modules\Erig\Models\Location;
use Modules\Erig\Models\PVPType;
use Modules\Erig\Models\TransferType;
use Modules\Erig\Models\World;

test('all belongsTo ralationships', function () {
    // Arrange
    $world = World::factory()->create();

    // Assert
    expect($world->gameWorldType)->toBeInstanceOf(GameWorldType::class)
        ->and($world->location)->toBeInstanceOf(Location::class)
        ->and($world->pvpType)->toBeInstanceOf(PVPType::class)
        ->and($world->transferType)->toBeInstanceOf(TransferType::class);
});
