<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}

                    <h1>name : {{auth()->user()->name}}</h1>
                    <hr>

                    <h1>email : {{auth()->user()->email}}</h1>
                    <hr>
                    <h1>hobbie : {{auth()->user()->hobbie}}</h1>
                    <hr>
                    <h1>age : {{auth()->user()->age}}</h1>
                    <hr>
                    <form action={{ route('notification.mailsend') }} method="POST">
                        @csrf
                        <div><label for="subject">subject</label>
                            <input type="text" name="subject" id="subject">
                        </div>
                        <div><label for="mail">mail</label>
                            <input type="text" name="mail" id="mail">
                        </div>
                        <div><label for="texte">texte</label>
                            <input type="text" name="texte" id="texte">
                        </div>
                        <button type="submit">send</button>
                    </form>

                    {{-- <form action={{ route('notification.mailsend') }} method="POST">
                        @csrf

                        <button type="submit">send</button>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
