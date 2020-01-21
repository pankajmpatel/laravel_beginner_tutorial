<div>
    <label for="name">Name</label>
<input type="text" name="name" autocomplete="off" placeholder="Name" value="{{old('name') ?? $customer->name}}">
@error('name') <p style="color:red">{{ $message }}</p>@enderror
</div>
<div>
    <label for="email">E-mail</label>
    <input type="text" name="email" autocomplete="off" placeholder="E-mail" value="{{old('email') ?? $customer->email}}">
    @error('email') <p style="color:red">{{ $message }}</p>@enderror
</div>

@csrf
