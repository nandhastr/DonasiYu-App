
        <div class="mb-3">
            <label for="disabledTextInput" class="text-sm"><i class="fas fa-user mr-2"></i> Nama</label>
            <input type="text" value="{{ Auth::user()->name }}" id="disabledTextInput" class="form-control bg-transparent border-none" disabled >
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="text-sm"><i class="fa fa-envelope mr-2"></i> Email</label>
            <input type="text" value="{{ Auth::user()->email }}" id="disabledTextInput" class="form-control bg-transparent border-none" disabled >
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="text-sm"><i class="fa fa-phone mr-2"></i> Telpon</label>
            <input type="text" value="{{ Auth::user()->phone }}" id="disabledTextInput" class="form-control bg-transparent border-none" disabled >
        </div>
        
        <div class="d-flex justify-content-end">
            <a href="{{ route('account.edit') }}" class="btn text-sm bg-btn  mt-5"><u><i class="fas fa-pen-alt"></i> Edit Profile</u></a>
        </div>
   