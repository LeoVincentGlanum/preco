<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
    @if($isDailyRewardAvailable)
        <x-nav-link wire:click="getDailyReward" class="cursor-pointer">
            {{ __('Daily Reward') }}

            <div
                wire:loading.class.remove="hidden"
                wire:target="getDailyReward"
                class="hidden ml-3"
            >
                <div class="flex justify-center w-full">
                    <svg class="animate-spin h-5 w-5 text-custom-primary"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                        <path class="opacity-75" fill="#ffff"
                              d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </div>
            </div>
        </x-nav-link>
    @endif
</div>
