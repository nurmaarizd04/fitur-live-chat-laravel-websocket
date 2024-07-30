<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {

        try {
            $message = $request->input('message');

            // Broadcast the message to the WebSocket channel
            broadcast(new MessageSent($message));


            DB::table('messages')->insert([
                "user_id"               => 1,
                "messages"               => 'asdada',
                "created_at"            => Carbon::now(),
                "updated_at"            => Carbon::now()
            ]);

            // Kembalikan respons yang mencerminkan data yang diterima
            return response()->json([
                'status' => true,
                'message' => $message,
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating messafe: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
