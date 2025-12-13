@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent group hover:border-blue-600 transition-colors duration-300">
        
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="text-gray-400 self-start text-sm">{{ $job->employer->name }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $job->url }}">{{ $job->title }}</a>
        </h3>
        <p class="mt-auto text-sm text-gray-400">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
       
        @foreach ($job->tags as $tag)
            <x-tag :$tag size='small' />
        @endforeach
       
        
        
    </div>

    
</div>