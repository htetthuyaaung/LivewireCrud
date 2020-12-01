<div>
    Name:<br>
    <input type="text" wire:model.debound.1000ms = "name" /><br>
    Message : <br>
    <textarea  wire:model = "message"></textarea><br>

    Marital Status:<br>
    Single<input type="radio" value="Single"  wire:model = "marital_status" />
    Married<input type="radio" value="Married" wire:model = "marital_status" /><br>

    Favourite color :<br>
    Red<input type="checkbox" value="Red" wire:model = "color"/>
    Yellow<input type="checkbox" value="Yellow" wire:model = "color"/>
    Black<input type="checkbox" value="Black" wire:model = "color"/><br>

    Favourite fruit:<br>
    <select wire:model = "fruit">
        <option value="">Select Fruit</option>
        <option value="Orange">Orange</option>
        <option value="Apple">Apple</option>
        <option value="Banana">Banana</option>
    </select>

    <hr>
    Name: {{$name}}<br>
    Message:{{$message}}<br>
    Marital Status:{{$marital_status}}<br>
    Favourite Color:
    <ul>
        @foreach ($color as $color)
        <li>{{$color}}</li>
            
        @endforeach
        <br>
    Favourite Fruits:{{$fruit}}
</div>


