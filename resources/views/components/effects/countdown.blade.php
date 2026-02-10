@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center p-24 bg-white border border-slate-200 rounded-lg shadow-sm">
        <div class="grid grid-flow-col gap-5 text-center auto-cols-max" x-data="{
            days: 15,
            hours: 10,
            minutes: 24,
            seconds: 59,
            init() {
                setInterval(() => {
                    this.seconds--;
                    if (this.seconds < 0) {
                        this.seconds = 59;
                        this.minutes--;
                    }
                     if (this.minutes < 0) {
                        this.minutes = 59;
                        this.hours--;
                    }
                }, 1000);
            }
        }">
            <div class="flex flex-col p-2 bg-slate-50 rounded-box text-slate-900 border border-slate-200 rounded-lg">
                <span class="countdown font-mono text-5xl">
                    <span x-text="days"></span>
                </span>
                days
            </div>
            <div class="flex flex-col p-2 bg-slate-50 rounded-box text-slate-900 border border-slate-200 rounded-lg">
                <span class="countdown font-mono text-5xl">
                    <span x-text="hours"></span>
                </span>
                hours
            </div>
            <div class="flex flex-col p-2 bg-slate-50 rounded-box text-slate-900 border border-slate-200 rounded-lg">
                <span class="countdown font-mono text-5xl">
                    <span x-text="minutes"></span>
                </span>
                min
            </div>
            <div class="flex flex-col p-2 bg-slate-50 rounded-box text-slate-900 border border-slate-200 rounded-lg">
                <span class="countdown font-mono text-5xl">
                    <span x-text="seconds"></span>
                </span>
                sec
            </div>
        </div>
    </div>
@endsection