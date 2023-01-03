<?php

namespace Outl1ne\LaravelConsoleOverHttp;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Log;

class ConsoleOverHttpController extends BaseController
{
    protected function console(Request $request)
    {
        $data = $request->validate([
            'command' => 'required',
        ]);

        $process = new Process(explode(' ', $data['command']));
        $process->setWorkingDirectory(base_path());
        $process->setTimeout(config('console-over-http.process.timeout'));
        $process->start();

        echo '<html><body style="background:#000;font-family:monospace;">';
        $debugLogsEnabled = config('console-over-http.debug_logs');

        foreach ($process as $type => $data) {
            if ($process::OUT === $type) {
                if($debugLogsEnabled) Log::info($data);
                echo "\n<span style='color:#ccc'>" . $data . "</span><br />";
            } else {
                Log::error($data);
                echo "\n<span style='color:red'>" . $data . "</span><br />";
            }
        }

        return '';
    }
}
