{{--verificar si hay un elemento que corresponda a breadcrumb--}}
@if(count($breadcrumbs))
    {{--margin--}} 
    <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">
            {{-- recorrer elementos de breadcrumb --}}
            @foreach ($breadcrumbs as $item)
            <li class ="flex items-center">
                {{--itmerida-poniente-dsc-edificio-h8--}}
                {{--sino es el primer elemento ponle separador--}}
                @unless($loop->first)
                    <span class="px-1 text-gray-400">/<span>
                @endunless
                {{--revise si tiene un href--}}
                @isset($item['href'])
                    <a href="{{ $item['href'] }}"
                        class="opacity-60 hover:opacity-100 hover transition">
                            {{ $item['name'] }}
                    </a>
                @else
                    {{ $item['name'] }}
                @endisset
            </li>
            @endforeach
        </ol>
        {{--El ultimo elemento en negritas--}}
        @if (count($breadcrumbs) > 1)
        <h6 class="font-bold- mt-2">
            {{ end($breadcrumbs)['name'] }}
        </h6>
        @endif
    </nav>
@endif