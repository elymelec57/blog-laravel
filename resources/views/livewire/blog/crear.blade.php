<div class="card">
    <div class="card-header">
        Crear Blog
    </div>
    <div class="card-body">
        <section>
            <form>
              <!-- Name input -->
              <div class="form-outline mb-4">
                <input type="text" wire:model="title" id="form4Example1" class="form-control" />
                <label class="form-label" for="form4Example1">Titulo</label>
              </div>
              @error('title')
              <span class="error">{{$message}}</span>
              @enderror

              <!-- photo input -->
              <div class="mb-4">
                <label class="form-label" for="customFile">Foto</label>
                <input type="file" wire:model="photo" id="customFile" class="form-control" />
              </div>
              @error('photo')
                    <span class="error">{{$message}}</span>
                @enderror

              <!-- Message input -->
              <div class="form-outline mb-4">
                <textarea class="form-control" wire:model="text" id="form4Example3" rows="4"></textarea>
                <label class="form-label" for="form4Example3">Texto</label>
              </div>
              @error('text')
              <span class="error">{{$message}}</span>
              @enderror
              <!-- Submit button -->
              <button type="submit"  wire:click.prevent="guardar()" class="btn btn-primary btn-block mb-4">
                Publicar
              </button>
            </form>
          </section>
    </div>
    <div class="card-footer">

    </div>
</div>