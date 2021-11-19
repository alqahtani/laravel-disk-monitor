<?php

it('can display the list of entries', function () {
    $this->get('disk-monitor')
        ->assertOk();
});
