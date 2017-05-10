<?php
use Carbon\Carbon;
use Fuzzybaird\Campaign\SkeletonClass;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteCollection;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Collection;
use Mockery as m;

class SpoofModelTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        Capsule::table('models')->truncate();
        Model::unguard();
        $this->now = Carbon::now();
        $this->modelData = [
          'string'     => 'abcdefghijklmnop',
          'email'      => 'tj@tjshafer.com',
          'address'    => [
              'street' => 'abcde st'
          ],
          'created_at' => $this->now,
          'updated_at' => $this->now,
        ];
    }

    public function testItCanMutateValuesForForms()
    {
        $model = new ModelThatUsesForms($this->modelData);
        $class = new SkeletonClass;
        dd($class->echoPhrase('test phrase'));
        $this->assertEquals($model->string, 'ABCDEFGHIJKLMNOP');
    }
}

class ModelThatUsesForms extends Model
{
    protected $table = 'models';
    public function formStringAttribute($value)
    {
        return strrev($value);
    }
    public function getStringAttribute($value)
    {
        return strtoupper($value);
    }
    public function formCreatedAtAttribute(Carbon $value)
    {
        return $value->timestamp;
    }
    public function getCreatedAtAttribute($value)
    {
        return '1 second ago';
    }
}