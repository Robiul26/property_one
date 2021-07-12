<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Modules\Booking\Models\Booking;
use Modules\Core\Models\Settings;
use Modules\Review\Models\Review;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Modules\Property\Models\Property;

class RunUpdater
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (strpos($request->path(), 'install') === false && file_exists(storage_path() . '/installed')) {
            $this->runMigration();
            $this->runMigrationTo120();
        }
        return $next($request);
    }

    protected function runMigration(){

        if(!Schema::hasTable('bravo_property_category_translations')) {
            Schema::create('bravo_property_category_translations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('origin_id')->unsigned();
                $table->string('locale')->index();

                $table->string('name', 255)->nullable();
                $table->text('content')->nullable();

                $table->bigInteger('create_user')->nullable();
                $table->bigInteger('update_user')->nullable();

                $table->unique(['origin_id', 'locale']);

                $table->softDeletes();
                $table->timestamps();
            });
        }

        $version = '1.1.2';
        if(version_compare(setting_item('db_schema_version'),$version,'>=')) return;


        if(!Schema::hasTable('bravo_agencies_translations')) {
            Schema::create('bravo_agencies_translations', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('origin_id')->unsigned();
                $table->string('locale')->index();

                $table->string('name', 255)->nullable();
                $table->text('content')->nullable();

                $table->bigInteger('create_user')->nullable();
                $table->bigInteger('update_user')->nullable();

                $table->unique(['origin_id', 'locale']);

                $table->softDeletes();
                $table->timestamps();
            });
        }

        $agent = Role::findOrCreate('agent');

        $agent->givePermissionTo('dashboard_agent_access');

        setting_update_item('db_schema_version',$version);
    }

    protected function runMigrationTo120(){
        $version = '1.2.0';
        if(version_compare(setting_item('db_schema_version'),$version,'>=')) return;
        Artisan::call('migrate', [
            '--force' => true,
        ]);
        // Code migrate in here

        setting_update_item('db_schema_version',$version);
    }
}
