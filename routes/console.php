<?php

use Illuminate\Support\Facades\Schedule;

Schedule::command('logcleaner:run', ['--keeplines' => config('logcleaner.log_lines_to_keep'), '--keepfiles' => config('logcleaner.log_files_to_keep')])->daily()->at('01:00');
