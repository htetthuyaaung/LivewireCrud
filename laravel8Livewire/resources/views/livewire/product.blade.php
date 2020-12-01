<div>
   Title: <input type="text" wire:model= "title"/><br>
    Name: <input type="text" wire:model= "name"/><br>

    <h3>Title: {{$title}}</h3>
    <h4>Name: {{$name}}</h4>

    <h3>LifeCycle Hooks Method</h3>
    @foreach ($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
