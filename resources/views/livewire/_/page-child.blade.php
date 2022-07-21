<ul class="px-6 py-1" style="list-style: numeric;">
    <?php
    /** @var \App\Models\Page $page */
    ?>
    @foreach($children as $page)
        @php
            $parentSlug .='/'.urlencode($page->slug);
        @endphp
        <li>
            <a class="text-blue-500 hover:text-blue-800" href="{{$parentSlug}}">
                {{ Str::ucfirst($page->title) }}
            </a>
            @if(count($page->children))
                @include('livewire._.page-child',['children' => $page->children,'parentSlug'=>$parentSlug])
            @endif
        </li>

    @endforeach

</ul>
