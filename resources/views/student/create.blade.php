
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>
    <x-content>
        <form method="post" action="{{ route('student.store') }}" class="mt-6 space-y-6">
            @csrf
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">

            <div>
                <x-input-label for="nis" value="NIS"/>
                <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" value="{{old ('nis')}}" />
                <x-input-error class="mt-2" :messages="$errors->get('nis')" />
            </div>
            <div>
                <x-input-label for="name" value="Nama Lengkap"/>
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{old ('name')}}" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div>
                <x-input-label for="gender" value="Gender"/>
                <div class="flex items-center mb-1">
                    <input id="gender_male" type="radio" value="B" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ old('gender') == 'B' ? 'checked' : '' }}>
                    <label for="gender_male" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                </div>
                <div class="flex items-center mb-1">
                    <input id="gender_female" type="radio" value="G" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ old('gender') == 'G' ? 'checked' : '' }}>
                    <label for="gender_female" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                </div>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <x-primary-button>
                simpan
            </x-primary-button>
        </form>
    </x-content>
    </div>


</x-app-layout>
