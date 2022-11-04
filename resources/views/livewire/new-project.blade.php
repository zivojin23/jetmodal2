{{-- <div>
    <form wire:submit.prevent="saveProject">
        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="email" class="mb-2 text-sm font-medium">Email</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="email"  id="email" type="email" placeholder="Your Email">             
            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
        </div>
    
        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="project_name" class="mb-2 text-sm font-medium">Project Name</label>
            <input class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_name" id="project_name" type="text" placeholder="Name of your project">              
            @error('project_name')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>
    
        <div class="flex flex-col w-4/5 mx-auto my-8">
            <label for="project_priority" class="mb-2 text-sm font-medium">Project Priority</label>
            <select class="shadow p-2.5 text-sm rounded-lg bg-gray-50 border border-gray-300" 
                wire:model="project_priority" id="project_priority">
                <option value="" disabled selected>Please select one</option>
                <option value="LOW">Low</option>
                <option value="MEDIUM">Medium</option>
                <option value="HIGH">High</option>
            </select>      
            @error('project_priority')<span class="text-red-600">{{ $message }}</span>@enderror
        </div>
    
        <button type="submit" wire:click.prevent="saveProject()">
            saveProject
        </button>
        </form>
</div> --}}