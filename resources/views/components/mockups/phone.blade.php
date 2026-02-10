@extends('layouts.app')

@section('content')
    <x-layout.component-showcase title="Mockup Phone"
        description="A component that simulates a mobile device, ideal for showcasing mobile apps or responsive designs."
        componentPath="ui/mockup-phone.blade.php" usage='<x-ui.mockup-phone>
        Mobile content here...
    </x-ui.mockup-phone>'>
        <x-ui.mockup-phone>
            <div class="p-6 space-y-6">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold italic tracking-tight">Shade.</h2>
                    <div
                        class="size-8 rounded-full bg-primary flex items-center justify-center text-primary-foreground text-xs font-bold">
                        JD</div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="aspect-square rounded-2xl bg-muted border p-4 flex flex-col justify-end">
                        <span class="text-xs font-semibold">Activity</span>
                        <span class="text-lg font-bold">1,234</span>
                    </div>
                    <div class="aspect-square rounded-2xl bg-primary p-4 flex flex-col justify-end text-primary-foreground">
                        <span class="text-xs font-semibold">Growth</span>
                        <span class="text-lg font-bold">+12%</span>
                    </div>
                </div>

                <div class="space-y-3 pt-2">
                    <h3 class="text-sm font-semibold text-muted-foreground uppercase tracking-wider">Recent Activity</h3>
                    @foreach([1, 2, 3] as $i)
                        <div class="flex items-center gap-3 p-3 rounded-xl border bg-card">
                            <div class="size-10 rounded-lg bg-muted flex items-center justify-center">
                                <svg class="size-5 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 2v20" />
                                    <path d="m17 7-5-5-5 5" />
                                    <path d="m17 17-5 5-5-5" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium">Transaction #{{$i}}0{{$i}}</p>
                                <p class="text-[10px] text-muted-foreground">Today at 12:{{$i}}0 PM</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </x-ui.mockup-phone>
    </x-layout.component-showcase>
@endsection