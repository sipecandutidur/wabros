<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CategoryContact;
use App\Models\Contact;
use App\Models\Message;
use App\Models\MyStore;
use App\Models\ProductPackages;
use App\Models\Transaction;
use Database\Factories\ContactFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Contact::factory(10)->create();
        CategoryContact::factory(4)->create();
        Message::factory(5)->create();

        MyStore::factory(2)->create();
        ProductPackages::factory(2)->create();
        Transaction::factory(2);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
