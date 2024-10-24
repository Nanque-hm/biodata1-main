<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Data Siswa') }}
            </h2>
            <a href="{{ route('student.index') }}" class="text-gray-500 hover:text-gray-700">
                <x-secondary-button>
                    Kembali
                </x-secondary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('student.update', $student->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="nis" value="NIS"/>
                            <x-text-input
                                id="nis"
                                name="nis"
                                type="text"
                                class="mt-1 block w-full"
                                value="{{ old('nis', $student->nis) }}"
                                required
                            />
                            <x-input-error class="mt-2" :messages="$errors->get('nis')" />
                        </div>

                        <div>
                            <x-input-label for="name" value="Nama Lengkap"/>
                            <x-text-input
                                id="name"
                                name="name"
                                type="text"
                                class="mt-1 block w-full"
                                value="{{ old('name', $student->name) }}"
                                required
                            />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="gender" value="Jenis Kelamin"/>
                            <div class="mt-2 space-y-2">
                                <div class="flex items-center">
                                    <input
                                        id="gender_male"
                                        type="radio"
                                        value="B"
                                        name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                        {{ (old('gender', $student->gender) == 'B') ? 'checked' : '' }}
                                        required
                                    >
                                    <label for="gender_male" class="ms-2 text-sm font-medium text-gray-900">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input
                                        id="gender_female"
                                        type="radio"
                                        value="G"
                                        name="gender"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500"
                                        {{ (old('gender', $student->gender) == 'G') ? 'checked' : '' }}
                                        required
                                    >
                                    <label for="gender_female" class="ms-2 text-sm font-medium text-gray-900">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>

                            <a href="{{ route('student.index') }}">
                                <x-secondary-button type="button">
                                    {{ __('Batal') }}
                                </x-secondary-button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
