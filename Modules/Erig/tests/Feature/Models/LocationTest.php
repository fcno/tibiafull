<?php

use Modules\Erig\Models\Location;

test('all hasMany ralationships', function () {
    // Arrange
    $location = Location::factory()->hasWorlds(2)->create();

    // Assert
    expect($location->worlds)->toHaveCount(2);
});
