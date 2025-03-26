<?php

use Modules\Erig\Models\TransferType;

test('all hasMany ralationships', function () {
    // Arrange
    $transfer_type = TransferType::factory()->hasWorlds(2)->create();

    // Assert
    expect($transfer_type->worlds)->toHaveCount(2);
});
