<?php

use App\Services\ManKier;

test('shell command', function () {
    $this->artisan('shell pwd')
         ->expectsOutput(
             <<<'EOF'
            pwd(1) print name of current/working directory
            EOF
         )
         ->assertExitCode(0);
});
