@extends('layouts.app')

@section('content')
    <div class="flex-1 space-y-6 p-8 pt-6">
        <div class="space-y-0.5">
            <h2 class="text-3xl font-bold tracking-tight">Settings</h2>
            <p class="text-muted-foreground">
                Manage your account settings and set e-mail preferences.
            </p>
        </div>

        <div class="flex flex-col space-y-8 lg:flex-row lg:space-x-12 lg:space-y-0">
            <aside class="-mx-4 lg:w-1/5">
                <nav class="flex space-x-2 lg:flex-col lg:space-x-0 lg:space-y-1" x-data="{ current: 'profile' }">
                    <button @click="current = 'profile'"
                        :class="current === 'profile' ? 'bg-muted' : 'hover:bg-transparent hover:underline'"
                        class="inline-flex items-center rounded-md px-4 py-2 text-sm font-medium transition-all text-left">
                        Profile
                    </button>
                    <button @click="current = 'account'"
                        :class="current === 'account' ? 'bg-muted' : 'hover:bg-transparent hover:underline'"
                        class="inline-flex items-center rounded-md px-4 py-2 text-sm font-medium transition-all text-left">
                        Account
                    </button>
                    <button @click="current = 'appearance'"
                        :class="current === 'appearance' ? 'bg-muted' : 'hover:bg-transparent hover:underline'"
                        class="inline-flex items-center rounded-md px-4 py-2 text-sm font-medium transition-all text-left">
                        Appearance
                    </button>
                    <button @click="current = 'notifications'"
                        :class="current === 'notifications' ? 'bg-muted' : 'hover:bg-transparent hover:underline'"
                        class="inline-flex items-center rounded-md px-4 py-2 text-sm font-medium transition-all text-left">
                        Notifications
                    </button>
                </nav>
            </aside>

            <div class="flex-1 lg:max-w-2xl">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-lg font-medium">Profile</h3>
                        <p class="text-sm text-muted-foreground">
                            This is how others will see you on the site.
                        </p>
                    </div>
                    <div class="h-px bg-border"></div>

                    <form class="space-y-8">
                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                Username
                            </label>
                            <input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                value="shadcn" />
                            <p class="text-xs text-muted-foreground italic">
                                This is your public display name.
                            </p>
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                Email
                            </label>
                            <input
                                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                type="email" value="m@example.com" />
                        </div>

                        <div class="space-y-2">
                            <label
                                class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70">
                                Bio
                            </label>
                            <textarea
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                placeholder="I am a software engineer..."></textarea>
                        </div>

                        <x-ui.button type="button">Update profile</x-ui.button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection