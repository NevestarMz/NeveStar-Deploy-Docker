@extends('layouts.layout')

@section('content')
<div class="min-h-screen bg-gray-100 p-6">
  <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="flex h-[640px]">
      <aside class="w-80 border-r bg-gray-50 p-3">
        <div class="mb-3">
          <h2 class="font-bold">Painel do Agente</h2>
          <div class="mt-2 flex items-center gap-2">
            <button id="btnToggleOnline" class="px-3 py-1 bg-gray-200 rounded">Entrar/Sair</button>
            <span id="onlineState" class="text-sm text-gray-600"></span>
          </div>
        </div>
        <div id="sessionsList" class="space-y-2 overflow-y-auto h-[520px] p-1"></div>
      </aside>

      <main class="flex-1 flex flex-col">
        <div class="p-4 border-b flex justify-between items-center">
          <div>
            <div id="roomTitle" class="font-semibold">Selecione uma sessão</div>
            <div id="roomSubtitle" class="text-xs text-gray-500">Última atualização</div>
          </div>
          <div>
            <button id="refreshBtn" class="px-3 py-1 bg-blue-600 text-white rounded">Atualizar</button>
          </div>
        </div>

        <div id="agentMessages" class="flex-1 p-4 overflow-y-auto bg-gradient-to-b from-white to-gray-50">
          <div id="agentMessagesContainer" class="flex flex-col gap-3"></div>
        </div>

        <div class="p-4 border-t bg-white flex gap-2">
          <textarea id="agentInput" rows="1" class="flex-1 border rounded-lg px-3 py-2" placeholder="Escreva sua resposta..."></textarea>
          <button id="agentSend" class="px-4 py-2 bg-green-600 text-white rounded">Enviar</button>
        </div>
      </main>
    </div>
  </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@push('scripts')
<script type="module" src="{{ Vite::asset('resources/js/agent.js') }}"></script>
@endpush
