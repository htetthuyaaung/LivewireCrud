<div>
    <button type="button" wire:click="addTowNumber(2,3)">Sum</button><br>
    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea>

    <form wire:submit.prevent="getSum()">
        Num1:<input type="text" name="num1" wire:model = "num1"/>
        Num2:<input type="text" name="num2" wire:model = "num2"/>
        <button type="submit">Submit</button>
    </form>

    sum:{{$sum}}
    message:{{$message}}
</div>
