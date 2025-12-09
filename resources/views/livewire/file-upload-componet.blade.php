<div class="container">
    {{-- <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="exampleInputEmail1">File Uploding</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                wire:model.live="photo">
            <div wire:loading wire:target="photo">Uploading...</div>

            @error('photo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        @if ($photo)
            <div class="mt-3 mb-3">
                <p class="text-muted">Image preview:</p>
                <img src="{{ $photo->temporaryUrl() }}" alt="preview" class="img-thumbnail"
                    style="max-width: 300px; height: auto;">
            </div>
        @endif

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form> --}}


    <form wire:submit="save">
        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <!-- File Input -->
            <input type="file" wire:model="photo">

            <!-- Progress Bar -->
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>

        <!-- ... -->
    </form>
</div>
