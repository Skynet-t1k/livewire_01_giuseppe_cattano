<div>
 <div class="container d-flex justify-content-center">
    <div class="grid-container">
        <div class="item item1">{{$count}}</div>
        <div class="item item2"><button class="btn btn-primary" wire:click="increment">+</button></div>
        <div class="item item3"><button class="btn btn-danger" wire:click="decrement">-</button></div>
        <div class="item item4"><button class="btn btn-primary" wire:click="addNumber(5)">+5</button></div>
        <div class="item item5"><button class="btn btn-danger" wire:click="subNumber(5)">-5</button></div>
    </div>
 </div>
</div>
