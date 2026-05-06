namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tamu;

class TamuSeeder extends Seeder
{
    public function run(): void
    {
        Tamu::factory()->count(10)->create();
    }
}