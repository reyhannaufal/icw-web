<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\Bill;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paper_comp_bills = Event::find(1)->bills();
        $bills = [
            ['BCA', 'Kevin Deanta', '5725402063'],
            ['OVO', 'Kevin Deanta', '081290227782'],
            ['Gopay', 'Kevin Deanta', '081290227782'],
        ];

        $count = count($bills);
        for ($i = 0; $i < $count; $i++) {
            $bill = Bill::create([
                'bank_name' => $bills[$i][0],
                'account_name' => $bills[$i][1],
                'account_number' => $bills[$i][2]
            ]);

            // Attach paper comp billing
            if ($i < 3) {
                $paper_comp_bills->attach($bill, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
            }
        }
    }
}
