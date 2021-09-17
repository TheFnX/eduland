<x-jet-action-section>
    <x-slot name="title">
        {{ __('Solicitar rol de organizador') }}
    </x-slot>

    <x-slot name="description">
        {{ __('') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-800">
            {{ __('Si organizas o conocés un evento académico y deseas compartir esa información en este sitio web puedes solicitar el rol de oganizador y podras publicar tus eventos.  ') }}
        </div>

        
                    <div class="flex items-center">
                        <div>
                            
                        </div>

                        <div class="ml-3">
                            

        <div class="flex items-center mt-5">
            <x-jet-button wire:click="" wire:loading.attr="disabled">
                {{ __('Enviar solicitud') }}
            </x-jet-button>

        </div>
    </x-slot>
</x-jet-action-section>
