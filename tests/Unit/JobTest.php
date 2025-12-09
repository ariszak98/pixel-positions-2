<?php

use App\Models\Job;
use App\Models\Employer;

/*
test('it belongs to an Employer', function() {

    // Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);
    // Act & Assert
    expect($job->employer->is($employer))->toBeTrue();
    // Assert

});
*/


test('it can have tags', function() {

    // Arrange || Act || Assert
    $job = Job::factory()->create();

    $job->tag('FrontEnd');

    expect($job->tags)->toHaveCount(1);



});

