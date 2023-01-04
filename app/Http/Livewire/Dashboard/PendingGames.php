<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Game;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class PendingGames extends Component
{

    public array|Collection $games;

    public function mount()
    {
        try {
            $this->games = Game::query()
                ->with('users')
                ->whereHas('gamePlayers', function ($query) {
                    $query->where('user_id', auth()->user()->id)->orWhere('created_by', auth()->user()->id);
                })
                ->where('status', '=', 'playersvalidation')
                ->get();
        } catch (\Throwable $e) {
            report($e);
            $this->games = [];
        }
    }
    public function render()
    {
        return view('livewire.dashboard.pending-games');
    }
}
