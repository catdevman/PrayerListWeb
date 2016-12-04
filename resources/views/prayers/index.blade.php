<div class="panel-body">

    @forelse( $prayers as $prayer )
        @include('prayers.prayer-in-list')
    @empty
        <div> No prayers found for this user </div>
    @endforelse
</div>
