<x-layout>
   <x-breadcrumb :$job class="md-4"
   :links="['job' => route('jobs.index'),$job->title => '#']"/>
    <x-job-card :$job/>
</x-layout>
