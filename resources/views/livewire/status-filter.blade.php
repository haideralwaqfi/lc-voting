<div>
    <nav class="hidden md:flex items-center justify-between text-xs text-gray-400">
        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('All')" href="#" class="border-b-4 pb-3 @if($status==='All') text-gray-900 border-blue-400 @endif">All Ideas ({{$statusCount['all_statuses']}})</a></li>
            <li><a wire:click.prevent="setStatus('Considering')" href="#"
                    class="transition duration-150 ease-in border-b-4 pb-3 @if($status==='Considering') text-gray-900 border-blue-400 @endif hover:border-blue-400">Considering
                    ({{$statusCount['considering']}})</a></li>
            <li><a wire:click.prevent="setStatus('In Progress')" href="#"
                    class="transition duration-150 ease-in border-b-4 pb-3 @if($status==='In-Progress') text-gray-900 border-blue-400 @endif hover:border-blue-400">In
                    Progress ({{$statusCount['in_progress']}})</a></li>
        </ul>

        <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
            <li><a wire:click.prevent="setStatus('Implemented')" href="#"
                    class="transition duration-150 ease-in border-b-4 pb-3 @if($status==='Implemented') text-gray-900 border-blue-400 @endif hover:border-blue-400">Implemented
                    ({{$statusCount['implemented']}})</a></li>
            <li><a wire:click.prevent="setStatus('Closed')" href="#"
                    class="transition duration-150 ease-in border-b-4 pb-3 @if($status==='Closed') text-gray-900 border-blue-400 @endif hover:border-blue-400">Closed
                    ({{$statusCount['closed']}})</a></li>
        </ul>
    </nav>
</div>
