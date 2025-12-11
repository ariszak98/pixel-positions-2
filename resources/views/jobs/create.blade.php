<x-layout>

    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs"  >
        <x-forms.input required label="Title" name="title" placeholder="CEO" />
        <x-forms.input required label="Salary" name="salary" placeholder="$120,000"/>
        <x-forms.input required label="Location" name="location" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input required label="URL" name="url" placeholder="https://winterpark.com/job/queries/123214" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input required label="Tags (comma seperated)" name="tags" placeholder="laracasts, php, input, etc" />

        <x-forms.button>Create Job</x-forms.button>
    </x-forms.form>

</x-layout>