namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TamuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_pengunjung' => $this->faker->name(),
            'instansi_asal' => $this->faker->company(),
            'tanggal_kunjungan' => $this->faker->date(),
            'keperluan_kunjungan' => 'Kunjungan Industri',
            'nomor_kontak' => $this->faker->phoneNumber(),
        ];
    }
}