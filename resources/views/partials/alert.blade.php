@if (session('status'))
<div class="container">
  <div class="alert bg-blue-100 border-l-4 border-blue text-blue-900 p-6" role="alert">
    <p class="font-bold sep">Información</p>
    <p class="leading-tight">
      {{ session('status') }}
    </p>
  </div>
</div>
{{--@php session()->forget('status'); @endphp--}}
@endif
@if (session('error'))
<div class="container">
  <div class="alert bg-orange-100 border-l-4 border-orange text-orange-900 p-6" role="alert">
    <p class="font-bold">Error</p>
    <p  class="leading-tight">{{ session('error') }}.</p>
  </div>
</div>
{{--@php session()->forget('error'); @endphp--}}
@endif
@if (session('success'))
<div class="alert bg-blue-100 border-l-4 border-blue-400 text-blue p-6" role="alert">
  <p class="font-bold">Exito!</p>
  <p  class="leading-tight">{{ session('success') }}.</p>
</div>
</div>
{{--@php session()->forget('error'); @endphp--}}
@endif