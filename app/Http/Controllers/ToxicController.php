<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ToxicController extends Controller
{
    public function checkToxicity(Request $request): JsonResponse
    {
        try {
            $text = $request->input('text');

            $testCommand = escapeshellcmd('python3 /var/www/4um/ai/test.py "'.$text.'"');
            $output = shell_exec($testCommand);

            return response()->json([
                'toxicity_level' => floatval($output)
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Could not process the request'
            ]);
        }

    }
}
