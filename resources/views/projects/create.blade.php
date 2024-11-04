<x-app-layout>
    <div class="flex h-screen">
        <!-- Left side - Form -->
        <div class="w-1/3 p-8 overflow-y-auto border-r border-gray-800">
            <h1 class="text-3xl text-gray-200 font-bold mb-6">Create New Project</h1>
            <form id="projectForm" class="space-y-6" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf <!-- CSRF token for security -->

                <!-- Project Name -->
                <div>
                    <label for="projectName" class="block text-gray-200 text-sm font-medium mb-2">Project Name</label>
                    <input type="text" id="projectName" name="projectName" value="{{ old('projectName') }}" class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">
                    @error('projectName')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-gray-200 text-sm font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Project Image -->
                <div>
                    <label for="image" class="block text-gray-200 text-sm font-medium mb-2">Project Image</label>
                    <div class="flex items-center space-x-4">
                        <button type="button" onclick="document.getElementById('image').click()" class="px-4 py-2 text-gray-200 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700">
                            Upload Image
                        </button>
                        <input type="file" id="image" name="image" accept="image/*" class="hidden" onchange="previewImage(event)">
                        <div id="imagePreview" class="hidden">
                            <img id="uploadedImage" class="h-16 w-16 object-cover rounded" alt="Project Image">
                        </div>
                    </div>
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Project Members -->
                <div>
                    <label class="block text-gray-200 text-sm font-medium mb-2">Project Members</label>
                    <div class="space-y-2" id="memberInputs">
                        <div class="flex space-x-2">
                            <input type="text" name="members[][function]" placeholder="Function (e.g., UI/UX Designer)" class="flex-grow px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">
                            <input type="text" name="members[][task_description]" placeholder="Task description" class="flex-grow px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">
                            <button type="button" onclick="addMember()" class="px-3 py-2 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700">+</button>
                        </div>
                    </div>
                </div>

                <button type="submit" class="mt-4 px-4 py-2 text-gray-200 bg-blue-600 rounded-md hover:bg-blue-500">Save</button>
            </form>
        </div>

        <!-- Right side - Preview -->
        <div class="w-1/2 p-8 overflow-y-auto bg-gray-900">
            <h2 class="text-2xl text-gray-200 font-bold mb-6">Project Preview</h2>
            <div class="bg-gray-800 border border-gray-700 rounded-lg p-6">
                <h3 id="previewProjectName" class="text-xl font-bold mb-4 text-gray-200">Project Name</h3>
                <div id="previewImageContainer" class="mb-4 hidden">
                    <img id="previewImage" class="w-full h-48 object-cover rounded" alt="Project Image">
                </div>
                <p id="previewDescription" class="text-gray-300 mb-4">Project description will appear here.</p>
                <div>
                    <h4 class="text-lg text-gray-200 font-semibold mb-2">Team Members</h4>
                    <ul id="previewMembers" class="list-disc text-gray-200 list-inside"></ul>
                </div>
                <div class="mt-6">
                    <h4 class="text-lg text-gray-200 font-semibold mb-2">Crew</h4>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('uploadedImage').src = e.target.result;
                    document.getElementById('imagePreview').classList.remove('hidden');
                    document.getElementById('previewImage').src = e.target.result;
                    document.getElementById('previewImageContainer').classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            }
        }

        function addMember() {
            const memberInputs = document.getElementById('memberInputs');
            const newMemberDiv = document.createElement('div');
            newMemberDiv.className = 'flex space-x-2 mt-2';
            newMemberDiv.innerHTML = `
                <input type="text" name="members[][function]" placeholder="Function (e.g., UI/UX Designer)" class="flex-grow text-gray-200 px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">
                <input type="text" name="members[][task_description]" placeholder="Task description" class="flex-grow text-gray-200 px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white">
                <button type="button" onclick="removeMember(this)" class="px-3 py-2 text-gray-200 bg-gray-800 border border-gray-700 rounded-md hover:bg-gray-700">-</button>
            `;
            memberInputs.appendChild(newMemberDiv);
            updatePreview();
        }

        function removeMember(button) {
            button.parentElement.remove();
            updatePreview();
        }

        function updatePreview() {
            const projectName = document.getElementById('projectName').value || 'Project Name';
            const description = document.getElementById('description').value || 'Project description will appear here.';
            const memberInputs = document.querySelectorAll('#memberInputs > div');

            document.getElementById('previewProjectName').textContent = projectName;
            document.getElementById('previewDescription').textContent = description;

            const previewMembers = document.getElementById('previewMembers');
            previewMembers.innerHTML = '';

            memberInputs.forEach(memberInput => {
                const inputs = memberInput.querySelectorAll('input');
                if (inputs[0].value) {
                    const li = document.createElement('li');
                    li.textContent = `${inputs[0].value}: ${inputs[1].value}`;
                    previewMembers.appendChild(li);
                }
            });
        }

        // Add event listeners to form inputs
        document.getElementById('projectName').addEventListener('input', updatePreview);
        document.getElementById('description').addEventListener('input', updatePreview);
        document.getElementById('memberInputs').addEventListener('input', updatePreview);
    </script>
</x-app-layout>
