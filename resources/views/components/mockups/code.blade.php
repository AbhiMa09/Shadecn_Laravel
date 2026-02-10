@extends('layouts.app')

@section('content')
  <x-layout.component-showcase title="Mockup Code"
    description="A component for displaying code snippets in a terminal or code editor style window."
    componentPath="ui/mockup-code.blade.php" usage='<x-ui.mockup-code filename="app.py">
      print("Hello World")
  </x-ui.mockup-code>'>
    <x-ui.mockup-code filename="ShadeComponent.php" class="w-full max-w-xl">
      <span class="text-slate-500">1</span> <span class="text-purple-400">namespace</span> App\View\Components;
      <span class="text-slate-500">2</span>
      <span class="text-slate-500">3</span> <span class="text-purple-400">class</span> <span
        class="text-yellow-400">Alert</span> <span class="text-purple-400">extends</span> <span
        class="text-blue-400">Component</span>
      <span class="text-slate-500">4</span> {
      <span class="text-slate-500">5</span> <span class="text-purple-400">public</span> <span
        class="text-purple-400">function</span> <span class="text-blue-400">render</span>()
      <span class="text-slate-500">6</span> {
      <span class="text-slate-500">7</span> <span class="text-purple-400">return</span> <span
        class="text-blue-400">view</span>(<span class="text-green-400">'components.ui.alert'</span>);
      <span class="text-slate-500">8</span> }
      <span class="text-slate-500">9</span> }
    </x-ui.mockup-code>
  </x-layout.component-showcase>
@endsection