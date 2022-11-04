<div>
    
            {{-- The data table --}}

    <div class="flex flex-col">
        <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="table-head">project_id</th>
                                <th class="table-head">Status</th>
                                <th class="table-head">Prio</th>
                                <th class="table-head">email</th>
                                <th class="table-head">buttons</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            
                            @foreach (Auth::user()->projects as $project)
                                    <tr>
                                        <td class="table-data">{{ $project->id }}</td>

                                        <td class="table-data">{{ $project->project_status }}</td>

                                        <td class="table-data">{{ $project->project_priority }}</td>

                                        <td class="table-data">{{ $project->project_person }}</td>

                                        <td class="table-data flex justify-end gap-2">

                                            <x-jet-button wire:click="updateShowModal({{ $project->id }})">
                                                {{ __('Edit') }}
                                            </x-jet-button>
                                            <x-jet-danger-button wire:click="deleteShowModal({{ $project->id }})">
                                                {{ __('Delete') }}
                                                </x-jet-button>
                                                
                                        </td>
                                    </tr>
                            @endforeach

                                <tr>
                                    <td class="table-data" colspan="4"></td>
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

  {{-- Modal Form --}}
  <x-jet-dialog-modal wire:model="modalFormVisible">
    <x-slot name="title">
        {{ __('Save Page') }} {{ $project_id }}
    </x-slot>

    <x-slot name="content">

        <div class="mt-4">
            <x-jet-label for="project_priority" value="{{ __('project_priority') }}" />
            <x-jet-input id="project_priority" class="block mt-1 w-full" type="text"
                wire:model="project_priority" />
            @error('project_priority')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <x-jet-label for="project_status" value="{{ __('project_status') }}" />
            <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_status" id="project_status">
                <option value="" disabled>Please select one</option>
                <option value="Design">Design</option>
                <option value="Ready">Ready</option>
                <option value="In Progress">In Progress</option>
                <option value="On Hold">On Hold</option>
                <option value="Completed">Completed</option>
            </select>
            @error('project_status')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>


        <div class="mt-4">
            <x-jet-label for="project_person" value="{{ __('project_person') }}" />
            <x-jet-input id="project_person" class="block mt-1 w-full" type="email"
                wire:model="project_person" />
            @error('content')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        {{-- @if ($project_id)
            <x-jet-danger-button class="ml-3" wire:click="update" wire:loading.attr="disabled">
                {{ __('Update') }}
            </x-jet-danger-button>
        @else
            <x-jet-danger-button class="ml-3" wire:click="create" wire:loading.attr="disabled">
                {{ __('Create') }}
            </x-jet-danger-button>
        @endif --}}
    </x-slot>
</x-jet-dialog-modal>