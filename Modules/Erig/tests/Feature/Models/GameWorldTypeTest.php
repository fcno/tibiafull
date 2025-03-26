<?php

use Modules\Erig\Models\GameWorldType;

test('all hasMany ralationships', function () {
    // Arrange
    $game_world_type = GameWorldType::factory()->hasWorlds(2)->create();

    // Assert
    expect($game_world_type->worlds)->toHaveCount(2);
});
