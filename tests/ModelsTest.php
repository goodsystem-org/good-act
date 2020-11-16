<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use GoodSystem\GoodAct\Act;
use GoodSystem\GoodAct\Review;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase;

    public function test_models_can_be_created()
    {
        $model = new Act();
        $model->summary = 'new act';
        $model->proof = '/tmp';
        $model->act_by_id = 12345;
        $model->save();
        $id = $model->id;
        $modelFound = Act::find($id);
        $this->assertEquals('new act', $modelFound->summary);

        $model = new Review();
        $model->summary = 'new review';
        $model->reviewable_id = 1234;
        $model->reviewable_type = 'Act';
        $model->reviewed_by_id = 12345;
        $model->save();
        $id = $model->id;
        $modelFound = Review::find($id);
        $this->assertEquals('new review', $modelFound->summary);
    }
}
