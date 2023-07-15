<div>
    <h1>Hello, world!</h1>
    <h1>{{ $post }}</h1>
    @foreach($collection as $item)
        <h1>{{ $item }}</h1>
    @endforeach
    <h1>{{ $model }}</h1>
    <input type="text" wire:model="model">
    <h1>{{ $clicked }}</h1>
    <button wire:click="click">클릭이벤트</button>
    @if($toggle == true)
        <h1>ON</h1>
    @else
        <h1>OFF</h1>
    @endif
    <button wire:click="$toggle('toggle')">토글이벤트</button>
    <h1>유효성 검사</h1>
    <form wire:click.prevent="validation">
        <input type="text" placeholder="이름을 입력해 주세요." wire:model="name">
        @error('name')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="text" placeholder="이메일을 입력해 주세요." wire:model="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <input type="password" placeholder="비밀번호를 입력해 주세요." wire:model="password">
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <br>
        <button>전송하기</button>
    </form>
</div>
