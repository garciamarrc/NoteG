<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight break-words">
            {{ __($note->title) }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <div class="flex justify-between">
                            <x-back-icon href="{{ route('dashboard') }}" />
                            <div class="flex gap-5">
                                <a href="{{ route('notes.edit', $note) }}">
                                    <x-blue-button type="button" :text="'Editar'"></x-blue-button>
                                </a>
                                <span>
                                    <x-red-button onclick="HandleDeleteNote()" type="button" :text="'Eliminar'" />
                                </span>
                            </div>
                        </div>
                        <h1 class="text-4xl break-words">{{ $note->title }}</h1>
                        <div class="mt-4">
                            <p class="text-gray-700 text-base mb-4 break-words">{!! nl2br($note->description) !!}</p>
                        </div>
                        <div class="mt-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form id="notes-destroy-form" action="{{ route('notes.destroy', $note) }}" method="POST">
        @csrf
    </form>
    @push('scripts')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function HandleDeleteNote() {
                Swal.fire({
                    title: '¿De verdad quieres eliminar esta nota?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626',
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: `Cancelar`,
                }).then(({
                    isConfirmed
                }) => {
                    if (isConfirmed) {
                        document.getElementById('notes-destroy-form').submit();
                    }
                })
            }
        </script>
    @endpush
</x-app-layout>
