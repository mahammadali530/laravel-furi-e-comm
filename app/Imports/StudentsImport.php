<?php
namespace App\Imports;

use App\Models\studens;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentsImport implements ToModel
{
    public function model(array $row)
    {
        // Log the row data for debugging
        \Log::info('Importing row: ', $row);
    
        // Return the model instance
        return new studens([
            'name' => $row[0],
            'email' => $row[1],
            'number' => $row[2],
            'password' => bcrypt($row[3]),
            'city' => $row[4],
        ]);
    }
}
