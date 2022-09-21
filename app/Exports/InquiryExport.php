<?php 
namespace App\Exports;

use App\Models\Inquiry;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class InquiryExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'Company',
            'Name',
            'Business',
            'Email',
            'Phone',
            'State',
            'City'
        ];
    } 

    public function collection()
    {
        return Inquiry::select('company', 'name', 'business', 'email', 'phone', 'state', 'city')->orderBy('created_at', 'desc')->get();
    }
}