<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call(VideosTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PaymentSettingsTableSeeder::class);
        $this->call(PluginDataTableSeeder::class);
        $this->call(PluginsTableSeeder::class);
        $this->call(PostCategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TagVideoTableSeeder::class);
        $this->call(ThemeSettingsTableSeeder::class);
        $this->call(ThemesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VideoCategoriesTableSeeder::class);

    }
}
