@title('Github Account')

<section class="mt-6">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <x-buk-form action="{{ Auth::user()->hasGithubAccount() ? route('settings.github.disconnect') : route('settings.github.connect')}}">
            <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                <div>
                    <h2 class="text-lg leading-6 font-medium text-gray-900">
                        Github Account
                    </h2>

                    <p class="mt-1 text-sm leading-5 text-gray-500">
                        Connect or disconnect your github account.
                    </p>
                </div>
            </div>

            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              @if(Auth::user()->hasGithubAccount())
                <x-buttons.primary-button type="submit">
                    Disconnect Github account
                </x-buttons.primary-button>
              @else
                <x-buttons.primary-button type="submit">
                    Connect Github account
                </x-buttons.primary-button>
              @endif
            </div>
        </x-buk-form>
    </div>
</section>
