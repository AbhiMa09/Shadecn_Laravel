@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Dropdown Menu"
        description="Displays a menu to the user — such as a set of actions or functions — triggered by a button."
        componentPath="ui/dropdown-menu" usage='<x-ui.dropdown-menu.index>
        <x-ui.dropdown-menu.trigger>
            <x-ui.button variant="outline">Open</x-ui.button>
        </x-ui.dropdown-menu.trigger>
        <x-ui.dropdown-menu.content>
            <x-ui.dropdown-menu.label>Account</x-ui.dropdown-menu.label>
            <x-ui.dropdown-menu.separator />
            <x-ui.dropdown-menu.item>Profile</x-ui.dropdown-menu.item>
        </x-ui.dropdown-menu.content>
    </x-ui.dropdown-menu.index>'>
        <x-ui.dropdown-menu.index>
            <x-ui.dropdown-menu.trigger>
                <x-ui.button variant="outline">
                    Options
                    <svg class="w-4 h-4 ml-2 opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6" />
                    </svg>
                </x-ui.button>
            </x-ui.dropdown-menu.trigger>

            <x-ui.dropdown-menu.content class="w-56">
                <x-ui.dropdown-menu.label>My Account</x-ui.dropdown-menu.label>
                <x-ui.dropdown-menu.separator />

                <x-ui.dropdown-menu.item>
                    <x-slot name="icon">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                    </x-slot>
                    Profile
                </x-ui.dropdown-menu.item>

                <x-ui.dropdown-menu.item>
                    <x-slot name="icon">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="14" x="2" y="5" rx="2" />
                            <line x1="2" x2="22" y1="10" y2="10" />
                        </svg>
                    </x-slot>
                    Billing
                </x-ui.dropdown-menu.item>

                <x-ui.dropdown-menu.item>
                    <x-slot name="icon">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.15-.1a2 2 0 0 1-1-1.72v-.51a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </x-slot>
                    Settings
                </x-ui.dropdown-menu.item>

                <x-ui.dropdown-menu.separator />

                <x-ui.dropdown-menu.item class="text-red-500 hover:text-red-500 hover:bg-red-500/10">
                    <x-slot name="icon">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                            <polyline points="16 17 21 12 16 7" />
                            <line x1="21" x2="9" y1="12" y2="12" />
                        </svg>
                    </x-slot>
                    Log out
                </x-ui.dropdown-menu.item>
            </x-ui.dropdown-menu.content>
        </x-ui.dropdown-menu.index>
    </x-layout.component-showcase>
@endsection