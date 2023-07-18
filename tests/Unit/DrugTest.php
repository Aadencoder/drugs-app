<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Drug;

class DrugTest extends TestCase
{
	use RefreshDatabase;

    /**
     * Test drug creation.
     *
     * @return void
     */
    public function testCreateDrug()
    {
    	$drugData = [
    	'title' => 'Test Drug',
    		'description' => 'This is a test drug.',
    	];

    	$drug = Drugs::create($drugData);

    	$this->assertInstanceOf(Drugs::class, $drug);
    	$this->assertDatabaseHas('drugs', $drugData);
    }

    /**
     * Test drug retrieval.
     *
     * @return void
     */
    public function testRetrieveDrug()
    {
    	$drugData = [
    	'title' => 'Test Drug',
    		'description' => 'This is a test drug.',
    	];

    	$drug = Drugs::create($drugData);

    	$retrievedDrug = Drugs::find($drug->id);

    	$this->assertInstanceOf(Drugs::class, $retrievedDrug);
    	$this->assertEquals($drugData['title'], $retrievedDrug->title);
    	$this->assertEquals($drugData['description'], $retrievedDrug->description);
    }

    /**
     * Test drug update.
     *
     * @return void
     */
    public function testUpdateDrug()
    {
    	$drugData = [
    		'title' => 'Test Drug',
    		'description' => 'This is a test drug.',
    	];

    	$drug = Drugs::create($drugData);

    	$updatedData = [
    		'title' => 'Updated Drug',
    		'description' => 'This drug has been updated.',
    	];

    	$drug->update($updatedData);

    	$this->assertEquals($updatedData['title'], $drug->title);
    	$this->assertEquals($updatedData['description'], $drug->description);
    }

    /**
     * Test drug deletion.
     *
     * @return void
     */
    public function testDeleteDrug()
    {
    	$drugData = [
    		'title' => 'Test Drug',
    		'description' => 'This is a test drug.',
    	];

    	$drug = Drugs::create($drugData);
    	$drug->delete();

    	$this->assertDeleted($drug);
    }
}
