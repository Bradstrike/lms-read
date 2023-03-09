<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Container\Container;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create roles for production
        Role::create(['name' =>'Superadmin']);
        Role::create(['name'=>'Kurum Yöneticisi']);
        Role::create(['name'=> 'Kurum Yetkilisi']);
        Role::create(['name'=>'Öğretmen']);
        Role::create(['name'=>'Öğrenci']);

        // Create perms for production
        Permission::create(['name' => 'manage.menu']);
        Permission::create(['name' => 'manage.branches.menu']);
        Permission::create(['name' => 'manage.branches.list']);
        Permission::create(['name' => 'manage.branches.show']);
        Permission::create(['name' => 'manage.branches.edit']);
        Permission::create(['name' => 'manage.branches.create']);
        Permission::create(['name' => 'manage.branches.addcredit']);

        Permission::create(['name' => 'manage.education.menu']);

        Permission::create(['name' => 'manage.education.lessons.menu']);
        Permission::create(['name' => 'manage.education.lessons.list']);
        Permission::create(['name' => 'manage.education.lessons.create']);
        Permission::create(['name' => 'manage.branches.lessons.edit']);
        Permission::create(['name' => 'manage.branches.lessons.sales']);
        Permission::create(['name' => 'manage.education.lessons.lectures.list']);
        Permission::create(['name' => 'manage.education.lessons.lectures.update']);

        Permission::create(['name' => 'manage.education.exams.menu']);

        Permission::create(['name' => 'manage.users.menu']);

        Permission::create(['name' => 'manage.users.list']);
        Permission::create(['name' => 'manage.users.all']);
        Permission::create(['name' => 'manage.users.create']);
        Permission::create(['name' => 'manage.users.edit']);

        Permission::create(['name' => 'manage.teachers.list']);
        Permission::create(['name' => 'manage.teachers.all']);
        Permission::create(['name' => 'manage.teachers.create']);
        Permission::create(['name' => 'manage.teachers.edit']);

        Permission::create(['name' => 'manage.authorization.menu']);

        Permission::create(['name' => 'manage.authorization.roles.list']);
        Permission::create(['name' => 'manage.authorization.roles.edit']);

        Permission::create(['name' => 'manage.authorization.perms.list']);
        Permission::create(['name' => 'manage.auth.perms.edit']);

        Permission::create(['name' => 'users.menu']);

        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.list']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.all']);

        Permission::create(['name' => 'sales.menu']);

        Permission::create(['name' => 'sales.show']);
        Permission::create(['name' => 'sales.all']);
        Permission::create(['name' => 'sales.list']);

        Permission::create(['name' => 'definitions.menu']);
        Permission::create(['name' => 'interface.menu']);

        $superadmin = Role::whereName('Superadmin')->first();
        $kurum_yoneticisi = Role::whereName('Kurum Yöneticisi')->first();
        $kurum_yetkilisi = Role::whereName('Kurum Yetkilisi')->first();
        $ogretmen = Role::whereName('Öğretmen')->first();
        $ogrenci = Role::whereName('Öğrenci')->first();

        /**
        **
        ** The following data has been added for testing. *
        **
        **/

        // Branch Seeds
        \App\Models\Branch::factory(10)->create();

        // User superadmin
        $user = \App\Models\User::factory()->create([
            "branch_id"     => 0,
            "firstname"     => "Murat",
            "lastname"      => "Güven",
            "email"         => "murat@klynapps.com"
        ]);

        $user->assignRole($superadmin);

        // User Seeds
        for ($i=0; $i < 30; $i++) { 
            $user = \App\Models\User::create([
                'branch_id' => fake()->randomDigitNot(0),
                'firstname' => fake()->firstName(),
                'lastname' => fake()->lastName(),
                'email' => fake()->safeEmail(),
                'phone' => fake()->e164PhoneNumber(),
                'birthday' => fake()->dateTimeInInterval('-30 years', '-20 years'),
                'address' => fake()->address(),
                'avatar' => "default.jpg",
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'status' => '1',
                'remember_token' => \Str::random(10),
            ]);

            $user->assignRole('Öğrenci');
        }

        // SMS Integration Test Seed
        \App\Models\Integration::create([
            "definition_type"   => "SMS", 
            "name"              => "NetGSM Sms", 
            "config"            => "{}"
        ]);

        // EMAIL Integration Test Seed
        \App\Models\Integration::create([
            "definition_type"   => "EMAIL", 
            "name"              => "Mailchimp", 
            "config"            => "{}"
        ]);

        // POS Integration Test Seed
        \App\Models\Integration::create([
            "definition_type"   => "POS", 
            "name"              => "PayTR", 
            "config"            => "{}"
        ]);

        // Exercise Definition Test Seed
        \App\Models\Exercise::create([
            "name"              => "Test Egzersiz", 
            "path"              => "/egzersizler/testegzersiz/index.php", 
            "type"              => "Makale", 
            "config"            => "['hiz'=>'Hız','kelime'=>'Kelime','sure'=>'Süre']"
        ]);

        // JSON Definition Test Seed
        \App\Models\JsonDefinition::create([
            "title"             => "Test JSON", 
            "content"           => "
            <div id='lipsum'>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan nibh imperdiet, elementum nisl ornare, efficitur arcu. Suspendisse fringilla pharetra pulvinar. Integer consectetur lectus non sapien finibus, ac aliquam neque facilisis. Cras scelerisque id mauris sit amet rutrum. Donec lacinia suscipit ligula, eu tristique nulla interdum quis. Maecenas id faucibus lectus. In et est tincidunt, facilisis nisl in, bibendum nibh. Morbi augue ante, consequat quis arcu ut, fringilla imperdiet metus. Proin eget nunc ac orci finibus sodales. Pellentesque vel lectus quis leo porta sagittis. Curabitur lorem nunc, porta sit amet semper eget, condimentum in leo. Phasellus rhoncus ullamcorper sollicitudin.
            </p>
            <p>
            Mauris fermentum blandit lobortis. Nam condimentum accumsan nisi, pellentesque efficitur ipsum ullamcorper eget. Donec facilisis vulputate massa nec faucibus. Etiam rhoncus, elit nec pretium ullamcorper, dui sapien dictum leo, sit amet auctor magna nisi eget lorem. Aliquam eu ullamcorper sem. Sed nibh ante, ultrices sit amet tristique quis, volutpat sed risus. Phasellus ornare at turpis sed vulputate. Ut semper quam justo. Cras malesuada est in ipsum interdum pulvinar. Vestibulum fermentum, dui eu pulvinar iaculis, turpis nisl egestas nisi, sit amet faucibus arcu lectus dapibus diam. Nulla facilisi. Maecenas semper finibus nisi non dictum. Proin sed aliquet velit, quis egestas sapien.
            </p>
            <p>
            Pellentesque maximus diam quis finibus vehicula. Sed vitae scelerisque leo, vel sodales risus. Integer sit amet enim a diam pretium eleifend ut non nunc. Nulla facilisi. Maecenas felis sapien, malesuada vel dui vehicula, accumsan imperdiet ligula. Donec interdum varius cursus. Cras quis neque venenatis, porttitor eros eu, molestie eros. Ut laoreet ante sem, eu euismod leo ullamcorper quis. Sed rhoncus eleifend enim, ut vestibulum libero vulputate sit amet.
            </p>
            <p>
            Phasellus placerat dui augue, ut finibus magna venenatis in. Morbi vitae odio vehicula, tempor mauris a, tempus elit. Pellentesque placerat lacus eu mi mollis congue. Morbi risus lacus, interdum vitae erat non, elementum accumsan elit. Maecenas aliquam risus et eleifend feugiat. Pellentesque sed nunc eleifend velit vulputate dignissim. Curabitur tincidunt tellus vel ipsum pulvinar, non condimentum urna venenatis. Proin egestas elit et lorem vestibulum, vel bibendum leo interdum. Donec placerat mi vel nibh malesuada, ac rutrum justo hendrerit. Fusce vitae quam at magna molestie porta. Mauris tristique nec augue eu sollicitudin. Aenean maximus nunc non aliquam pretium. In eu dolor eu risus faucibus vestibulum. Duis ante nisl, convallis sit amet viverra ut, vestibulum id mi. Curabitur vehicula mi et est sollicitudin blandit.
            </p>
            <p>
            Aenean sed finibus massa, ut vulputate erat. Praesent accumsan eleifend risus, a vehicula velit blandit nec. Donec eget nisl vehicula, maximus odio a, placerat augue. Vestibulum justo est, pulvinar nec turpis sed, sagittis viverra est. Sed at mauris tortor. Maecenas tincidunt orci vel purus hendrerit gravida. Proin at orci sit amet mauris porttitor placerat. Maecenas a urna eu nulla imperdiet ultricies vel eu tellus. Ut id sodales mauris, ut molestie lectus. Quisque consequat pharetra pretium. Quisque sodales non lacus vitae ultricies. Integer et orci risus. Aliquam ligula nisl, fermentum et lorem euismod, dapibus luctus ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium cursus rutrum.
            </p>
            </div>
            ", 
            "type"              => "Makale"
        ]);

        \App\Models\Lesson::create([
            "name"          => "Test Eğitim",
            "description"   => "Test Eğitim Açıklaması",
            "image"         => "images/uEum4DzuVN5FRze4rFTdjboPHwpZ8TyQcS510N0J.jpg",
            "thumbnail"     => "thumbnails/BJkXZWhAHn6JYyW7c6mneaUEpiwQ8xDwUUwt18V9.jpg",
            "price"         => "90.99",
            "state"         => 1,
            "tags"          => "Eğitim, Hızlı Okuma"
            
         
            
        ]);


       
}
}