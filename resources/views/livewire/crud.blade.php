<div>
    <div>
        <h1>데이터 조회</h1>
        @foreach($ordermenus as $ordermenu)
        <div>
            <span>{{ $ordermenu->from }}</span>
            <span>{{ $ordermenu->name }}</span>
            <span>{{ $ordermenu->count }}</span>
        </div>
        @endforeach
    </div>
    <div>
        <h1>데이터 생성</h1>
        <input type="text" placeholder="테이블 명" wire:model="from">
        <input type="text" placeholder="주문명" wire:model="name">
        <input type="text" placeholder="주문 수량" wire:model="count">
        <button wire:click="create">추가하기</button>
    </div>
    <div>
        <h1>데이터 수정</h1>
        <input type="text" placeholder="수정할 주문 번호" wire:model="num">
        <input type="text" placeholder="주문 수량" wire:model="cnt">
        <button wire:click="update">수정하기</button>
    </div>
    <div>
        <h1>데이터 삭제</h1>
        <input type="text" placeholder="삭제할 주문 번호" wire:model="number">
        <button wire:click="delete">삭제하기</button>
    </div>
</div>
