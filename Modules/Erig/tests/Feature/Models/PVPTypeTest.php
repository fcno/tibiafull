<?php

use Modules\Erig\Models\PVPType;

test('all hasMany ralationships', function () {
    // Arrange
    $pvp_type = PVPType::factory()->hasWorlds(2)->create();

    // Assert
    expect($pvp_type->worlds)->toHaveCount(2);
});
