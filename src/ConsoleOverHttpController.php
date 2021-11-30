<?php

namespace OptimistDigital\LaravelConsoleOverHttp;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class ConsoleOverHttpController extends BaseController
{
    protected function console(Request $request)
    {
        $data = $request->validate([
            'command' => 'required',
        ]);

        $process = new Process(explode(' ', $data['command']));
        $process->setWorkingDirectory(base_path());
        $process->start();

        echo '<html><body style="background:#000;font-family:monospace;">';

        foreach ($process as $type => $data) {
            if ($process::OUT === $type) {
                echo "\n<span style='color:#ccc'>" . $data . "</span><br />";
            } else {
                echo "\n<span style='color:red'>" . $data . "</span><br />";
            }
        }

        return '';
    }
}
